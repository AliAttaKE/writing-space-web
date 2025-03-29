<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;



class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->paginate(5);
        return view('roles_permissions.roles.index', compact('roles'));
    }

    public function create()
    {

        return view('roles_permissions.roles.create');
    }

    public function store(Request $request)
    {   
        // dd($request->all());
        $role = Role::updateOrCreate([
            'id'   => $request->id,
        ],[
            'name'     => strtolower($request->name),
        ]);

       if($role)
       {
            $permissions = $request->input('permission', []);
            $validPermissions = Permission::whereIn('id', $permissions)->pluck('id')->toArray();

            if (!empty($validPermissions)) {
                $role->syncPermissions($validPermissions);
                
            }
            return response()->json(['success' => 'Role created successfully!']); 
       }else{
        return response()->json(['error' => 'Something went wrong!'], 500);

       }

    
       
    }
    

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('roles_permissions.roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        
        if($role){
            $role->update([
                'name' => strtolower($request->name),
            ]);
        }

        return view('roles_permissions.roles.edit', compact('role'))->with('success', 'Role updated successfully!');
    }

    public function destroy($role_id)
    {
        // dd($role_id);
        $role = Role::findOrFail($role_id);
        if($role)
        {
            $role->delete();
            return response()->json(['success' => 'Role deleted successfully!']);
        }else{
            return response()->json(['error' => 'Role not found!'], 500);

        }
    }


}
