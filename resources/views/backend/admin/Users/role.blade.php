@extends('custom_layout.master')
@section('main_content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <div class="py-12 w-full">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class=" overflow-hidden shadow-sm sm:rounded-lg p-2">
                            <div class="flex p-2">
                                <a href="{{ route('admin.show.all.users') }}"
                                    class="py-2 bg-green-700 hover:bg-green-500 text-slate-100 fs-color-white custom-fs-23 rounded-md">Users Index</a>
                            </div>
                            <div class="flex flex-col p-2 bg-slate-100">
                                <div class="fs-color-white custom-fs-13">User Name: {{ $user->name }}</div>
                                <div class="fs-color-white custom-fs-13">User Email: {{ $user->email }}</div>
                            </div>
                            <div class="mt-6 p-2 bg-slate-100">
                                <h2 class="text-2xl font-semibold fs-color-white custom-fs-17">Roles</h2>
                                <div class="flex space-x-2 mt-4 p-2">
                                    @if ($user->roles)
                                        @foreach ($user->roles as $user_role)
                                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="GET"
                                                action="{{ route('admin.users.roles.remove', ['user_id' => $user->id, 'role_id' => $user_role->id]) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                               
                                                <button type="submit">{{ $user_role->name }}</button>
                                            </form>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="max-w-xl mt-6">
                                    <form method="POST" action="{{ route('admin.users.roles', $user->id) }}">
                                        @csrf
                                        <div class="sm:col-span-6">
                                            <label for="role" class="block text-sm font-medium fs-color-white custom-fs-13">Roles</label>
                                            <select id="role" name="role" autocomplete="role-name"
                                                class="mt-1 block w-full py-2 px-3 btn-dark-primary form-control rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm w-50 custom-style">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('role')
                                            <span class="fs-color-white custom-fs-13 text-sm">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <button type="submit"
                                        class="px-4 py-2 btn badge-custom-bg hover:bg-green-700 rounded-md">Assign</button>
                                </div>
                                </form>
                            </div>
                            <div class="mt-6 p-2 bg-slate-100">
                                <h2 class="text-2xl font-semibold fs-color-white custom-fs-17">Permissions</h2>
                                <div class="flex space-x-2 mt-4 p-2">
                                    @if ($user->permissions)
                                        @foreach ($user->permissions as $user_permission)
                                            <form class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" method="GET"
                                                action="{{ route('admin.users.permissions.revoke', ['user_id' => $user->id, 'permission_id' => $user_permission->id]) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                <button type="submit">{{ $user_permission->name }}</button>
                                            </form>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="max-w-xl mt-6">
                                    <form method="POST" action="{{ route('admin.users.permissions', $user->id) }}">
                                        @csrf
                                        <div class="sm:col-span-6">
                                            <label for="permission"
                                                class="block text-sm font-medium fs-color-white custom-fs-13">Permission</label>
                                            <select id="permission" name="permission" autocomplete="permission-name"
                                                class="mt-1 block w-full py-2 px-3 btn-dark-primary form-control rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm w-50 custom-style">
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('name')
                                            <span class="fs-color-white custom-fs-13 text-sm">{{ $message }}</span>
                                        @enderror
                                </div>
                                <div class="sm:col-span-6 pt-5">
                                    <button type="submit"
                                        class="px-4 py-2 btn badge-custom-bg hover:bg-green-700 rounded-md">Assign</button>
                                </div>
                                </form>
            
                            </div>
                        </div>
            
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection