<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AssignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Permission $permissionModel, Role $roleModel, User $userModel)
    {
        $this->permissions = $permissionModel;
        $this->roles = $roleModel;
        $this->users = $userModel;
    }
    public function index()
    {
        $user = User::with('roles', 'permissions')->paginate('20');
        return view('admin.permissions.user-role', compact('user'));
    }
    public function rolePermission()
    {
        $role = $this->roles->with('permissions')->get();
        return view('admin.permissions.permission-of-role', compact('role'));
    }
    public function assignPermission($id)
    {
        $role = $this->roles->findOrFail($id);
        $permission = Permission::all();
        $get_permissions = $role->permissions;
        return view('admin.permissions.assign-permission', compact('permission', 'role', 'get_permissions'));
    }
    public function insertPermission(Request $request, $id)
    {
        $data = $request->all();
        $role = $this->roles->find($id);
        $role->syncPermissions($data['permission']);
        return redirect()->route('admin.permissions.role-permission')->with('status', 'Phân quyền hạn thành công');
    }
    public function assignRole($id)
    {
        $user = User::findOrFail($id);
        $role = Role::all();
        $all_column_roles = $user->roles->first();
        return view('admin.permissions.assign-role', compact('user', 'role', 'all_column_roles'));
    }
    public function insertRole(Request $request, $id)
    {
        $data = $request->all();
        $user = $this->users->findOrFail($id);
        $user->syncRoles($data['role']);
        return redirect()->route('admin.permissions.user-role')->with('status', 'Phân vai trò thành công');
    }
}
