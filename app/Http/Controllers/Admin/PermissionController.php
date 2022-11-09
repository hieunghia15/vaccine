<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function __construct(Permission $permissionModel)
    {
        $this->permissions = $permissionModel;
    }

    public function index()
    {
        return view('admin.permissions.permission');
    }

    public function fetchPermission()
    {
        $permissions = $this->permissions::select('id', 'name')->orderBy('id', 'asc')->get();
        return response()->json([
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:permissions,name']
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
            $permissions = Permission::create($validated_data);
            return response()->json([
                'status' => 200,
                'messages' => 'Create permission successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $permissions = $this->permissions->findOrFail($id);
        if ($permissions) {
            return response()->json([
                'status' => 200,
                'permissions' => $permissions
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

            $permissions = $this->permissions->findOrFail($id);
            if ($permissions) {
                $validated_data = $request->validate([
                    'name' => ['required', 'string', 'max:255']
                ]);
                $permissions->update($validated_data);
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
        $permissions = $this->permissions->findOrFail($id);
        if ($permissions) {
            $permissions->delete();
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
