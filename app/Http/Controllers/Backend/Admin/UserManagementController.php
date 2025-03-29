<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\User;
use App\Models\LoginSession;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserManagementController extends Controller
{
   
    public function showAllUsers()
    {
        //$users = User::latest()->paginate(5);
        
        $users = User::latest()->get();
        return view('backend.admin.Users.index', compact('users'));

    }//end here

    public function showUser($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $permissions = Permission::all();

        return view('backend.admin.Users.role', compact('user', 'roles', 'permissions'));
    }//end here

    public function assignRole(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }//end here

    public function removeRole($user_id, $role_id)
    {

        $user = User::findOrFail($user_id);
        $role = Role::findOrFail($role_id);
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }//end here

    public function givePermission(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission($user_id, $permission_id)
    {
        $user = User::findOrFail($user_id);
        $permission = Permission::findOrFail($permission_id);

        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists.');
    }

    
    public function updateRolePermission(Request $request)
    {
        // dd($request->all());
        $role = Role::findOrFail($request->role_id);
        $permissions = $request->input('permission', []);
        $validPermissions = Permission::whereIn('id', $permissions)->pluck('id')->toArray();

        if (!empty($validPermissions)) {
            $role->syncPermissions($validPermissions);
            return redirect()->route('admin.view.role', ['role_id' => $role->id])->with('success', 'Role Permissions Updated Successfully');
        } else {
            return redirect()->route('admin.view.role', ['role_id' => $role->id])->with('error', "No valid permissions selected");
        }
    }//end method;



    public function viewRole($role_id)
    {
               
        $roles = Role::findOrFail($role_id);
         $users = User::latest()->get();
        // dd($roles);
        $permission_groups = User::getpermissionGroups();
        $permissions = $roles->permissions;
        return view('backend.admin.userManagement.view-roles', compact('roles','role_id','permission_groups','permissions','users'));
    }

    public function showAllRoles()
    {
        
        $roles = Role::latest()->get();
        $permission_groups = User::getpermissionGroups();
        $permissions = Permission::latest()->get();
        return view('backend.admin.RolePermission.roles', compact('roles','permissions','permission_groups'));
    }


   public function userActivityLog()
    {
        $users = User::latest()
            ->join('login_sessions', 'users.id', '=', 'login_sessions.user_id')
            ->select('users.name', 'users.email', 'users.avatar', 'login_sessions.*')
            ->paginate(10);

        // dd($users);
        return view('backend.admin.userManagement.index', compact('users'));
        // return view('backend.user-activity-log', compact('users'));

    }


   


    public function destroyUser($id)
    {
        // Find the user
        $user = User::findOrFail($id);
        // Delete associated login sessions
        $user->loginSessions()->delete();
        // Delete the user
        $user->delete();

        return back()->with('success', 'User deleted.');
    }

}
