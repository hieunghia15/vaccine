<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VaccineType;
use Illuminate\Support\Facades\Validator;

class VaccineTypeController extends Controller
{
    public function __construct(VaccineType $vaccineTypeModel)
    {
        $this->vaccineTypes = $vaccineTypeModel;
    }

    public function index()
    {
        return view('admin.vaccine-types.index');
    }

    public function fetchVaccineType()
    {
        $vaccineTypes = $this->vaccineTypes::select('id', 'name', 'description')->orderBy('id', 'asc')->get();
        return response()->json([
            'vaccineTypes' => $vaccineTypes
        ]);
    }
    public function searchVaccineType(Request $request)
    {
        $output = "";
        $vaccine_types = $this->vaccineTypes::select('id', 'name', 'description')
            ->where('name', 'LIKE', '%' . $request->search . '%')->get();
        foreach ($vaccine_types as $key => $value) {
            $output .= '<tr>\
                <td>' . $key + 1 . '</td>\
                <td>' . $value->name . '</td>\
                <td class="col-md-7">' . $value->description . '   </td>\
                <td class="project-actions text-right">
                    <button type="button" data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' . $value->id . '" class="edit btn btn-primary btn-sm" href="#" data-toggle="modal"\
                        data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>
                    <button type="button" data-toggle="tooltip" data-placement="top" title="Xoá" value="' . $value->id . '" class="delete btn btn-danger btn-sm" href="#" data-toggle="modal"\
                        data-target="#deleteModal"><i class="fas fa-trash"></i></button>
                </td>\
            </tr>';
        }

        return response($output);
    }
    public function store(Request $request)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:vaccine_types,name'],
            'description' => ['required', 'string']
        ]);
        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {
            $validated_data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string']
            ]);
            $vaccineType =  VaccineType::create($validated_data);
            return response()->json([
                'status' => 200,
                'messages' => 'Create vaccine types successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $vaccineTypes = $this->vaccineTypes->findOrFail($id);
        if ($vaccineTypes) {
            return response()->json([
                'status' => 200,
                'vaccineTypes' => $vaccineTypes
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {

            $vaccineTypes = $this->vaccineTypes->findOrFail($id);
            if ($vaccineTypes) {
                $validated_data = $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'description' => ['required', 'string'],
                ]);
                $vaccineTypes->update($validated_data);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Update vaccine types successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'errors' => 'Not Found'
                ]);
            }
        }
    }

    public function delete($id)
    {
        $vaccineTypes = $this->vaccineTypes->findOrFail($id);
        if ($vaccineTypes) {
            $vaccineTypes->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Delete vaccine type successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }
}
