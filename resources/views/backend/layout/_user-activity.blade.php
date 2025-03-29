@extends('custom_layout.master')
@section('main_content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        @include('backend.layout.partials._user-activity-log', ['users' => $users])
    </div>
@endsection
