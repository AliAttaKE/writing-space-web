@extends('custom_layout.customer')
@section('main_content')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

<!-- Include Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <div class="d-flex flex-column flex-column-fluid">

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



        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 custom-fs-23 fs-color-white">
                        Library Access</h1>
                    <!--end::Title-->

                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->

                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                    @include('backend.customer.libraryManagement._filter')
                <!--end::Card-->
                <div>
                    @if($libraries->isNotEmpty())
                    @foreach ($libraries as $library)

                        <div class="py-6 px-6 mb-5 card card-custom-bg">
                            <h1 class="text-gray-900 fw-bold mb-4  fs-color-white">
                               Title : {{ $library->paper_title }}
                            </h1>
                            <p class="text-gray-900 fw-bold fs-6 mb-4 custom-fs-13 fs-color-white">Subject : {{ $library->subject_topic }}</p>
                            <p class="text-gray-900 fw-bold fs-6 mb-4 custom-fs-13 fs-color-white">
                               Paper Type : {{ $library->paper_type }}
                            </p>
                            <p class="mb-4 custom-fs-13 fs-color-white">Words Count : {{ $library->word_count }} </p>
                            <p class="mb-4 custom-fs-13 fs-color-white">Citation Style : {{ $library->citation }} </p>
                            <div class="row library-buttons">
                                @php
                                   $fileDetails = [
                                        ['id' => removeDotHtml($library->paper_summary), 'name' => 'Summary', 'filename' => $library->paper_summary],
                                        ['id' => removeDotHtml($library->paper_outline), 'name' => 'Outline in Bullets', 'filename' => $library->paper_outline],
                                        ['id' => removeDotHtml($library->turnitin_ai_report), 'name' => 'Turnitin AI Report', 'filename' => $library->turnitin_ai_report, 'per' => "({$library->ai_report}%)"],
                                        ['id' => removeDotHtml($library->turnitin_plg_report), 'name' => 'Turnitin Plagiarism Report', 'filename' => $library->turnitin_plg_report, 'per' => "({$library->plagiarism}%)"],
                                        ['id' => removeDotHtml($library->paper), 'name' => 'Paper', 'filename' => $library->paper],
                                    ];

                                @endphp
                                @foreach ($fileDetails as $file)
                                    <a href="{{ asset('uploads/html_files/' . $file['filename']) }}" class="btn btn-sm fw-bold badge-custom-bg col mb-2 me-3" target="_blank">
                                        {{ ucfirst(str_replace('_', ' ', $file['name'])) }} {{ $file['per'] ?? '' }}
                                    </a>
                                @endforeach
                                <a href="{{ route('customer.download.library.files', ['id' => $library->id]) }}" class="btn btn-sm fw-bold btn-success col mb-2 me-3">Download</a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1 class="text-muted text-center text-white">No Papers available...</h1>
                @endif





                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
    </div>
    <!--end::App-->
@endsection

@push('customerJs')
    <script>
        $(document).on('click', '.downloadFiles', function (e){
            e.preventDefault();
            var id = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "{{route('customer.download.library.files', ['id' => ':id'])}}".replace(':id', id),
                success: function (response) {
                    console.log(response);
                },error: function (error) {
                    console.error(error);
                },
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.subject, .paperTermOption, .wordCountOption, .paperFormatOption').change(function() {
                applyFilter();
            });

            // apply filtration;
            function applyFilter() {

                var subject = $('.subject').val();
                var termPaper = $('.paperTermOption').val();
                var wordCount = $('.wordCountOption').val();
                var formatOption = $('.paperFormatOption').val();
                var url = '{{ url()->current() }}?';

                if (subject) {
                    url += 'subject=' + subject;

                }
                if (termPaper) {
                    url += '&termOption=' + termPaper;

                }
                if (wordCount) {
                    url += '&wordCount=' + wordCount;

                }
                if (formatOption) {
                    url += '&citation=' + formatOption;

                }

                window.location.href = url;
            }
        });

        $(document).ready(function() {
        $('.select22').select2({

        allowClear: true,
        width: '100%'

    });
    });
    </script>

@endpush
