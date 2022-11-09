<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Vaccine;
use App\Models\Certificate;
use App\Models\ReactionStatus;
use App\Models\VaccinationNumber;

class ReactionStatusController extends Controller
{
    public function  __construct(
        User $userModel,
        Vaccine $vaccineModel,
        Certificate $certificateModel,
        ReactionStatus $reactionStatusModel,
        VaccinationNumber $VaccinationNumberModel,
    ) {
        $this->users = $userModel;
        $this->vaccines = $vaccineModel;
        $this->certificates = $certificateModel;
        $this->reactionStatuses = $reactionStatusModel;
        $this->vaccinationNumbers = $VaccinationNumberModel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $certificates = $this->certificates::with('user')
            ->where('user_id', $user_id)
            ->get();
        $certificate_id = $this->certificates::select('id')
            ->where('user_id', $user_id)
            ->get()->toArray();
        $reaction_statuses = $this->reactionStatuses::with('certificate')
            ->whereIn('certificate_id', $certificate_id)
            ->get();
        $count = $reaction_statuses->count();
        return view('citizen.user.list-reaction-status', compact('users', 'reaction_statuses', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $reaction_time = now();

        $certificate_id_arr = $this->certificates::select('id')
            ->where('user_id', $user_id)
            ->get()->toArray();
        $certificate_id = $this->certificates::select('id')
            ->where('user_id', $user_id)
            ->get();
        $reaction_statuses = $this->reactionStatuses::with('certificate')
            ->whereIn('certificate_id', $certificate_id_arr)->get();
        $reaction_status_arr = $this->reactionStatuses::select('certificate_id')
            ->whereIn('certificate_id', $certificate_id_arr)->get()->toArray();

        if (isset($reaction_statuses) && $reaction_statuses->count() == $certificate_id->count()) {
            return back()->with('warning', "Bạn đã nhập phản ứng sau tiêm chủng cho từng mũi tiêm");
        } else {
            $certificates = $this->certificates::with('user')
                ->where('user_id', $user_id)
                ->whereNotIn('id', $reaction_status_arr)
                ->get();
            $data = [
                'users' => $users,
                'user_id' => $user_id,
                'reaction_time' => $reaction_time,
                'certificates' => $certificates
            ];
            return view('citizen.user.create-reaction-status')->with($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'reaction_time' => ['required'],
            'dose' => ['required'],
            'pain' => ['required'],
            'nausea' => ['required'],
            'diarrhea' => ['required'],
            'fever' => ['required'],
            'sore_throat' => ['required'],
            'chills' => ['required'],
            'headache' => ['required'],
            'rash' => ['required'],
            'other' => ['nullable'],
            'therapy' => ['required'],
            'place' => ['nullable'],
            'current_status' => ['required', 'string'],
        ], [
            'current_status.required' => "Tình trạng hiện tại không được để trống"
        ]);
        $user_id = Auth::id();
        $dose = $request->dose;
        $certificates = $this->certificates::with('user')
            ->where('vaccination_number_id', $dose)
            ->where('user_id', $user_id)
            ->first();
        $this->reactionStatuses::create([
            'reaction_time' => $request->reaction_time,
            'dose' => $request->dose,
            'pain' => $request->pain,
            'nausea' => $request->nausea,
            'diarrhea' => $request->diarrhea,
            'fever' => $request->fever,
            'sore_throat' => $request->sore_throat,
            'chills' => $request->chills,
            'headache' => $request->headache,
            'rash' => $request->rash,
            'other' => $request->other,
            'therapy' => $request->therapy,
            'place' => $request->place,
            'current_status' => $request->current_status,
            'certificate_id' => $certificates->id
        ]);
        return redirect()->route('citizen.user.list-reaction-status')->with('status', "Nhập phản ứng sau tiêm thành công");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $reaction_statuses = $this->reactionStatuses::with('certificate')
            ->findOrFail($id);
        $certificates = $this->certificates::with('user')
            ->where('id', $reaction_statuses->certificate_id)
            ->first();
        $certificate = $this->certificates::with('user')
            ->where('user_id', $user_id)
            ->where('id', '<>', $certificates->id)
            ->get();
        return view(
            'citizen.user.update-reaction-status',
            compact('user_id', 'users', 'reaction_statuses', 'certificates', 'certificate')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'reaction_time' => ['required'],
            'dose' => ['required'],
            'pain' => ['required'],
            'nausea' => ['required'],
            'diarrhea' => ['required'],
            'fever' => ['required'],
            'sore_throat' => ['required'],
            'chills' => ['required'],
            'headache' => ['required'],
            'rash' => ['required'],
            'other' => ['nullable'],
            'therapy' => ['required'],
            'place' => ['nullable'],
            'current_status' => ['required', 'string'],
        ], [
            'current_status.required' => "Tình trạng hiện tại không được để trống"
        ]);
        $user_id = Auth::id();
        $reaction_status = $this->reactionStatuses::findOrFail($id);
        $reaction = $this->reactionStatuses::with('certificate')
            ->where('id', $id)
            ->first();
        $certificates = $this->certificates::with('reactionStatuses')
            ->where('id', $reaction->certificate_id)
            ->where('user_id', $user_id)
            ->first();
        $reaction_status->update([
            'reaction_time' => $request->reaction_time,
            'dose' => $request->dose,
            'pain' => $request->pain,
            'nausea' => $request->nausea,
            'diarrhea' => $request->diarrhea,
            'fever' => $request->fever,
            'sore_throat' => $request->sore_throat,
            'chills' => $request->chills,
            'headache' => $request->headache,
            'rash' => $request->rash,
            'other' => $request->other,
            'therapy' => $request->therapy,
            'place' => $request->place,
            'current_status' => $request->current_status,
            'certificate_id' => $certificates->id
        ]);
        return redirect()->route('citizen.user.list-reaction-status')->with('status', "Cập nhật phản ứng sau tiêm thành công");
    }
}
