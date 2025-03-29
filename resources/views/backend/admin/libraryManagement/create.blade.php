@extends('custom_layout.master')
@section('main_content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


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
        
           @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div>
                <h2 class="fw-bold fs-color-white custom-fs-23">Library Access</h2>
            </div>

            <div class="card-body">
                 <!--begin::Form-->


                 <form action="{{ route('admin.library.store') }}" 
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                 <!--begin::Scroll-->
                 <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll"
                     data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
                     data-kt-scroll-dependencies="#kt_modal_add_user_header"
                     data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">

                     <div class="fv-row mb-7 row">

                         <!--begin::col-->
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Subject / Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!--begin::Input-->
                            <select name="subject_topic" class="form-select select22 form-select-solid fw-bold btn-dark-primary"
                                data-kt-select2="true" data-placeholder="" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                @foreach ($subjects as $sub)
                                    <option value="{{ $sub->title }}">{{ $sub->title }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                            <!--end::Input-->
                        </div>
                        <!--end::col-->

                         <!--begin::col-->
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Paper/Title</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="paper_title"
                                class="form-control form-control-solid mb-3 mb-lg-0 btn-dark-primary" placeholder="Paper/Title"
                                value="{{ old('paper_title') }}" />
                            <!--end::Input-->
                        </div>
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">AI/Report</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="ai_report"
                                class="form-control form-control-solid mb-3 mb-lg-0 btn-dark-primary" placeholder="Paper/Title"
                                value="{{ old('ai_report') }}" />
                            <!--end::Input-->
                        </div>
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Plagiarism</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="plagiarism"
                                class="form-control form-control-solid mb-3 mb-lg-0 btn-dark-primary" placeholder="Paper/Title"
                                value="{{ old('plagiarism') }}" />
                            <!--end::Input-->
                        </div>
                        <!--end::col-->

                         <!--begin::col-->
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Paper Type</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!--begin::Input-->
                            <select name="paper_type" class="form-select select22 form-select-solid fw-bold btn-dark-primary"
                                data-kt-select2="true" data-placeholder="" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                @foreach ($paperTypes as $type)
                                    <option value="{{ $type->title }}">{{ $type->title }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                            <!--end::Input-->
                        </div>
                        <!--end::col-->

                        <!--begin::col-->
                        <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Word Count</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!--begin::Input-->
                            <select name="word_count" class="form-select select22 form-select-solid fw-bold btn-dark-primary" data-kt-select2="true"
                                data-placeholder="" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                @foreach ($words as $word)
                                    <option value="{{ $word->words }}">{{ $word->words }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                            <!--end::Input-->
                        </div>
                        <!--end::col-->

                       

                        <!--begin::col-->
                        <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Citation Style</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select name="citation" class="form-select select22 form-select-solid fw-bold btn-dark-primary" data-kt-select2="true"
                                data-placeholder="" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                @foreach ($citations as $citation)
                                    <option value="{{ $citation->title }}">{{ $citation->title }}</option>
                                @endforeach
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::col-->

                        

                       

                         <!--begin::col-->
                         <div class="col-md-6 mb-5">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Status</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <!--begin::Input-->
                            <select name="status" class="form-select form-select-solid fw-bold btn-dark-primary" data-kt-select2="true"
                                data-placeholder="" data-allow-clear="true"
                                data-kt-user-table-filter="role" data-hide-search="true">
                                <option></option>
                                <option value="enable">Enables</option>
                                <option value="disable">Disable</option>
                            </select>
                            <!--end::Input-->
                            <!--end::Input-->
                        </div>
                        <!--end::col-->


                    
                     </div>

                     <div class="fv-row mb-7 row text-center">

                        <!--begin::col-->
                        <div class="col-md-2 col-sm-6 mb-4">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Summary</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!--begin::Label-->

                                <label class="btn btn-sm fw-bold badge-custom-bg" for="choose-file">Choose File</label>
                                <input type="file" name="paper_summary" id="choose-file" class="d-none file_1" accept="application/pdf">
                                <label for="" class="file-name_1 text-white"></label>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                            <!--end::Input-->
                        </div>
                        <!--end::col-->


                      <!--begin::col-->
                        <div class="col-md-2 col-sm-6 mb-4">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Outline In Bullets</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!--begin::Label-->

                                <label class="btn btn-sm fw-bold badge-custom-bg" for="choose-file_2">Choose File</label>
                                <input type="file" name="paper_outline" id="choose-file_2" class="d-none file_2" accept="application/pdf">
                                <label for="" class="file-name_2 text-white"></label>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--end::col-->
                        
                        <!--begin::col-->
                        <div class="col-md-2 col-sm-6 mb-4">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Turnitin AI Report</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!--begin::Label-->

                                <label class="btn btn-sm fw-bold badge-custom-bg" for="choose-file_3">Choose
                                    File</label>
                                <input type="file" name="turnitin_ai_report" id="choose-file_3" class="d-none file_3" accept="application/pdf">
                                <label for="" class="file-name_3 text-white"></label>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--end::col-->

                        <!--begin::col-->
                        <div class="col-md-2 col-sm-6 mb-4">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Turnitin Plagiarism Report</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!--begin::Label-->

                                <label class="btn btn-sm fw-bold badge-custom-bg" for="choose-file_4">Choose
                                    File</label>
                                <input type="file" name="turnitin_plg_report" id="choose-file_4" class="d-none file_4" accept="application/pdf">
                                <label for="" class="file-name_4 text-white"></label>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--end::col-->

                        <!--begin::col-->
                        <div class="col-md-2 col-sm-6 mb-4">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2 fs-color-white custom-fs-13">Paper</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!--begin::Label-->

                                <label class="btn btn-sm fw-bold badge-custom-bg" for="choose-file_5">Choose
                                    File</label>
                                <input type="file" name="paper" id="choose-file_5" class="d-none file_5" accept="application/pdf">
                                <label for="" class="file-name_5 text-white"></label>
                                <!--end::Input-->
                            </div>
                            <!--end::col-->
                        </div>
                        <!--end::col-->


                     </div>

                   
                   
                    
            
                     <div class="text-center pt-10">

                         <button type="submit" class="btn badge-custom-bg" data-kt-users-modal-action="submit">
                             <span class="indicator-label">Add</span>
                             <span class="indicator-progress">Please wait...
                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                         </button>
                         <a href="{{ route('admin.library.index') }}" class="btn btn-dark-primary me-3"
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
            $(".file_1").change(function () {
                var fileName = $(this).val().split('\\').pop(); 
                $(".file-name_1").text(fileName); 
            });
        });
        $(document).ready(function () {
            $(".file_2").change(function () {
                var fileName_2 = $(this).val().split('\\').pop(); 
                $(".file-name_2").text(fileName_2); 
            });
        });
        $(document).ready(function () {
            $(".file_3").change(function () {
                var fileName_3 = $(this).val().split('\\').pop(); 
                $(".file-name_3").text(fileName_3); 
            });
        });
        $(document).ready(function () {
            $(".file_4").change(function () {
                var fileName_4 = $(this).val().split('\\').pop(); 
                $(".file-name_4").text(fileName_4); 
            });
        });
        $(document).ready(function () {
            $(".file_5").change(function () {
                var fileName_5 = $(this).val().split('\\').pop(); 
                $(".file-name_5").text(fileName_5); 
            });
        });

        $(document).ready(function() {
    $('.select22').select2({
        
        allowClear: true,
        width: '100%'
       
    });
});

      
    </script>

@endsection
