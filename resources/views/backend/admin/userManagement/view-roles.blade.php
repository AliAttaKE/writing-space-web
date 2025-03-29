@extends('custom_layout.master')
@section('main_content')

<div class="d-flex flex-column flex-column-fluid">
    @include("backend.layout.partials._view-roles", [
        'roles' => $roles,
        'role_id' => $role_id,
        // 'permissionNames' => $permissionNames,
        'permission_groups' => $permission_groups,
        'permissions' => $permissions
    ])

</div>


@endsection