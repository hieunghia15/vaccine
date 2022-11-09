<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function __construct(Role $roleModel)
    {
        $this->roles = $roleModel;
    }

    public function index()
    {
        return view('admin.permissions.role');
    }

    public function fetchRole()
    {
        $roles = $this->roles::select('id', 'name')->orderBy('id', 'asc')->get();
        return response()->json([
            'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:roles,name']
        ]);
        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {
            $validated_data = $request->validate([
                'name' => ['required', 'string', 'max:255']
            ]);
            $roles = Role::create($validated_data);
            return response()->json([
                'status' => 200,
                'messages' => 'Create role successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $roles = $this->roles->findOrFail($id);
        if ($roles) {
            return response()->json([
                'status' => 200,
                'roles' => $roles
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
            'name' => ['required', 'string', 'max:255']
        ]);

        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {

            $roles = $this->roles->findOrFail($id);
            if ($roles) {
                $validated_data = $request->validate([
                    'name' => ['required', 'string', 'max:255']
                ]);
                $roles->update($validated_data);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Update role successfully'
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
        $roles = $this->roles->findOrFail($id);
        if ($roles) {
            $roles->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Delete role successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }
}
