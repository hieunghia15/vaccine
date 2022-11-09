<?php

namespace App\Http\Controllers\Citizen;

use App\Http\Controllers\Controller;
use Auth;
use App\Models\User;
use App\Models\Ward;
use App\Models\Vaccine;
use App\Models\Relation;
use App\Models\Certificate;
use App\Models\PriorityGroup;
use App\Models\MedicalHistory;
use App\Models\ReactionStatus;
use App\Models\VaccinationNumber;
use App\Models\VaccineRegistration;
use App\Models\VaccinationConsentForm;
use App\Models\VaccinatedPersonInformation;
use App\Http\Requests\VaccinatedPersonInfoRequest;

use Illuminate\Http\Request;

class RegisterPersonController extends Controller
{
    public function  __construct(
        User $userModel,
        Ward $wardModel,
        Vaccine $vaccineModel,
        Relation $relationModel,
        Certificate $certificateModel,
        PriorityGroup $priorityGroupModel,
        MedicalHistory $medicalHistoryModel,
        ReactionStatus $reactionStatusModel,
        VaccinationNumber $VaccinationNumberModel,
        VaccineRegistration $vaccineRegistrationModel,
        VaccinationConsentForm $vaccinationConsentFormModel,
        VaccinatedPersonInformation $vaccinatedPersonInformationModel,
    ) {
        $this->users = $userModel;
        $this->wards = $wardModel;
        $this->vaccines = $vaccineModel;
        $this->relations = $relationModel;
        $this->certificates = $certificateModel;
        $this->priorityGroups = $priorityGroupModel;
        $this->medicalHistories = $medicalHistoryModel;
        $this->reactionStatuses = $reactionStatusModel;
        $this->vaccinationNumbers = $VaccinationNumberModel;
        $this->vaccineRegistrations = $vaccineRegistrationModel;
        $this->vaccinationConsentForms = $vaccinationConsentFormModel;
        $this->vaccinatedPersonInformations = $vaccinatedPersonInformationModel;
    }
    public function index()
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $priorities = $this->priorityGroups::all();
        $relations = $this->relations::all();
        $certificates = $this->certificates::with('user')
            ->where('user_id', $user_id)->latest()->first(); //certificates[0] is latest
        if ($certificates != null) {
            $next_dose = $certificates->dose->dose;
            $reaction_statuses = $this->reactionStatuses::with('certificate')
                ->where('certificate_id', $certificates->id)->first();
            if ($reaction_statuses != null) {
                $current_status = $reaction_statuses->current_status;
            } else {
                $current_status = null;
            }

            $vaccine_name = $certificates->vaccine->name;
            $data = [
                'users' => $users,
                'user_id' => $user_id,
                'priorities' => $priorities,
                'relations' => $relations,
                'certificates' => $certificates,
                'reaction_statuses' => $reaction_statuses,
                'next_dose' => $next_dose,
                'current_status' => $current_status,
                'vaccine_name' => $vaccine_name,
            ];
        } else {
            $data = [
                'users' => $users,
                'user_id' => $user_id,
                'priorities' => $priorities,
                'relations' => $relations,
                'certificates' => null,
                'next_dose' => null,
            ];
        }
        return view('citizen.user.register-person')->with($data);
    }

    public function register(VaccinatedPersonInfoRequest $request)
    {
        $users = Auth::user();
        $user_id = Auth::id();
        $request->validated();
        $person_info = $this->vaccinatedPersonInformations::create([
            'health_insurance_number' => $request->health_insurance_number,
            'priority_group_id' => $request->priority_group_id,
            'job' => $request->job,
            'address' => $request->address,
            'ward_id' => $request->ward_id,
            'guardian' => $request->guardian,
            'guardian_phone_number' => $request->guardian_phone_number,
            'relation_id' => $request->relation,
            'preferred_date' => $request->preferred_date,
            'session' => $request->session,
            'date_injection' => now(),
            'certificate_id' => $request->certificate_id,
        ]);
        $person_info_id = $person_info->id;

        $medical = $this->medicalHistories::create([
            'anaphylaxis' => $request->anaphylaxis,
            'covid_19' => $request->covid_19,
            'other_vaccination' => $request->other_vaccination,
            'immunosuppression' => $request->immunosuppression,
            'immunosuppressant' => $request->immunosuppressant,
            'acute_illness' => $request->acute_illness,
            'chronic' => $request->chronic,
            'chronic_illness' => $request->chronic_illness,
            'pregnant' => $request->pregnant,
            'over_age' => $request->over_age,
            'coagulation' => $request->coagulation,
            'allergy' => $request->allergy,
        ]);
        $medical_history_id = $medical->id;

        $consent_form = $this->vaccinationConsentForms::create([
            'status' => $request->status,
        ]);
        $vaccination_consent_form_id = $consent_form->id;

        $register = $this->vaccineRegistrations::create([
            'status' => 0,
            'user_id' => $user_id,
            'vaccination' => $request->vaccination,
            'vaccinated_person_information_id' => $person_info_id,
            'medical_history_id' => $medical_history_id,
            'vaccination_consent_form_id' => $vaccination_consent_form_id
        ]);
        return redirect()->route('citizen.registration.successful')->with('status', 'Đăng ký tiêm chủng thành công');
    }
}
