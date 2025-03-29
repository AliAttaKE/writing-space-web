@extends('custom_layout.master')
@section('main_content')

<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1
                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-color text-white">
                    Package Cancelation</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <!--<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">-->
                    <!--begin::Item-->
                <!--    <li class="breadcrumb-item text-muted">-->
                <!--        <a class="text-muted text-hover-primary">File Management</a>-->
                <!--    </li>-->
                    <!--end::Item-->
                    <!--begin::Item-->
                <!--    <li class="breadcrumb-item">-->
                <!--        <span class="bullet bg-gray-500 w-5px h-2px"></span>-->
                <!--    </li>-->
                    <!--end::Item-->
                    <!--begin::Item-->
                <!--    <li class="breadcrumb-item text-muted">Files</li>-->
                    <!--end::Item-->
                <!--</ul>-->
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>

    @if(!empty(session('success')))
        <div>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if ($errors->has('file'))
    <div class="alert alert-danger" role="alert">
        {{ $errors->first('file') }}
    </div>
@endif

    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Card-->
            <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
                <!--begin::Card header-->
                <div class="card-header pt-10">
                    <div class="d-flex align-items-center">
                        <!--begin::Icon-->
                        <div class="symbol symbol-circle me-5">
                            <div
                                class="symbol-label bg-transparent text-primary border border-secondary border-dashed back-color">
                                <i class="ki-duotone ki-abstract-47 fs-2x text-primary text-color">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                        </div>
                        <!--end::Icon-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <h2 class="mb-1 text-color">Package Cancelation</h2>
                            <div class="text-muted fw-bold">
                                <a class="fs-color-yellow" href="#">Writing Space</a>
                                <span class="mx-3">|</span>
                                <a class="fs-color-yellow" href="">Package Cancelation</a>
                                {{-- <span class="mx-3">|</span>{{ $formattedSize }}
                                <span class="mx-3">|</span>{{ $filesCount }} --}}
                            </div>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pb-0">
                    <!--begin::Navs-->
                    <div class="d-flex overflow-auto h-55px">
                        <ul
                            class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-semibold flex-nowrap">
                            <!--begin::Nav item-->
                            {{-- <li class="nav-item">
                                <a class="nav-link text-active-primary me-6 active">Files</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item">
                                <a class="nav-link text-active-primary me-6">Settings</a>
                            </li> --}}
                            <!--end::Nav item-->
                        </ul>
                    </div>
                    <!--begin::Navs-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
            <!--begin::Card-->
            @if ($userSubscription->isNotEmpty())


                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-8">
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6 text-color">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <input type="text" id="searchInput" data-kt-filemanager-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15 btn-dark-primary"
                                    placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>

                    </div>
                    <div class="row px-8 justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 mb-2">
                            <!--begin::Add customer-->
                            {{-- <button type="button"
                                class="btn btn-flex btn-primary w-100 justify-content-center px-2 badge-custom-bg"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_uploadCustomer">
                                <i class="ki-duotone ki-folder-up fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Main Files for Customer</button> --}}
                            <!--end::Add customer-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5 mb-2">
                            <!--begin::Add customer-->
                            {{-- <button type="button"
                                class="btn btn-flex btn-primary w-100 justify-content-center px-2 badge-custom-bg"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_uploadWriter">
                                <i class="ki-duotone ki-folder-up fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Writer</button> --}}
                            <!--end::Add customer-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <!--begin::Add customer-->
                            {{-- <button type="button"
                                class="btn btn-flex btn-primary w-100 justify-content-center px-2 badge-custom-bg"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_uploadCustomer_2">
                                <i class="ki-duotone ki-folder-up fs-2 text-white">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>Upload Files for Customer</button> --}}
                        </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body overflow-auto">
                        <!--begin::Table header-->
                        <div class="row flex-stack">
                           
                            <!--end::Folder path-->
                            {{-- <div class="col-sm-2 d-flex justify-content-end">
                                <!--begin::Folder Stats-->
                                <div class="badge badge-lg badge-custom-bg">
                                    <span id="kt_file_manager_items_counter">{{ $filesCount }} items</span>
                                </div>
                            </div> <!--end::Folder Stats--> --}}
                        </div>
                        <!--end::Table header-->
                        <!--begin::Table-->
                       
    
                        <table id="kt_file_manager_list" data-kt-filemanager-table="files"
                            class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer">
                           <thead style="color: white;">
                               <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 416.797px;">Subscription Name</th>
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 416.797px;">User Name</th>
                                        <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 66.4062px;">Total pages</th>
                                    <th class="min-w-70px fw_800 pb-8 sorting">
                                        Remaining Pages
                                    </th>
                                    <!--<th class="min-w-10px sorting_disabled" rowspan="1" colspan="1"-->
                                    <!--    style="width: 66.4062px;">Size</th>-->
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1"
                                        style="width: 66.4062px;">Due Date</th>
                                 
                                    <th class="min-w-70px fw_800 pb-8 sorting" rowspan="1" colspan="1" style="width: 125px;">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">




                                @foreach ($userSubscription as $userSubscriptions)

                                    <tr class="odd">
                                          {{-- <td> <input class="form-check-input" type="checkbox" name="selectedProducts[]" value="{{ $userSubscriptions->id }}" style="background-size: unset !important;width: 20px; height: 20px;"></td> --}}
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span class="icon-wrapper"></span>
                                                <a href="#" class="text-white text-hover-primary">{{ $userSubscriptions->subscription_name }}</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                              
                                                <a href="#" class="text-white text-hover-primary">
                                                  
                                                    
                                                    {{ $userSubscriptions->user_name }}
                                                  
                                                </a>
                                            </div>
                                        </td>
                                        {{-- <td class="text-white">{{ $file->Writer }}</td> --}}
                                        <td class="text-white">{{ $userSubscriptions->total_pages }}</td>
                                        <td class="text-white">{{ $userSubscriptions->remaining_pages }}</td>
                                        
                                        <td class="text-white" data-order="2023-08-19T14:40:00+05:00">{{$userSubscriptions->due_date}}
                                        </td>
                                     
                                        <td class="text-end text-white" data-kt-filemanager-table="action_dropdown">
                                            <div class="d-flex justify-content-end">
                                              
                                             
                                              

                                                @if($userSubscriptions->status == 'InActive')
                                                <a class="btn btn-warning" onclick="changeStatus('{{ $userSubscriptions->id }}', '{{ $userSubscriptions->status }}')">InActive</a>
                                            @else
                                                <a class="btn badge-custom-bg" onclick="changeStatus('{{ $userSubscriptions->id }}', '{{ $userSubscriptions->status }}')">Active</a>
                                            @endif
                                            



                                                    {{-- <a  class="btn badge-custom-bg" >Active</a>
                                                    @else --}}
                                                                                      
                                                <!--end::More-->
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
   
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
            
            @endif              <!--end::Card-->
            <!--begin::Modals-->
            <!--begin::Modal - Upload File-->
            <div class="modal fade" id="kt_modal_uploadCustomer" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Form-->

                        <form method="post" action="{{ route('admin.file.upload') }}" enctype="multipart/form-data"
                            class="form" id="kt_modal_upload_form">
                            <!--begin::Modal header-->
                            @csrf
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold text-white">Upload files main files for customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-4">

                                            <label for="file-1"
                                                class="dropzone-select btn btn-sm swal2-confirm swal2-styled me-2">Attach
                                                Files</label>
                                            <input type="file" id="file-1" name="file" class="d-none"
                                                accept=".pdf, .docx, .doc, .txt, .xls, .xlsx"></input>
                                            <p id="attach_file_1"></p>

                                            {{-- <input type="hidden" value="Main File" name="Writer">
                                            <input type="hidden" value="{{ $folder->name }}" name="folder_name">
                                            <input type="hidden" value="{{ $folder->id }}" name="folder_id"> --}}

                                        </div>
                                        <!--end::Controls-->
                                    </div>
                                    <!--end::Dropzone-->
                                    <!--begin::Hint-->
                                    <span class="form-text fs-6 text-muted mb-2">DOCX, PDF, TXT, RTF,XLSX, CSV,PPTX,JPEG, PNG, GIF</span>
                                    <br>
                                    <span class="form-text fs-6 text-muted mb-2">Max file size is 500-MB per file.</span>
                                    <!--end::Hint-->
                                    <div class="d-flex justify-content-end">
                                        <input type="submit" class="btn btn-sm swal2-confirm swal2-styled"
                                            Value="Upload Files">
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Upload File-->
            <!--begin::Modal - Upload File-->
            <div class="modal fade" id="kt_modal_uploadWriter" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Form-->
                        <form method="post" action="{{ route('admin.file.upload') }}" enctype="multipart/form-data"
                            class="form" id="kt_modal_upload_form">
                            <!--begin::Modal header-->
                            @csrf
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold text-white">Upload files for writer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-4">
                                            <label for="file-2"
                                                class="dropzone-select btn btn-sm swal2-confirm swal2-styled me-2">Attach
                                                Files</label>
                                            <input type="file" name="file" id="file-2" class="d-none"
                                                accept=".pdf, .docx, .doc, .txt, .xls, .xlsx"></input>
                                            <p id="attach_file_2"></p>
{{-- 
                                            <input type="hidden" value="Writer" name="Writer">
                                            <input type="hidden" value="{{ $folder->name }}" name="folder_name">
                                            <input type="hidden" value="{{ $folder->id }}" name="folder_id"> --}}
                                        </div>
                                        <!--end::Controls-->
                                    </div>
                                    <!--end::Dropzone-->
                                    <!--begin::Hint-->
                                    <span class="form-text fs-6 text-muted mb-2">DOCX, PDF, TXT, RTF,XLSX, CSV,PPTX,JPEG, PNG, GIF</span>
                                    <br>
                                    <span class="form-text fs-6 text-muted mb-2">Max file size is 500-MB per file.</span>
                                    <!--end::Hint-->
                                    <div class="d-flex justify-content-end">

                                        <input type="submit" class="btn btn-sm swal2-confirm swal2-styled"
                                            Value="Upload Files">

                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Upload File-->
            <!--begin::Modal - Upload File-->
            <div class="modal fade" id="kt_modal_uploadCustomer_2" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content badge-custom-bg">
                        <!--begin::Form-->
                        <form method="post" action="{{ route('admin.file.upload') }}" enctype="multipart/form-data"
                            class="form" id="kt_modal_upload_form">
                            <!--begin::Modal header-->
                            @csrf

                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold text-white">Upload files for customer</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
                                        <!--begin::Controls-->
                                        <div class="dropzone-panel mb-4">
                                            <label for="file-3"
                                                class="dropzone-select btn btn-sm swal2-confirm swal2-styled me-2">Attach
                                                Files</label>
                                            <input type="file" id="file-3" name="file" class="d-none"
                                                accept=".pdf, .docx, .doc, .txt, .xls, .xlsx"></input>
                                            <p id="attach_file_3"></p>




{{-- 
                                            <input type="hidden" value="Customer" name="Writer">
                                            <input type="hidden" value="{{ $folder->name }}" name="folder_name">
                                            <input type="hidden" value="{{ $folder->id }}" name="folder_id"> --}}

                                        </div>
                                        <!--end::Controls-->
                                    </div>
                                    <!--end::Dropzone-->
                                    <!--begin::Hint-->
                                    <span class="form-text fs-6 text-muted mb-2">DOCX, PDF, TXT, RTF,XLSX, CSV,PPTX,JPEG, PNG, GIF</span>
                                    <br>
                                    <span class="form-text fs-6 text-muted mb-2">Max file size is 500-MB per file.</span>
                                    <!--end::Hint-->
                                    <div class="d-flex justify-content-end">

                                        <input type="submit" class="btn btn-sm swal2-confirm swal2-styled"
                                            Value="Upload Files">
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Upload File-->
            <div class="modal fade" id="reName" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Rename File</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Rename</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify your unique app name">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid" name="rename"
                                placeholder="Rename" value="Rename" />
                            <!--end::Input-->
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--begin::Modal - New Product-->
            <div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form class="form" action="#" id="kt_modal_move_to_folder_form">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bold">Move to folder</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1 text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body pt-10 pb-15 px-lg-17">
                                <!--begin::Input group-->
                                <div class="form-group fv-row">
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="0" id="kt_modal_move_to_folder_0" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_0">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>account
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="1" id="kt_modal_move_to_folder_1" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_1">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>apps
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="2" id="kt_modal_move_to_folder_2" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_2">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>widgets
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="3" id="kt_modal_move_to_folder_3" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_3">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>assets
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="4" id="kt_modal_move_to_folder_4" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_4">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>documentation
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="5" id="kt_modal_move_to_folder_5" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_5">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>layouts
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="6" id="kt_modal_move_to_folder_6" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_6">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>modals
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="7" id="kt_modal_move_to_folder_7" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_7">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>authentication
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="8" id="kt_modal_move_to_folder_8" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_8">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>dashboards
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Item-->
                                    <div class="d-flex">
                                        <!--begin::Checkbox-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="move_to_folder" type="radio"
                                                value="9" id="kt_modal_move_to_folder_9" />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_move_to_folder_9">
                                                <div class="fw-bold">
                                                    <i class="ki-duotone ki-folder fs-2 text-primary me-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>pages
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Action buttons-->
                                <div class="d-flex flex-center mt-12">
                                    <!--begin::Button-->
                                    <button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--begin::Action buttons-->
                            </div>
                            <!--end::Modal body-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Modal - Move file-->
            <!--end::Modals-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content wrapper-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "assets/";
</script>


<script>
    function changeStatus(fileId, currentStatus) {
      
      var csrfToken = $('meta[name="csrf-token"]').attr('content');

// alert(currentStatus);

      
        $.ajax({
            url: "{{ route('admin.package.cancelation.change.status') }}",
            method: 'POST',
            data: {
                fileId: fileId,
                currentStatus: currentStatus
            },
             headers: {
                'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
            },
            success: function(response) {
                // Handle success response (if needed)
                console.log('Status changed successfully');
                setTimeout(function () {
            location.reload();
        }, 2000);
               // location.reload(); // Reload the page after status change
            },
            error: function(xhr, status, error) {
                // Handle error response (if needed)
                console.error('Error changing status:', error);
            }
        });
    }
</script>


<script>

    $(document).on('click', '.downloadPdf', function () {
        setTimeout(function () {
            location.reload();
        }, 2000);
    });



    function confirmDelete(id, name) {

        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this data!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({

                    type: 'get', // Change to DELETE method
                    // url: '/admin/files/' + id + '/' + name + '/delete',
                    url: "{{ route('admin.files.delete', ['id' => ':id', 'folder_name' => ':name']) }}".replace(':id', id).replace(':name', name),
                    data: { id: id, name: name }, // Assuming id is a parameter you want to send
                    success: function (response) {
                        console.log(response);
                        Swal.fire('Deleted!', 'Your data has been deleted.', 'success');
                        location.reload(true);
                    },
                    error: function (error) {
                        console.error(error);
                    }
                });


            }
        });
    }
</script>
<script>
    // Select All checkbox functionality
    const selectAllCheckbox = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('input[name="selectedProducts[]"]');

    selectAllCheckbox.addEventListener('change', function() {
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAllCheckbox.checked;
        });
    });
</script>
<script>



    // Function to handle table search
    $(document).ready(function () {
        // Add an input event listener to the search input
        $("#searchInput").on("input", function () {
            // Get the value of the search input
            var searchValue = $(this).val().toLowerCase();

            // Filter the rows of the table based on the search input
            $("#kt_file_manager_list tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
            });
        });
    });

    document.getElementById("file-1").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_1").innerText = "Selected file: " + fileName;
    });
    document.getElementById("file-2").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_2").innerText = "Selected file: " + fileName;
    });
    document.getElementById("file-3").addEventListener("change", function () {
        var fileName = this.files[0].name;
        document.getElementById("attach_file_3").innerText = "Selected file: " + fileName;
    });

</script>


@endsection