<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\PriorityGroup;

class PriorityGroupController extends Controller
{
    public function __construct(PriorityGroup $priorityGroup)
    {
        $this->priorityGroups = $priorityGroup;
    }
    public function index()
    {
        return view('admin.priority-groups.index');
    }
    public function fetch()
    {
        $priority_groups =  $this->priorityGroups::select('id', 'name')->orderBy('id', 'asc')->get();
        return response()->json([
            'priority_groups' => $priority_groups
        ]);
    }
    public function search(Request $request)
    {
        $output = "";
        $priority_groups = $this->priorityGroups::select('id', 'name')
            ->where('name', 'LIKE', '%' . $request->search . '%')->get();

        foreach ($priority_groups as $key => $value) {
            $output .= '<tr>\
            <td>' . $key + 1 . '</td>
            <td class="col-md-8"><a>' . $value->name . '</a></td>
            <td class="project-actions text-right">
                <button type="button" data-toggle="tooltip" data-placement="top" title="Cập nhật" value="' . $value->id . '" class="edit_priority_group btn btn-primary btn-sm" href="#" data-toggle="modal"\
                    data-target="#updateModal">
                    <i class="fas fa-pencil-alt"></i></button>
                <button type="button" data-toggle="tooltip" data-placement="top" title="Xoá" value="' . $value->id . '" class="delete_priority_group btn btn-danger btn-sm" href="#" data-toggle="modal"\
                    data-target="#deleteModal">
                    <i class="fas fa-trash"></i></button>
            </td>\
        </tr>';
        }

        return response($output);
    }

    public function store(Request $request)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'unique:priority_groups,name']
        ]);
        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {
            $validated_data = $request->validate([
                'name' => ['required']
            ]);
            $this->priorityGroups::create($validated_data);
            return response()->json([
                'status' => 200,
                'messages' => 'Create priority group successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $priority_groups =  $this->priorityGroups->findOrFail($id);
        if ($priority_groups) {
            return response()->json([
                'status' => 200,
                'priority_groups' => $priority_groups
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
            'name' => ['required',]
        ]);

        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {

            $priority_groups =  $this->priorityGroups->findOrFail($id);
            if ($priority_groups) {
                $validated_data = $request->validate([
                    'name' => ['required',]
                ]);
                $priority_groups->update($validated_data);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Update priority group successfully'
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
        $priority_groups =  $this->priorityGroups->findOrFail($id);
        if ($priority_groups) {
            $priority_groups->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Delete priority group successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }
}
