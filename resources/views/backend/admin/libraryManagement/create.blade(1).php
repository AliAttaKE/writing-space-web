@extends('custom_layout.master')
@section('main_content')

<div class="row">
    <div class="col-lg-12">
        <div class="card p-5">


            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <div>
                <h2 class="fw-bold">Library Access</h2>
            </div>

            <div class="card-body">
                 <!--begin::Form-->


                 <form action="{{ route('admin.library.store') }}" method="POST"
                 enctype="multipart/form-data">
                 @csrf
                 <!--begin::Scroll-->
                 <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                     data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                     data-kt-scroll-dependencies="#kt_modal_add_user_header"
                     data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                     <div class="fv-row mb-7 row">
                         <!--begin::col-->
                         <div class="col-12">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Subject/Topic</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <input type="text" name="subject_topic"
                                 class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Subject/Topic"
                                 value="{{ old('subject_topic') }}" />
                             <!--end::Input-->
                         </div>
                         <!--end::col-->
                     </div>
                     <!--begin::Input group-->
                     <div class="fv-row mb-7 row">

                         <!--begin::col-->
                         <div class="col-md-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Paper Type</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <!--begin::Input-->
                             <select name="paper_type" class="form-select form-select-solid fw-bold"
                                 data-kt-select2="true" data-placeholder="Essay" data-allow-clear="true"
                                 data-kt-user-table-filter="role" data-hide-search="true">
                                 @foreach ($papers as $paper)
                                     <option value="{{ $paper->id }}">{{ $paper->paper_type }}</option>
                                 @endforeach
                                 <option value="MBA">MBA</option>
                                 <option value="ABC">ABC</option>
                                 <option value="DDE">DDE</option>
                                 <option value="DD4">DD4</option>

                             </select>
                             <!--end::Input-->
                             <!--end::Input-->
                         </div>
                         <!--end::col-->
                         <!--begin::col-->
                         <div class="col-md-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Word Count</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <!--begin::Input-->
                             <select name="word_count" class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                 data-placeholder="Select Word Count" data-allow-clear="true"
                                 data-kt-user-table-filter="role" data-hide-search="true">
                                 @foreach ($papers as $paper)
                                     <option value="{{ $paper->id }}">{{ $paper->word_count }}</option>
                                 @endforeach
                                 <option value="200">200</option>
                                 <option value="350">350</option>
                                 <option value="550">550</option>

                             </select>
                             <!--end::Input-->
                             <!--end::Input-->
                         </div>
                         <!--end::col-->
                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7 row">
                         <!--begin::col-->
                         <div class="col-md-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Paper/Title</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <input type="text" name="paper_title"
                                 class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Paper/Title"
                                 value="{{ old('paper_title') }}" />
                             <!--end::Input-->
                         </div>
                         <!--end::col-->
                         <!--begin::col-->
                         <div class="col-md-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Citation Style</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <select name="category_id" class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                 data-placeholder="Select Citation Style" data-allow-clear="true"
                                 data-kt-user-table-filter="role" data-hide-search="true">
                                 <option></option>
                                 @foreach ($categories as $category)
                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                 @endforeach

                                 <option value="1">Category 1</option>
                                 <option value="2">Category 2</option>
                                 <option value="3">Category 3</option>
                                 <option value="4">Category 4</option>

                             </select>
                             <!--end::Input-->
                         </div>
                         <!--end::col-->

                     </div>
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7 row">
                         <!--begin::col-->
                         <div class="col-md-3 col-sm-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Paper Summary</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <div>
                                 <!--begin::Label-->

                                 <label class="btn btn-sm fw-bold btn-primary" for="choose-file">Choose File</label>
                                 <input type="file" name="paper_summary" id="choose-file" class="d-none file_1">
                                 <label for="" class="file-name_1"></label>
                                 <!--end::Input-->
                             </div>
                             <!--end::col-->
                             <!--end::Input-->
                         </div>
                         <!--end::col-->
                         <!--begin::col-->
                         <div class="col-md-3 col-sm-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Paper Outline In Bullets</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <div>
                                 <!--begin::Label-->

                                 <label class="btn btn-sm fw-bold btn-primary" for="choose-file_2">Choose File</label>
                                 <input type="file" name="paper_outline" id="choose-file_2" class="d-none file_2">
                                 <label for="" class="file-name_2"></label>
                                 <!--end::Input-->
                             </div>
                             <!--end::col-->
                         </div>
                         <!--end::col-->
                         <!--begin::col-->
                         <div class="col-md-3 col-sm-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Paper Abstract</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <div>
                                 <!--begin::Label-->

                                 <label class="btn btn-sm fw-bold btn-primary" for="choose-file_3">Choose File</label>
                                 <input type="file" name="paper_abstract" id="choose-file_3" class="d-none file_3">
                                 <label for="" class="file-name_3"></label>
                                 <!--end::Input-->
                             </div>
                             <!--end::col-->
                         </div>
                         <!--end::col-->
                         <!--begin::col-->
                         <div class="col-md-3 col-sm-6">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">Turnitin Report</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <div>
                                 <!--begin::Label-->

                                 <label class="btn btn-sm fw-bold btn-primary" for="choose-file_4">Choose
                                     File</label>
                                 <input type="file" name="turnitin_report" id="choose-file_4" class="d-none file_4">
                                 <label for="" class="file-name_4"></label>
                                 <!--end::Input-->
                             </div>
                             <!--end::col-->
                         </div>
                         <!--end::col-->

                     </div>
                     <!--end::Input group-->
                    
                     <!--end::Input group-->
                     <!--begin::Input group-->
                     <div class="fv-row mb-7">
                         <!--begin::col-->
                         <div class="col-12">
                             <!--begin::Label-->
                             <label class="required fw-semibold fs-6 mb-2">status</label>
                             <!--end::Label-->
                             <!--begin::Input-->
                             <!--begin::Input-->
                             <select name="status" class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                 data-placeholder="Select Status" data-allow-clear="true"
                                 data-kt-user-table-filter="role" data-hide-search="true">
                                 <option value="enable">Enables</option>
                                 <option value="disable">Disable</option>
                             </select>
                             <!--end::Input-->
                             <!--end::Input-->
                         </div>
                         <!--end::col-->

                     </div>
                     <!--end::Input group-->
                     <!--begin::Actions-->
                     <div class="text-center pt-10">

                         <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                             <span class="indicator-label">Add</span>
                             <span class="indicator-progress">Please wait...
                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                         </button>
                         <a href="{{ route('admin.library.index') }}" class="btn btn-light me-3"
                             >Go Back</a>
                     </div>
                     <!--end::Actions-->
                 </div>
                 <!--end::Scroll-->

             </form>
             <!--end::Form-->
            </div>
        </div>
    </div>
</div>

 <script>
        $(document).ready(function () {
            // When a file is selected, update the label with the file name
            $(".file_1").change(function () {
                var fileName = $(this).val().split('\\').pop(); // Get the file name
                $(".file-name_1").text(fileName); // Set the file name in the label
            });
        });
        $(document).ready(function () {
            // When a file is selected, update the label with the file name
            $(".file_2").change(function () {
                var fileName_2 = $(this).val().split('\\').pop(); // Get the file name
                $(".file-name_2").text(fileName_2); // Set the file name in the label
            });
        });
        $(document).ready(function () {
            // When a file is selected, update the label with the file name
            $(".file_3").change(function () {
                var fileName_3 = $(this).val().split('\\').pop(); // Get the file name
                $(".file-name_3").text(fileName_3); // Set the file name in the label
            });
        });
        $(document).ready(function () {
            // When a file is selected, update the label with the file name
            $(".file_4").change(function () {
                var fileName_4 = $(this).val().split('\\').pop(); // Get the file name
                $(".file-name_4").text(fileName_4); // Set the file name in the label
            });
        });
    </script>

@endsection
