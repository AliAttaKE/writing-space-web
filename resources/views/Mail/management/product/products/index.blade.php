@extends('management.layouts.master')
@section('title')
    Products
@endsection
@section('content')


    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item">
                                <h4 class="page-title"> Products</h4>
                            </li>

                        </ul>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <button type="button" class="btn btn-primary float-right mt-3"> Back
                        </button>
                    </div>

                </div>
                @include('management.layouts.error')

                <div class="card">
                    <div class="header">
                        <!-- #START# Modal Form Example -->

                        <a href="{{url('product_add')}}" type="button" class="btn btn-primary"> Add Products
                        </a>






                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th class="col-lg-1">#</th>
                                <th class="col-lg-3">Name</th>
                                <th class="col-lg-3">Slug</th>
                                <th class="col-lg-3">Product type</th>

                                <th class="col-lg-3">Actions</th>
                            </tr>
                            </thead>
                            {{--                                <tbody>--}}
                            {{--                                <?php--}}
                            {{--                                $count=1--}}
                            {{--                                ?>--}}
                            {{--                                @foreach($category as $categories)--}}
                            {{--                                    <tr>--}}

                            {{--                                        <th scope="row">{{$count++}}</th>--}}
                            {{--                                        <td>{{$categories->name}}</td>--}}
                            {{--                                        <td> {{$categories->slug}}--}}
                            {{--                                        </td>--}}

                            {{--                                        @if($categories->status == '1')--}}

                            {{--                                            <td><label class="badge badge-info" data-toggle="modal" data-target="#active_inactive">Enable</label>--}}

                            {{--                                            </td>--}}

                            {{--                                        @else--}}
                            {{--                                            <td><label class="badge badge-danger" data-toggle="modal" data-target="#active_inactive">Disable</label>--}}

                            {{--                                            </td>--}}

                            {{--                                        @endif--}}

                            {{--                                        <td>--}}
                            {{--                                            <button type="button" class="btn bg-blue btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModal2{{$categories->id}}">--}}
                            {{--                                                <i class="material-icons" href="#">edit</i>--}}
                            {{--                                            </button>--}}


                            {{--                                            --}}{{--                                                                            @include('management/panelty/edit')--}}








                            {{--                                            <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" data-toggle="modal" data-target="#exampleModalCenter{{$categories->id}}">--}}
                            {{--                                                <i class="material-icons"> delete  </i>--}}
                            {{--                                            </button>--}}

                            {{--                                            @if ($categories->status == '0')--}}


                            {{--                                                <div class="modal fade" id="exampleModalCenter{{$categories->id}}" tabindex="-1" role="dialog"--}}
                            {{--                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                            {{--                                                    <div class="modal-dialog modal-dialog-centered" role="document">--}}
                            {{--                                                        <div class="modal-content">--}}
                            {{--                                                            <div class="modal-header">--}}
                            {{--                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Delete--}}
                            {{--                                                                </h5>--}}
                            {{--                                                                <button type="button" class="close" data-dismiss="modal"--}}
                            {{--                                                                        aria-label="Close">--}}
                            {{--                                                                    <span aria-hidden="true">&times;</span>--}}
                            {{--                                                                </button>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="modal-body">--}}
                            {{--                                                                Are you sure want to proceed this action?--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="modal-footer">--}}

                            {{--                                                                <button type="submit" class="btn btn-danger waves-effect"--}}
                            {{--                                                                        data-dismiss="modal">Close</button>--}}
                            {{--                                                                --}}{{--                                                                                                <form action="{{route('panelty.destroy',$categories->id)}}" method="post">--}}
                            {{--                                                                --}}{{--                                                                                                    @csrf--}}
                            {{--                                                                --}}{{--                                                                                                    @method('DELETE')--}}

                            {{--                                                                --}}{{--                                                                                                    <button type="submit" class="btn btn-info waves-effect">Delete</button>--}}

                            {{--                                                                --}}{{--                                                                                                </form>--}}

                            {{--                                                            </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                            @else--}}
                            {{--                                                <div class="modal fade" id="exampleModalCenter{{$categories->id}}" tabindex="-1" role="dialog"--}}
                            {{--                                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                            {{--                                                    <div class="modal-dialog modal-dialog-centered" role="document">--}}
                            {{--                                                        <div class="modal-content bg-danger">--}}
                            {{--                                                            <div class="modal-header">--}}
                            {{--                                                                <h5 class="modal-title text-white " id="exampleModalCenterTitle" >Alert--}}
                            {{--                                                                    <i class="fas fa-exclamation-triangle"></i></h5>--}}
                            {{--                                                                <button type="button" class="close" data-dismiss="modal"--}}
                            {{--                                                                        aria-label="Close">--}}
                            {{--                                                                    <span aria-hidden="true" class="text-white">&times;</span>--}}
                            {{--                                                                </button>--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="modal-body text-white">--}}
                            {{--                                                                Only Disabled Penalty will be deleted--}}
                            {{--                                                            </div>--}}
                            {{--                                                            <div class="modal-footer">--}}

                            {{--                                                                <button type="submit" class="btn btn-danger waves-effect"--}}
                            {{--                                                                        data-dismiss="modal">Close</button>--}}


                            {{--                                                            </div>--}}
                            {{--                                                        </div>--}}
                            {{--                                                    </div>--}}
                            {{--                                                </div>--}}
                            {{--                                            @endif--}}

                            {{--                                        </td>--}}

                            {{--                                        @endforeach--}}

                            {{--                                    </tr>--}}

                            {{--                                    <?php--}}
                            {{--                                    $count++;--}}
                            {{--                                    ?>--}}


                            {{--                                </tbody>--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>






    @include('management.product.category.add')

@endsection

