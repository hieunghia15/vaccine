<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;
use App\Models\VaccineType;
use App\Models\Vaccine;
use App\Http\Requests\VaccineRequest;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(Vaccine $vaccineModel, Manufacture $manufactureModel, VaccineType $vaccineTypeModel)
    {
        $this->vaccines = $vaccineModel;
        $this->manufactures = $manufactureModel;
        $this->vaccineTypes = $vaccineTypeModel;
    }
    public function index()
    {
        $vaccines = $this->vaccines->all();
        return view('admin.vaccines.index', compact('vaccines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufactures = $this->manufactures->all();
        $vaccine_types = $this->vaccineTypes->all();
        return view('admin.vaccines.create', compact('manufactures', 'vaccine_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VaccineRequest $request)
    {
        $validated_data = $request->all();
        $this->vaccines->create($validated_data);
        return redirect()->route('admin.vaccines.index')->with('status', 'Tạo vắc xin thành công');
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

        $vaccines = $this->vaccines->findOrFail($id);
        $manufacture_id = $vaccines->manufacture_id;
        $manufactures = $this->manufactures->where('id', '<>', $manufacture_id)->get();

        $vaccine_type_id = $vaccines->vaccine_type_id;
        $vaccine_types = $this->vaccineTypes->where('id', '<>', $vaccine_type_id)->get();
        return view('admin.vaccines.edit', compact('vaccines', 'manufactures', 'vaccine_types'));
    }

    public function show($id)
    {

        $vaccines = $this->vaccines->findOrFail($id);
        return view('admin.vaccines.show', compact('vaccines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VaccineRequest $request, $id)
    {
        $validated_data = $request->all();
        $vaccines = $this->vaccines->findOrFail($id);
        $vaccines->update($validated_data);
        return redirect()->route('admin.vaccines.index')->with('status', 'Cập nhật vắc xin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vaccines = $this->vaccines->findOrFail($id);
        $vaccines->delete();
        return redirect()->route('admin.vaccines.index')->with('status', 'Xóa vắc xin thành công');
    }
}
