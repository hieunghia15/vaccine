<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;
use App\Models\Nation;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  __construct(Manufacture $manufactureModel, Nation $nationModel)
    {
        $this->manufactures = $manufactureModel;
        $this->nations = $nationModel;
    }
    public function index()
    {
        $manufactures = $this->manufactures->with('nation')->get();
        return view('admin.manufactures.index', compact('manufactures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nations = $this->nations->all();
        return view('admin.manufactures.create', compact('nations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate(
            [
                'name' => ['required', 'string'],
                'nation_id' => ['required', 'string']
            ],
            [
                'name.required' => "Tên hãng sản xuất không được để trống",
                'nation_id' => "Quốc gia không được để trống"
            ]
        );
        $this->manufactures->create($validated_data);
        return redirect()->route('admin.manufactures.index')->with('status', 'Tạo hãng sản xuất thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufactures = $this->manufactures->findOrFail($id);
        $nations = $this->nations->with('manufactures')->where('id', '<>', $manufactures->nation_id)->get();
        return view('admin.manufactures.edit', compact('manufactures', 'nations'));
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
        $validated_data = $request->validate([
            'name' => ['required', 'string'],
            'nation_id' => ['required', 'string']

        ], [
            'name.required' => "Tên hãng sản xuất không được để trống",
            'nation_id' => "Quốc gia không được để trống"
        ]);
        $manufactures = $this->manufactures->findOrFail($id);
        $manufactures->update($validated_data);
        return redirect()->route('admin.manufactures.index')->with('status', 'Cập nhật hãng sản xuất thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $manufactures = $this->manufactures->findOrFail($id);
        $manufactures->delete();
        return redirect()->route('admin.manufactures.index')->with('status', 'Xóa hãng sản xuất thành công');
    }
}
