
@extends('management/layouts/master')
@section('title')
    Work Flow
@endsection
@section('content')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Work Flow</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">Add Roles
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="create_questions">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="formModal">Add Roles</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                        </div>





                                        <div class="academic_level">

                                            <div class="modal-body">


                                                <label for="email_address1">Role Name</label>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="email_address1"
                                                               class="form-control" name="quiz_name"
                                                               placeholder="Type Role Name Here">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="modal-footer">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger waves-effect"
                                                        data-dismiss="modal">Close</button>
                                                <button type="submit"
                                                        class="btn btn-info waves-effect">Create Role</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="body table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="col-lg-2">ID</th>
                                <th class="col-lg-4">Role Name</th>
                                <th class="col-lg-3">Status</th>
                                <th class="col-lg-3">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Researcher</td>
                                <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label></td>




                                <td>


                                    <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal1">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="create_questions">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="formModal">Edit Roles</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="academic_level">
                                                    <div class="modal-body">
                                                        <form>
                                                            <label for="email_address1">Roles Name</label>
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email_address1" class="form-control" name="quiz_name" placeholder="Type Role Name">
                                                                </div>
                                                            </div>
                                                            <br>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter1">
                                        <i class="material-icons"> delete  </i>
                                    </button>



                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Delete
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to proceed with this action?
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="submit" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                


                            </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

