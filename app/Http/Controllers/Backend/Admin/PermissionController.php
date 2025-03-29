<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::latest()->paginate(5);
        return view('backend.admin.RolePermission.permission', compact('permissions'));
    }


    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        if($permission)
        {
            return response()->json(['success' => 'Permission created successfully!', 'permission' => $permission]);
        }else{
            return response()->json(['error' => 'Permission not found!'], 500);
        }
       
    }



    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'name' => strtolower($request->name),
            'group_name' => $request->group_name,
        ];
    
        $saved = Permission::create($data);
    
        if ($saved) {
            return response()->json(['success' => 'Permission created successfully!']);
        }else{

            return response()->json(['error' => 'Something went wrong!'], 500);
        }
        
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $permission = Permission::find($request->id);
        if($permission){
            $permission->update([
                'name' => strtolower($request->name),
                'group_name' => $request->group_name,
            ]);

            return response()->json(['success' => 'Permission updated successfully!', 'permission' => $permission]);
        }

        return response()->json(['error' => 'Something went wrong!'], 500);
    }

    public function destroy($id)
    {
        // dd($id);
        Permission::findOrFail($id)->delete();
        return response()->json(['success' => 'Permission updated successfully!']);
    }
}
