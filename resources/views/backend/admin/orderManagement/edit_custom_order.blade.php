@extends('custom_layout.master')
@section('main_content')
<style>
    .switch-container {
        display: flex;
        align-items: center;
    }
    .custom-popup-class {
        width: 70%;
        height: 100%;
    }
    .custom-popup-class1 {
        width: 30%;
        height: 70%;
    }
    .switch {
        position: relative;
        display: inline-block;
        width: 48px;
        height: 20px;
    }

    .switch input {
        display: none;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 14px;
        width: 14px;
        left: 4px;
        bottom: 3px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    #kt_app_content_container #my_coupon {
        display: contents !important;
    }

    #status {
        margin-left: 10px;
    }

    .mod-2 li {
        padding: 10px 0;
        text-align: center;
        border: 1px solid;
    }

    .cus-border {
        border: 1px solid #cdc5c5 !important;
    }

    .bg-cus {
        background-color: #FCFCFC;
    }

    .custom-height {
        height: 100px !important;
    }

    .ql-toolbar.ql-snow {
        border: 1px solid #783AFB !important;
        background: #1515158a !important;
        color: #fff !important;
    }

    .ql-editor {
        color: white;
    }

    .ql-toolbar.ql-snow {
        width: 546px;
    }

    div#description {
        width: 546px;
        height: 213px !important;
    }

    .amount-input {
        background: transparent;
        border: 1px solid #783AFB;
        color: white;
        padding: 5px;
        border-radius: 5px;
        width: 80px;
        text-align: center;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.snow.css" rel="stylesheet" />

<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <div class="d-flex flex-column flex-column-fluid">
                    <!-- Toolbar -->
                    {{-- <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                            <h1 class="page-heading d-flex text-white fw-bold fs-1 flex-column justify-content-center my-0">
                                Edit Order #{{ $order->order_id }}
                            </h1>
                        </div>
                    </div> --}}
                    
                    <!-- Content -->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <form action="{{ route('admin.orders.update', $order->id) }}" method="POST" class="kt_invoice_form">
                                @csrf
                                @method('PUT')
                                
                                <div class="px-20">
                                    <div class="row">
                                        <div class="col-md-8 mb-10">
                                            <div id="kt_app_content_container" class="mb-10">
                                                <h1 class="page-heading d-flex text-white fw-bold fs-1 flex-column justify-content-center my-0 text-decoration-underline">
                                                    Edit Your Order
                                                </h1>
                                            </div>

                                            <!-- Hidden fields for prices -->
                                            <input type="hidden" id="cost_per_page" name="cost_per_page" value="{{ $order->cost_per_page }}">
                                            <input type="hidden" id="sub_total" name="sub_total" value="{{ $order->cost }}">
                                            <input type="hidden" id="total_cost" name="total_cost" value="{{ $order->total_cost }}">

                                            <div id="kt_app_content_container" class="mb-10">
                                                <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom fs-color-white">
                                                    When would you like to receive this order?
                                                </h3>
                                            </div>

                                            <div class="row col-md-8 mb-20">
                                                <div class="col-md-6">
                                                    <label for="due_date" class="mb-3 fs-6 fw-semibold text-white">Select Specific Date</label>
                                                    <input type="date" id="due_date" name="due_date"
                                                        class="form-control btn-dark-primary specific_date"
                                                        value="{{ old('due_date', explode(' ', $order->deadline)[0]) }}"
                                                         />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="due_time" class="mb-3 fs-6 fw-semibold text-white">Select Specific Time</label>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <input type="time" id="due_time" name="due_time"
                                                                class="form-control btn-dark-primary"
                                                                value="{{ old('due_time', explode(' ', $order->deadline)[1] ?? '00:00') }}"  />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="kt_app_content_container" class="mb-10">
                                                <h3 class="page-heading d-flex text-white fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                                    Your Order Details
                                                </h3>
                                            </div>

                                            {{-- <div class="col-md-6 mb-10">
                                                <label for="email" class="mb-3 fs-6 fw-semibold text-white">Email Address:*</label>
                                                <input type="email" placeholder="Email Address" name="email" id="email"
                                                    value="{{ old('email', $order->email) }}" class="form-control btn-dark-primary"  />
                                            </div> --}}

                                            {{-- <div class="col-md-6 mb-10">
                                                <label for="backup_email" class="mb-3 fs-6 fw-semibold text-white">Backup Email Address (optional):</label>
                                                <input type="email" placeholder="Backup Email" name="backup_email" id="backup_email"
                                                    value="{{ old('backup_email', $order->backup_email) }}" class="form-control btn-dark-primary" />
                                            </div> --}}

                                            <div class="col-md-6 mb-10">
                                                <label for="no_of_pages" class="mb-3 fs-6 fw-semibold text-white">Number of Pages:</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="1" id="no-page" name="no_of_pages"
                                                        value="{{ old('no_of_pages', $order->number_of_pages) }}" class="form-control bg-transparent w-25 me-2 fs-white-color btn-dark-primary nopage" min="1"  />
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold btn-dark-primary"
                                                        data-bs-toggle="modal" data-bs-target="#modal-3">
                                                        <i class="bi bi-info-circle-fill mx-3"></i> 1 page = approximately 300 words
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="no_of_extra_sources" class="mb-3 fs-6 fw-semibold text-white">Number of sources:</label>
                                                <div class="d-flex">
                                                    <input type="number" id="no_of_extra_sources" placeholder="1" name="no_of_extra_sources"
                                                        value="{{ old('no_of_extra_sources', $order->no_of_extra_sources) }}" class="form-control bg-transparent w-25 me-2 btn-dark-primary" min="0" />
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold btn-dark-primary"
                                                        data-bs-toggle="modal" data-bs-target="#modal-4">
                                                        <i class="bi bi-info-circle-fill mx-3"></i> Details & Limitations
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="topic" class="mb-3 fs-6 fw-semibold text-white">Specific topic or title:*</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Specific topic or title" name="topic" id="topic"
                                                        value="{{ old('topic', $order->topic) }}" class="form-control btn-dark-primary"  />
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold bg-transparent"
                                                        data-bs-toggle="modal" data-bs-target="#modal-6">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="paper_format" class="mb-3 fs-6 fw-semibold text-white">Bibliography format & citation style:*</label>
                                                <div class="d-flex">
                                                    <select name="paper_format" id="paper_format" class="form-select form-select-solid btn-dark-primary select22" >
                                                        <option value="">Choose</option>
                                                        <option value="None" {{ $order->paper_format == 'None' ? 'selected' : '' }}>None</option>
                                                        <option value="Let the writer choose" {{ $order->paper_format == 'Let the writer choose' ? 'selected' : '' }}>Let the writer choose</option>
                                                        <option value="Does Not Matter" {{ $order->paper_format == 'Does Not Matter' ? 'selected' : '' }}>Does Not Matter</option>
                                                        @foreach($paper_format as $p)
                                                            <option value="{{ $p->title }}" {{ $order->paper_format == $p->title ? 'selected' : '' }}>{{ $p->title }}</option>
                                                        @endforeach
                                                        <option value="Other (Not Listed Above)" {{ $order->paper_format == 'Other (Not Listed Above)' ? 'selected' : '' }}>Other (Not Listed Above)</option>
                                                    </select>
                                                    <button type="button" style="background:transparent;" class="border-0 bg-cus fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-16">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="submitting" class="mb-3 fs-6 fw-semibold text-white">Are you submitting resources to the writer?:</label>
                                                <div class="d-flex">
                                                    <select name="submitting" id="submitting" class="form-control bg-transparent w-25 btn-dark-primary me-2" >
                                                        <option value="Yes" {{ $order->submitting == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                        <option value="No" {{ $order->submitting == 'No' ? 'selected' : '' }}>No</option>
                                                    </select>
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold btn-dark-primary"
                                                        data-bs-toggle="modal" data-bs-target="#modal-5">
                                                        <i class="bi bi-info-circle-fill mx-3"></i> Details & Limitations
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="term_of_paper" class="mb-3 fs-6 fw-semibold text-white">Type of document:*</label>
                                                <div class="d-flex">
                                                    <select name="term_of_paper" id="term_of_paper" class="form-select form-select-solid btn-dark-primary select22" >
                                                        <option value="">Choose</option>
                                                        @foreach($term as $s)
                                                            <option value="{{ $s->title }}" {{ $order->type_of_paper == $s->title ? 'selected' : '' }}>{{ $s->title }}</option>
                                                        @endforeach
                                                        <option value="Other (explain in description)" {{ $order->type_of_paper == 'Other (explain in description)' ? 'selected' : '' }}>Other (explain in description)</option>
                                                        <option value="Other (Not Listed Above)" {{ $order->type_of_paper == 'Other (Not Listed Above)' ? 'selected' : '' }}>Other (Not Listed Above)</option>
                                                    </select>
                                                    <button type="button" style="background:transparent;" class="border-0 bg-cus fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-17">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="subject" class="mb-3 fs-6 fw-semibold text-white">General subject or field:*</label>
                                                <div class="d-flex">
                                                    <select name="subject" id="subject" class="form-select form-select-solid btn-dark-primary select22" >
                                                        <option value="">Choose</option>
                                                        @foreach($subjects as $s)
                                                            <option value="{{ $s->title }}" {{ $order->subject == $s->title ? 'selected' : '' }}>{{ $s->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="button" style="background:transparent;" class="border-0 bg-cus fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-18">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="academic_level" class="mb-3 fs-6 fw-semibold text-white">Academic Level:*</label>
                                                <div class="d-flex">
                                                    <select name="academic_level" id="academic_level" class="form-select form-select-solid btn-dark-primary select22" >
                                                        <option value="">Choose</option>
                                                        @foreach($academic as $s)
                                                            <option value="{{ $s->title }}" {{ $order->academic_level == $s->title ? 'selected' : '' }}>{{ $s->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="button" style="background:transparent;" class="border-0 bg-cus fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-19">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-20">
                                                <label for="language_spelling" class="mb-3 fs-6 fw-semibold text-white">Language & spelling style:*</label>
                                                <div class="d-flex">
                                                    <select name="language_spelling" id="language_spelling" class="form-select form-select-solid btn-dark-primary select22" >
                                                        <option value="">Choose</option>
                                                        @foreach($Languages as $s)
                                                            <option value="{{ $s->title }}" {{ $order->language_spelling == $s->title ? 'selected' : '' }}>{{ $s->title }}</option>
                                                        @endforeach
                                                    </select>
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold bg-transparent"
                                                        data-bs-toggle="modal" data-bs-target="#modal-7">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <p class="fs-color-white custom-fs-13"><strong>PowerPoint Slides:*</strong></p>
                                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                    <span class=" fs-color-white custom-fs-17">PowerPoint Slides:</span>
                                                </label>
                                                <div class="d-flex">
                                                    <input type="number" class="form-control form-control-lg form-control-solid btn-dark-primary"
                                                        name="powerpoint_slide" placeholder="0" id="powerpoint_slide"
                                                        value="{{ old('powerpoint_slide', $order->powerpoint_slide) }}" min="0" />
                                                    <button type="button" style="background:transparent;" class="border-0 bg-cus fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-20">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label class="mb-3 fs-6 fw-semibold text-white">
                                                    Statistical Analysis:*
                                                    <button type="button" class="border-0 bg-cus fs-6 fw-semibold bg-transparent" data-bs-toggle="modal" data-bs-target="#modal-9">
                                                        <i class="bi bi-info-circle-fill mx-3"></i>
                                                    </button>
                                                </label>
                                                <div class="d-flex">
                                                    <input class="form-check-input" value="no" type="radio" name="statistical_analysis" id="flexRadioDefaultNo"
                                                        {{ !$order->statistical_analysis ? 'checked' : '' }}>
                                                    <label class="fs-6 fw-semibold mx-3 text-white" for="flexRadioDefaultNo">No</label>
                                                    <input class="form-check-input" value="yes" type="radio" name="statistical_analysis" id="flexRadioDefaultYes"
                                                        {{ $order->statistical_analysis ? 'checked' : '' }}>
                                                    <label class="fs-6 fw-semibold mx-3 text-white" for="flexRadioDefaultYes">Yes (+15%)</label>
                                                </div>
                                            </div>

                                            <div id="kt_app_content_container" class="d-flex mb-10">
                                                <h3 class="page-heading d-flex text-white fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                                    Description & Detailed Specifications
                                                </h3>
                                                <button type="button" class="border-0 bg-cus fs-6 fw-semibold bg-transparent"
                                                    data-bs-toggle="modal" data-bs-target="#modal-8">
                                                    <i class="bi bi-info-circle-fill mx-3"></i>
                                                </button>
                                            </div>

                                            {{-- <div class="col-md-6 mb-10">
                                                <label for="description" class="mb-3 fs-6 fw-semibold text-white">Your instructions, requirements, specifications, etc.*:</label>
                                                <textarea name="description" id="description" class="form-control form-control-solid btn-dark-primary" rows="5"
                                                    >{{ old('description', $order->description) }}</textarea>
                                            </div> --}}

                                            <!-- Amount Editing Section -->
                                            <div id="kt_app_content_container" class="d-flex mb-10">
                                                <h3 class="page-heading d-flex text-white fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                                    Amount Details (Editable)
                                                </h3>
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="cost_per_page_edit" class="mb-3 fs-6 fw-semibold text-white">Cost Per Page ($):</label>
                                                <input type="number" step="0.01" id="cost_per_page_edit" name="cost_per_page_edit"
                                                    value="{{ old('cost_per_page_edit', $order->cost_per_page) }}" class="form-control btn-dark-primary amount-input" />
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="sub_total_edit" class="mb-3 fs-6 fw-semibold text-white">Subtotal ($):</label>
                                                <input type="number" step="0.01" id="sub_total_edit" name="sub_total_edit"
                                                    value="{{ old('sub_total_edit', $order->cost) }}" class="form-control btn-dark-primary amount-input" />
                                            </div>

                                            <div class="col-md-6 mb-10">
                                                <label for="total_cost_edit" class="mb-3 fs-6 fw-semibold text-white">Total Cost ($):</label>
                                                <input type="number" step="0.01" id="total_cost_edit" name="total_cost_edit"
                                                    value="{{ old('total_cost_edit', $order->total_cost) }}" class="form-control btn-dark-primary amount-input" />
                                            </div>

                                            <div class="col-md-12 mt-10">
                                                <button type="submit" class="btn badge-custom-bg rounded-pill">Update Order</button>
                                                {{-- <a href="{{ route('customer.orders') }}" class="btn btn-secondary rounded-pill">Cancel</a> --}}
                                            </div>
                                        </div>

                                        <!-- Order Summary Section -->
                                        <div class="col-md-4 mb-10">
                                            <div class="card btn-dark-primary">
                                                <div class="p-5 border-bottom mb-5">
                                                    <h1 class="page-heading d-flex text-white fw-bold fs-1 flex-column my-0 mb-3">
                                                        Order Summary:
                                                    </h1>
                                                </div>
                                                
                                                <!-- Display order summary details -->
                                                <div class="p-5 border-bottom">
                                                    <div class="d-flex">
                                                        <div class="col-6 align-items-center d-flex">
                                                            <label class="mt-3 fs-6 fw-semibold">Document Length:</label>
                                                        </div>
                                                        <div class="col-6 d-flex align-items-center justify-content-end">
                                                            <label class="mt-3 fs-6 fw-semibold"><span id="no_of_pages_display">{{ $order->number_of_pages }}</span> Pages</label>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-flex">
                                                        <div class="col-6 align-items-center d-flex">
                                                            <label class="mt-3 fs-6 fw-semibold">Cost Per Page:</label>
                                                        </div>
                                                        <div class="col-6 d-flex align-items-center justify-content-end">
                                                            <label class="mt-3 fs-6 fw-semibold">$<span id="cost_per_page_display">{{ $order->cost_per_page }}</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="col-6 align-items-center d-flex">
                                                            <label class="my-3 fs-6 fw-semibold">Subtotal:</label>
                                                        </div>
                                                        <div class="col-6 d-flex align-items-center justify-content-end">
                                                            <label class="my-3 fs-6 fw-semibold">$<span id="sub_total_display">{{ $order->cost }}</span></label>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="col-6 align-items-center d-flex">
                                                            <label class="my-3 fs-6 fw-semibold">Total Cost:</label>
                                                        </div>
                                                        <div class="col-6 d-flex align-items-center justify-content-end">
                                                            <label class="my-3 fs-6 fw-semibold">$<span id="total_cost_display">{{ $order->total_cost }}</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include all your modals here -->
<!-- Modal-1 to Modal-20 -->

<script src="https://cdn.jsdelivr.net/npm/quill@2/dist/quill.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select22').select2({
            allowClear: true,
            width: '100%'
        });

        // Initialize Quill editor
        const quill = new Quill("#description", {
            theme: "snow",
            modules: {
                toolbar: [
                    ['bold', 'italic', 'underline'],
                    ['link', 'blockquote', 'code-block'],
                    [{ 'list': 'ordered'}, { 'list': 'bullet' }]
                ]
            }
        });

        // Set existing content to Quill editor
        quill.root.innerHTML = `{!! addslashes($order->description) !!}`;

        // Update form with Quill content before submit
        $('form').on('submit', function() {
            const description = quill.root.innerHTML;
            $('#description').val(description);
        });

        // Amount calculation and real-time updates
        function calculateAmounts() {
            const pages = parseInt($('#no-page').val()) || 0;
            const costPerPage = parseFloat($('#cost_per_page_edit').val()) || 0;
            const extraSources = parseInt($('#no_of_extra_sources').val()) || 0;
            const statisticalAnalysis = $('#flexRadioDefaultYes').is(':checked') ? 0.15 : 0;

            // Calculate base amount
            let baseAmount = (pages * costPerPage) + extraSources;
            
            // Add statistical analysis percentage
            let totalAmount = baseAmount + (baseAmount * statisticalAnalysis);

            // Update display fields
            $('#no_of_pages_display').text(pages);
            $('#cost_per_page_display').text(costPerPage.toFixed(2));
            $('#sub_total_display').text(baseAmount.toFixed(2));
            $('#total_cost_display').text(totalAmount.toFixed(2));

            // Update hidden fields for form submission
            $('#cost_per_page').val(costPerPage);
            $('#sub_total').val(baseAmount);
            $('#total_cost').val(totalAmount);
        }

        // Bind calculation to input changes
        $('#no-page, #cost_per_page_edit, #no_of_extra_sources, input[name="statistical_analysis"]').on('input change', calculateAmounts);

        // Initial calculation
        calculateAmounts();

        // Manual amount override functionality
        $('#sub_total_edit, #total_cost_edit').on('input', function() {
            const subTotal = parseFloat($('#sub_total_edit').val()) || 0;
            const totalCost = parseFloat($('#total_cost_edit').val()) || 0;
            
            $('#sub_total_display').text(subTotal.toFixed(2));
            $('#total_cost_display').text(totalCost.toFixed(2));
            
            $('#sub_total').val(subTotal);
            $('#total_cost').val(totalCost);
        });
    });
</script>

@endsection