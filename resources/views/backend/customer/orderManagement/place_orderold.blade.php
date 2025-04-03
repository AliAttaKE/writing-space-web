@extends('custom_layout.customer')
@section('main_content')

<style>
    .switch-container {
        display: flex;
        align-items: center;
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

    #status {
        margin-left: 10px;
    }

    .mod-2 li {
        padding: 10px 0;
        text-align: center;
        border: 1px solid;
    }
</style>


<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

        <!--begin::Wrapper-->
        <div class="flex-column flex-row-fluid" id="kt_app_wrapper">

            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
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
                                    class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">
                                    Place New Orders</h1>
                                <!--end::Title-->

                            </div>
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-10">
                            <h1
                                class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 text-center">
                                Custom Example Essay Writing Service</h1>
                        </div>
                        <!--end::Content container-->
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-5">
                            <h3
                                class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-center">
                                Pricing Plans & Delivery Dates</h3>
                        </div>
                        <!--end::Content container-->
                        <div class="px-10 mb-20">
                            <div class="plans">
                                @if ($pricing)
                                @foreach ($pricing as $p)
                                <ul id="pricing_{{ $p->id }}" class="prising-plans selected-plan">
                                    <li>{{ $p->text }}</li>
                                    @if ($p->min == '15')
                                    <li>{{ $p->min }} {{ $p->duration_type }} or {{ $p->max }}
                                    </li>
                                    @else
                                    <li>{{ $p->min }}  {{ $p->max }} {{ $p->duration_type }}
                                    </li>
                                    @endif

                                    <li>{{ $p->cost }}</li>
                                    <li>${{ $p->cost_per_page }} per page</li>
                                    <li>{{ $p->page_limit }} page-limit</li>
                                    <li style="display: none;" id="click_{{ $p->id }}"><i class="fa-solid fa-check"
                                            style="color:#2196F3;"></i></li>
                                </ul>
                                @endforeach
                                @endif

                            </div>
                        </div>
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl mb-20">
                            <h3
                                class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 text-center">
                                New customer? Try out our service with a 10% discount (coupon code:<span
                                    id="my_coupon">10OFFNEW</span>)</h3>
                        </div>
                        <!--end::Content container-->
                        <div class="px-20">
                            <div class="row">
                                <div class="col-md-8 mb-10">
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class=" mb-10">
                                        <h1
                                            class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0 text-decoration-underline">
                                            Let’s Get Started On Your Order</h1>
                                    </div>
                                    <!--end::Content container-->
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class=" mb-10">
                                        <h3
                                            class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                            When would you like to receive this order?</h3>
                                    </div>
                                    <div class="">

                                        <form action="" class="kt_invoice_form">
                                            <div class="col-md-6 mb-10">
                                                <select name="pricing" id="pricing"
                                                    class="form-select form-select-solid" data-control="select2"
                                                    data-hide-search="true" data-placeholder="Select Pricing">
                                                    <option></option>
                                                    @if ($pricing)
                                                    @foreach ($pricing as $p)
                                                    @if ($p->min == '15')
                                                    <option value="{{ $p->id }}">
                                                        {{ $p->min }} {{ $p->duration_type }} or
                                                        {{ $p->max }} = ${{ $p->cost_per_page }} per
                                                        page</option>
                                                    @else
                                                    <option value="{{ $p->id }}">
                                                        {{ $p->min }}-{{ $p->max }}
                                                        {{ $p->duration_type }} = ${{ $p->cost_per_page }}
                                                        per page</option>
                                                    @endif
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="row col-md-8 mb-20">
                                                <div class="col-md-6">
                                                    <label for="" class="mb-3 fs-6 fw-semibold">Select Specific
                                                        Date</label>
                                                    <input type="date" id="meeting-date" class="form-control"
                                                        name="meeting-date"
                                                        value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                                        max="2024-12-12" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-3 fs-6 fw-semibold">Select Specific
                                                        Date</label>
                                                    <div class="d-flex">
                                                        <div class="me-3">
                                                            <input type="time" id="meeting-time" class="form-control"
                                                                name="meeting-time"
                                                                value="{{ \Carbon\Carbon::now()->format('H:i') }}"
                                                                min="{{ \Carbon\Carbon::now()->format('H:i') }}" />

                                                        </div>
                                                        <div class="me-3">
                                                            @php
                                                            $currentHour = \Carbon\Carbon::now()->format('H');
                                                            @endphp

                                                            <select name="ampm" id="ampm"
                                                                class="form-select form-select-solid"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="AM">
                                                                <option></option>
                                                                <option value="AM" {{ $currentHour < 12 ? 'selected'
                                                                    : '' }}>AM
                                                                </option>
                                                                <option value="PM" {{ $currentHour>= 12 ? 'selected' :
                                                                    '' }}>PM
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="align-items-center d-flex">
                                                            <label for="" class="mb-3 fs-6 fw-semibold">EST</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div id="kt_app_content_container" class=" mb-10">
                                                <h3
                                                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                                    Your Order Details</h3>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Email
                                                    Address:*</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Email Address" name="email"
                                                        id="email" autocomplete="off"
                                                        class="form-control bg-transparent" /><button type="button"
                                                        class="border-0 bg-white" data-bs-toggle="modal"
                                                        data-bs-target="#modal-1"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="d-flex">
                                                    <input type="hidden" placeholder="Email Address" name="user_id"
                                                        id="user_id" value="{{ Auth::user()->id }}" autocomplete="off"
                                                        class="form-control bg-transparent" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Backup Email
                                                    Address (optional):</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Email Address" name="backup-email"
                                                        id="backup-email" autocomplete="off"
                                                        class="form-control bg-transparent" /><button type="button"
                                                        class="border-0 bg-white" data-bs-toggle="modal"
                                                        data-bs-target="#modal-2"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Number of
                                                    Pages:</label>
                                                <div class="d-flex">
                                                    <input type="number" placeholder="1" id='no-page' name="no-page"
                                                        autocomplete="off"
                                                        class="form-control bg-transparent w-25" /><button type="button"
                                                        class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-3"><i
                                                            class="bi bi-info-circle-fill mx-3"></i> 1 page =
                                                        approximately 300 words</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Number of
                                                    sources:</label>
                                                <div class="d-flex">
                                                    <input type="number" id="no_of_extra_sources" placeholder="1"
                                                        name="no_of_extra_sources" autocomplete="off"
                                                        class="form-control bg-transparent w-25" /><button type="button"
                                                        class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-4"><i
                                                            class="bi bi-info-circle-fill mx-3"></i> Details &
                                                        Limitations</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Bibliography
                                                    format & citation style:*</label>
                                                <select name="paper_format" id="paper_format"
                                                    class="form-select form-select-solid " data-control="select2"
                                                    data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    @if ($paper_format)
                                                    @foreach ($paper_format as $p)
                                                    <option value="{{ $p->title }}">{{ $p->title }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Are you submitting
                                                    resources to the writer?:</label>
                                                <div class="d-flex">


                                                    <select name="submitting" id="submitting"
                                                        class="form-control bg-transparent w-25">
                                                        <option value="Yes">Yes
                                                        </option>
                                                        <option value="No">No
                                                        </option>
                                                    </select>


                                                    <button type="button" class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-5"><i
                                                            class="bi bi-info-circle-fill mx-3"></i> Details &
                                                        Limitations</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Type of
                                                    document:*</label>
                                                <select name="term_of_paper" id="term_of_paper"
                                                    class="form-select form-select-solid " data-control="select2"
                                                    data-hide-search="true" data-placeholder="Choose">
                                                    @if ($term)
                                                    @foreach ($term as $s)
                                                    <option value="{{ $s->title }}">{{ $s->title }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">General subject or
                                                    field:*</label>
                                                <select name="subject" id="subject"
                                                    class="form-select form-select-solid " data-control="select2"
                                                    data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    @if ($subjects)
                                                    @foreach ($subjects as $s)
                                                    <option value="{{ $s->title }}">{{ $s->title }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Specific topic or
                                                    title:*</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="Specific topic or title"
                                                        name="topic" id="topic" autocomplete="off"
                                                        class="form-control bg-transparent" /><button type="button"
                                                        class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-6"><i
                                                            class="bi bi-info-circle-fill mx-3"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Academic
                                                    Level:*</label>
                                                <select name="academic_level" id="academic_level"
                                                    class="form-select form-select-solid " data-control="select2"
                                                    data-hide-search="true" data-placeholder="Choose">
                                                    <option></option>
                                                    @if ($academic)
                                                    @foreach ($academic as $s)
                                                    <option value="{{ $s->title }}">{{ $s->title }}
                                                    </option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-20">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Language &
                                                    spelling style:*</label>
                                                <div class="d-flex">
                                                    <select name="language_spelling" id="language_spelling"
                                                        class="form-select form-select-solid " data-control="select2"
                                                        data-hide-search="true" data-placeholder="Choose">
                                                        <option></option>
                                                        <option value="1">American</option>
                                                        <option value="2">British</option>
                                                    </select>
                                                    <button type="button" class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-7"><i
                                                            class="bi bi-info-circle-fill mx-3"></i></button>
                                                </div>
                                            </div>
                                            <div id="kt_app_content_container" class="d-flex mb-10">
                                                <h3
                                                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0 border-bottom">
                                                    Description & Detailed Specifications</h3> <button type="button"
                                                    class="border-0 bg-white fs-6 fw-semibold" data-bs-toggle="modal"
                                                    data-bs-target="#modal-8"><i
                                                        class="bi bi-info-circle-fill mx-3"></i></button>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Your instructions,
                                                    requirements, specifications, etc.*:</label>
                                                <div class="d-flex">
                                                    <textarea name="description" id="description"
                                                        class="form-control form-control-solid" rows="3"
                                                        placeholder="Your Instructions !"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-10">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Statistical
                                                    Analysis:*<button type="button"
                                                        class="border-0 bg-white fs-6 fw-semibold"
                                                        data-bs-toggle="modal" data-bs-target="#modal-9"><i
                                                            class="bi bi-info-circle-fill mx-3"></i></button></label>
                                                <div class="d-flex">
                                                    <input class="form-check-input" value="no" type="radio"
                                                        name="flexRadioDefault" id="statistical_analysis" checked>
                                                    <label class="fs-6 fw-semibold mx-3" for="flexRadioDefault1">
                                                        No
                                                    </label>
                                                    <input class="form-check-input" value="yes" type="radio"
                                                        name="flexRadioDefault" id="statistical_analysis_yes">
                                                    <label class="fs-6 fw-semibold mx-3" for="flexRadioDefault2">
                                                        Yes (+15% to subtotal)

                                                    </label>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                    <input type="hidden" value="0" name="discount" id="discount">
                                    <input type="hidden" value="" name="discount_value" id="discount_value">
                                    <!--end::Content container-->
                                </div>
                                <div class="col-md-4 mb-10">
                                    <div class="card">
                                        <div class="p-5  border-bottom mb-5">
                                            <h1
                                                class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column my-0 mb-3">
                                                Order Summary:</h1>
                                        </div>
                                        <div class="p-5 d-flex border-bottom">
                                            <div class="col-6 align-items-center d-flex">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Currency:</label>
                                            </div>
                                            <div class="col-6 d-flex  align-items-center">
                                                <img src="{{asset('backend/assets/media/ws/america-flag.webp')}}"
                                                    class="mb-3 h-25px w-25px rounded-circle" alt=""><i
                                                    class="bi bi-currency-dollar mx-3 mb-3"></i>
                                                <p class="mb-3 fs-6 fw-semibold"> US Dollors</p>
                                            </div>
                                        </div>
                                        <div class="p-5 border-bottom">
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Document
                                                        Length:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold"><span
                                                            id="no_of_pages">0</span> Pages</label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Pricing
                                                        Plan:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">US $<span
                                                            id="cost_per_page">0</span> per page</label>
                                                </div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Research
                                                        Level:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold"
                                                        id="research_level_show"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="mt-3 fs-6 fw-semibold">Document
                                                        Type:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold"
                                                        id="document_type_show"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Delivery
                                                        Date:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold" id="day_date"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Extra
                                                        Sources:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold">$<span
                                                            id="extra_sources">0</span></label>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex">
                                                    <label for="" class="my-3 fs-6 fw-semibold">Statistical
                                                        Analysis:</label>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="my-3 fs-6 fw-semibold"><span
                                                            id="statistic_percentage">0</span>%</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 d-flex border-bottom">
                                            <div class="col-12 align-items-center d-flex">
                                                <label for="" class="my-3 fs-6 fw-semibold">Subtotal: US
                                                    $<span id='sub_total'>0</span></label>
                                            </div>
                                        </div>
                                        <div class="p-5 border-bottom">
                                            <div class="d-flex">
                                                <h3
                                                    class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column my-3">
                                                    Optional Add-Ons:</h3><button type="button"
                                                    class="border-0 bg-white"><i class="bi bi-info-circle-fill ms-3"
                                                        title="Additional Features that you may find useful"></i></button>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label"
                                                        id="cost_label1">Paper Summary:</label><button type="button"
                                                        class="border-0 bg-white" data-bs-toggle="modal"
                                                        data-bs-target="#modal-10"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span
                                                            id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="1">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label"
                                                        id="cost_label2">Paper Outline In Bullets:</label>
                                                    <button type="button" class="border-0 bg-white"
                                                        data-bs-toggle="modal" data-bs-target="#modal-11"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span
                                                            id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="2">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="mt-3 fs-6 fw-semibold cost_label"
                                                        id="cost_label3">Paper Abstract:</label>
                                                    <button type="button" class="border-0 bg-white"
                                                        data-bs-toggle="modal" data-bs-target="#modal-12"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span
                                                            id="cost_per_page">0</span></label>
                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="3">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex">
                                                <div class="col-6 align-items-center d-flex ok">
                                                    <label for="" class="my-3 fs-6 fw-semibold cost_label"
                                                        id="cost_label4">Turnitin Report:</label>
                                                    <button type="button" class="border-0 bg-white"
                                                        data-bs-toggle="modal" data-bs-target="#modal-14"><i
                                                            class="bi bi-info-circle-fill ms-3"></i></button>
                                                </div>
                                                <div class="col-6 d-flex  align-items-center justify-content-end">
                                                    <label for="" class="mt-3 fs-6 fw-semibold me-3">$<span
                                                            id="cost_per_page">0</span></label>

                                                    <div class="switch-container">
                                                        <label class="switch">
                                                            <input type="checkbox" id="toggleSwitch" data-target="4">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light p-5">
                                            <div class="">
                                                <label for="" class="mb-3 fs-6 fw-semibold">Coupon:</label>
                                                <div class="d-flex">
                                                    <input type="text" placeholder="" name="coupon" id="coupon"
                                                        autocomplete="off" class="form-control bg-white w-75" /><button
                                                        type="button" class="form-control w-25 rounded bg-white ms-2"
                                                        onclick="coupon()"><i
                                                            class="bi bi-arrow-right ms-1"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-5 text-center">
                                            <label for="" class="mb-3 fs-6 fw-semibold text-center">Total
                                                Price:</label>
                                            <h1
                                                class="page-heading text-center d-flex text-gray-900 fw-bold fs-1 flex-column my-0 mb-3">
                                                US $<span id="total_cost">0</span></h1>
                                        </div>
                                        <div class="d-flex justify-content-center mb-5">
                                            <button class="btn btn-primary rounded-pill" onclick="payment()">Continue
                                                to Payment</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Don't Block Our Emails Accidentally</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Email providers (such as Gmail, Yahoo, AOL, & Hotmail) use filters to block "junk mail" and "SPAM."
                    Unfortunately, these filters sometimes block legitimate emails. To avoid accidentally blocking any
                    of our emails, you should do one (or both) of the following in your online email account and in your
                    email application:</p>
                <ul>
                    <li>temporarily disable any "junk mail" or "SPAM" features until your order is complete;</li>
                    <li>add our email address <span style="color:#0066cc">writingspace@snrinfo.com</span> to your "safe
                        list," "white list," or equivalent.</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What is a "Backup Email Address"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your "backup email address" is a different, additional email address at which you'd like to receive all
                of our emails. Providing a backup email address is completely optional.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">How Many Words on Each "Page"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">We write all documents using 1-inch margins and 12-point, double-spaced, "Times New
                    Roman" or "Arial" font. These standard, academic guidelines result in approximately 300 word per
                    page.</p>
                <p class="mb-5">NOTE: "Bibliography," "Works Cited," or "References" pages are free, so do not
                    include them in your page-count.</p>
                <div class="d-flex justify-content-center mod-2">
                    <div class="col-3">
                        <ul class="list-unstyled">
                            <li><Strong>PAGES</Strong> <i class="bi bi-arrow-right ms-2"></i></li>
                            <li>1</li>
                            <li>5</li>
                            <li>10</li>
                            <li>15</li>
                            <li>20</li>
                            <li>35</li>
                            <li>50</li>
                            <li>75</li>
                            <li>100</li>
                            <li>150</li>
                            <li>200</li>
                            <li>300</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <ul class="list-unstyled">
                            <li><i class="bi bi-arrow-left me-2"></i><Strong>WORDS</Strong></li>
                            <li>300</li>
                            <li>1,500</li>
                            <li>3,000</li>
                            <li>4,500</li>
                            <li>6,000</li>
                            <li>10,500</li>
                            <li>15,000</li>
                            <li>22,500</li>
                            <li>30,000</li>
                            <li>45,000</li>
                            <li>60,000</li>
                            <li>90,000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Are "Sources"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">"Sources" are the different items from which we will reference information and/or
                    obtain quotations to include in the paper that we write. Sources can include your choice of books,
                    journals, articles, newspapers, poems, Web sites, artwork, etc.</p>
                <p class="mb-5">LIMITATION #1: Locating and incorporating obscure sources (or a needlessly high
                    number of sources) can be a difficult, time-consuming task for the writer. For that reason, you may
                    request—for free—only ONE source per every ONE page of text that you order. There is a small
                    surcharge of $1 per each extra source exceeding the number of pages that you order. (For example, if
                    you order 10 pages and request 15 sources, there will be a total additional cost of $5 for the 5
                    extra sources.)</p>
                <p class="mb-5">
                    LIMITATION #2: Although we have access to literally millions of sources (journals, magazines,
                    newspaper articles, books, periodicals, etc.), we may not be able to access a particular source if
                    it is unavailable online or at the assigned writer's local library. For example, class textbooks are
                    not available online or in public libraries. If your order requires access to a class textbook, you
                    must be prepared to fax or email the necessary pages from that textbook. Similarly, if your order
                    requires our writer to access a password-protected Web site, you must include your username and
                    password with your order specifications.
                </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Are "Resources"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">
                    "Resources" are documents/files in your possession that you may want to submit to the writer. If you
                    have photocopies, hand-written notes, drafts, images, or any other materials that you believe will
                    assist the writer in completing your order, you may submit them to us via email, upload, or fax.
                    After finishing this ordering process, you'll have a username/password that will enable you to
                    log-in to your account to transmit your resources (if any).
                </p>
                <h5>If you have "mandatory" files for the writer, do not delay!</h5>
                <p class="mb-5">
                    Our work is extremely time-sensitive. If you indicate in the order form that you will be providing
                    resource documents, you must do so in a timely manner. If we are unable to begin or continue working
                    because you do not provide "mandatory" materials within an amount of time that is conducive to your
                    service timeframe, the completion time/date of your order may be delayed.
                </p>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Is the "Specific Topic or Title"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">The "specific topic or title" is your short (100 characters or less), focused
                    description of the paper. Here are a few examples:</p>
                <ul>
                    <li>"Trench Warfare in World War 2"</li>
                    <li>"How Art Influences Modern Architecture"</li>
                    <li>"Mathematics in Nature"</li>
                    <li>"Symbolism in the Works of James Joyce"</li>
                    <li>"Explosive Reactions in Chemical Compounds"</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">What Is "Language & Spelling Style"?</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">There are minor spelling differences between "American/US" and "British/UK" English.
                    Here are a few examples:</p>
                <ul>
                    <li>color (US) vs. colour (UK)</li>
                    <li>center (US) vs. centre (UK)</li>
                    <li>defense (US) vs. defence (UK)</li>
                    <li>recognize (US) vs. recognise (UK)</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Please Provide Clear, Detailed Instructions</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Type all information, instructions, requirements, and specifications related to your order. Be as
                descriptive and detailed as possible. The more information, the better. Remember, we are not responsible
                for including material or features that you do not specifically request in this order form.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Features That Qualify as "Statistical Analysis"</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-5">Our prices are based on words per page. However, to complete a paper that requires a
                    meaningful amount of statistical analysis and/or mathematical calculations, a writer must generally
                    dedicate a significant amount of extra/unpaid time, labor, and effort. Therefore, if your order
                    requires a meaningful amount of statistical analysis and/or mathematical calculations, we ask that
                    you voluntarily add 15% to the order subtotal to adequately compensate the writer.</p>
                <p class="mb-5">
                    The following features qualify as "statistical analysis":
                </p>
                <ul class="list-unstyled">
                    <li>Analysis of Covariance (ANCOVA or ANOCOVA)</li>
                    <li>Analysis of Variance (ANOVA)</li>
                    <li>Causal Modeling</li>
                    <li>Cluster Analysis</li>
                    <li>Components of Variation</li>
                    <li>Computer Modeling and Simulation</li>
                    <li>Data Analysis and Interpretation</li>
                    <li>Discriminant Function Analysis</li>
                    <li>Econometric Models</li>
                    <li>Excel software calculations</li>
                    <li>Factor Analysis</li>
                    <li>Gauge (Gage) R&amp;R</li>
                    <li>JMP software calculations</li>
                    <li>Linear Regression</li>
                    <li>Logistic Regression</li>
                    <li>Multiple Regression</li>
                    <li>Multivariate Analysis of Covariance (MANCOVA)</li>
                    <li>Multivariate Analysis of Variance (MANOVA)</li>
                    <li>Multivariate Statistical Analysis</li>
                    <li>Path Analysis</li>
                    <li>Repeated Measures ANOVA</li>
                    <li>SAS software calculations</li>
                    <li>SPSS software calculations</li>
                    <li>Univariate Statistical Analysis</li>
                    <li>Variance Components (VARCOMP)</li>
                </ul>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Add a 1-Page Summary to Your Order</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Receive an additional, 1-page summary of the paper. It will contain a descriptive, concise breakdown of
                the paper's thesis, main points, arguments, findings, conclusions, etc. A 1-page summary is the perfect
                tool for studying, convenient referencing, rehearsing talking points for a presentation, preparing for
                an oral exam/defense, etc.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Priority Support: Get the "VIP" Treatment</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                We will reply to your emails and support tickets with even greater urgency, usually within 30 minutes.
                Plus, your prioritized "VIP" account will provide you with access to our priority phone number,
                real-time order status updates, direct chat with your writer, the ability to quickly add additional
                pages to your order with just a few clicks, and many other conveniences.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">We'll Store the Paper . . . Forever!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                In your online account, we will backup and permanently store the completed paper, all resource files
                that you uploaded, and the order specifications that you provided. At any time in the future (and from
                any location with any device), you'll be able to read or download all of those materials simply by
                logging-in to your account. You'll never have to worry about losing or forgetting them!
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">"Shortcut Guide" to Writing</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                We wrote our downloadable (.pdf) writing guide specifically for busy college students who need
                shortcuts. We skip all of the useless, boring stuff and provide direct, easy-to-implement advice
                regarding how to quickly improve your writing skills. We also explain how to make incredibly simple,
                fast changes to your writing style that will impress any professor (which is what really matters).
                Topics include "Eight Tips to Dramatically Improve Your Writing Overnight," "The Perfect Thesis
                Statement," "Keys to Grammar, Punctuation, and Style," "Overcoming Writer's Block in Five Easy Steps,"
                "Secrets to Bibliographies, Works Cited, and References," etc.
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Get SMS Text Notifications!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You will receive an SMS text alert at every critical stage of the project, including when the order has
                been completed! (US phones only.)
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title " id="exampleModalLabel">Add Payment Details!</h5>
                <button type="button" class="ms-0 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div data-kt-stepper-content="true" data-kt-stepper-content-for="stepper-id" data-kt-stepper-type="step"
                    class='step'>
                    <!--begin::Step 4-->
                    <div data-kt-stepper-element="content">
                        <div class="w-100">
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                    <span class="required">Name On Card</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i></span>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="Card Name"
                                    id="card_name" name="card_name" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-7 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Enter card number" id='card_number' name="card_number"
                                        value="4111 1111 1111 1111" />
                                    <!--end::Input-->
                                    <!--begin::Card logos-->
                                    <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                        <img src="{{asset('backend/assets/media/svg/card-logos/visa.svg')}}" alt="" class="h-25px" />
                                        <img src="{{asset('backend/assets/media/svg/card-logos/mastercard.svg')}}" alt="" class="h-25px" />
                                        <img src="{{asset('backend/assets/media/svg/card-logos/american-express.svg')}}" alt=""
                                            class="h-25px" />
                                    </div>
                                    <!--end::Card logos-->
                                </div>
                                <!--end::Input wrapper-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Col-->
                                <div class="col-md-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div class="row fv-row">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <select name="card_expiry_month" id="card_expiry_month"
                                                class="form-select form-select-solid" data-control="select2"
                                                data-hide-search="true" data-placeholder="Month">
                                                <option></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <input name="card_expiry_year" id="card_expiry_year" placeholder="Year" />

                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                        <span class="required">CVV</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i></span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative">
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" id="card_cvv"
                                            minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                        <!--end::Input-->
                                        <!--begin::CVV icon-->
                                        <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!--end::CVV icon-->
                                    </div>
                                    <!--end::Input wrapper-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="me-5">
                                    <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget
                                        planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    <span class="form-check-label fw-semibold text-muted">
                                        Save Card
                                    </span>
                                </label>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Step 4-->
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="submit" class="btn btn-secondary" onclick="submit_payment()">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--end::App-->





<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <i class="ki-duotone ki-arrow-up">
        <span class="path1"></span>
        <span class="path2"></span>
    </i>
</div>
<!--end::Scrolltop-->


<script>
    var hostUrl = "assets/";
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    localStorage.removeItem('checkedlength');
        localStorage.removeItem('checkedlabels');
        localStorage.removeItem('dataObject');
        localStorage.removeItem('discountCoupon')
        console.log(document.getElementById('meeting-date').value);
        // Function to handle table search
        function handleTableSearch() {
            // Get the search input value
            var searchText = $('[data-kt-user-table-filter="search"]').val().toLowerCase();
            console.log(searchText)
            // Loop through each table row
            $('#kt_table_users tbody tr').each(function() {
                // Check if any cell contains the search text
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) === -1) {
                    // Hide the row if it doesn't match the search text
                    $(this).hide();
                } else {
                    // Show the row if it matches the search text
                    $(this).show();
                }
            });
        }

        // Attach the search handler to the input change event
        $('[data-kt-user-table-filter="search"]').on('input', function() {
            handleTableSearch();
        });

        let old = '';

        $(document).ready(function() {
            $('#pricing').on('change', function() {
                var selectedValue = $(this).val();
                if (old !== '') {
                    document.getElementById(`click_${old}`).style.display = 'none';
                }
                document.getElementById(`click_${selectedValue}`).style.display = 'block';
                old = selectedValue;
             
var url = '{{ route('customer.changeDate', ['id' => ':selectedValue']) }}';
url = url.replace(':selectedValue', selectedValue);

                $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        id: selectedValue
                    }, // Assuming id is a parameter you want to send
                    success: function(response) {
                        // Handle the success response here
                        var data = response.message;
                        console.log(response)
                        var type = data.duration_type;
                        var max = data.max;
                        if (max === 'later') {
                            max = '16'
                        }
                        var per_page = data.cost_per_page;
                        var elements = document.querySelectorAll('#cost_per_page');
                        console.log(elements)
                        // Loop through the elements and set the content
                        elements.forEach(function(element) {
                            element.innerHTML = per_page;
                        });

                        calculate_sub_total();
                        // Get current date and time
                        var currentDate = new Date();
                        var currentTime = currentDate.getTime();

                        // Variables to store formatted date, time, and AM/PM
                        var formattedDate;
                        var formattedTime;
                        var ampm;
                        var day_date;
                        // Check duration type and adjust date or time accordingly
                        if (type === 'Days') {

                            currentDate.setDate(currentDate.getDate() + parseInt(max, 10));
                            formattedDate = currentDate.toISOString().slice(0, 10);
                            day_date = formatDate(formattedDate);
                            document.getElementById('meeting-date').value = formattedDate;
                            document.getElementById('meeting-date').setAttribute('min', formattedDate);
                            document.getElementById('day_date').innerHTML = day_date;

                            console.log('New Date:', formattedDate + day_date);

                        } else if (type === 'Hours') {
                            currentTime += parseInt(max, 10) * 60 * 60 * 1000;
                            var newDate = new Date(currentTime);

                            // Use newDate after it's assigned
                            formattedTime = newDate.toLocaleTimeString('en-US', {
                                hour: 'numeric',
                                minute: 'numeric',
                                hour12: false
                            }); // Remove AM/PM
                            formattedDate = newDate.toISOString().slice(0, 10);
                            ampm = newDate.toLocaleTimeString('en-US', {
                                hour12: true
                            }).split(' ')[1]; // Extract AM/PM
                            day_date = formatDate(formattedDate);

                            if (newDate.getDate() !== currentDate.getDate()) {
                                formattedDate = newDate.toISOString().slice(0, 10);
                                day_date = formatDate(formattedDate);
                                document.getElementById('day_date').innerHTML = day_date;

                                console.log('Time and Date:', formattedDate, formattedTime,
                                    ampm);
                                document.getElementById('meeting-date').value = formattedDate;
                                document.getElementById('meeting-time').value = formattedTime;
                                document.getElementById('meeting-date').setAttribute('min', formattedDate);
                                document.getElementById('day_date').innerHTML = day_date;

                                $('#ampm').val(ampm).trigger('change');

                            } else {

                                console.log('New Time:', formattedTime, ampm, +day_date);

                                formattedDate = newDate.toISOString().slice(0, 10);
                                day_date = formatDate(formattedDate);
                                document.getElementById('meeting-time').value = formattedTime;
                                document.getElementById('meeting-date').value = formattedDate;
                                document.getElementById('meeting-date').setAttribute('min', formattedDate);
                                console.log(document.getElementById('meeting-date').getAttribute('min'))
                                document.getElementById('day_date').innerHTML = day_date;
                                $('#ampm').val(ampm).trigger('change');
                            }
                        }
                    },
                    error: function(error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });

            });

            $('#term_of_paper').on('change', function() {
                var value = $(this).val();
                console.log(value);
                document.getElementById('document_type_show').innerHTML = value;
            })

            $('#academic_level').on('change', function() {
                var value = $(this).val();
                document.getElementById('research_level_show').innerHTML = value;
            })
        });

        function formatDate(dateString) {
            var date = new Date(dateString);
            try {
                return date.toLocaleDateString('en-US', {
                    weekday: 'short',
                    month: 'short',
                    day: 'numeric'
                });
            } catch (error) {
                console.error('Error formatting date:', error);
                // Fallback: Create a custom format manually
                return `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;
            }
        }
        document.getElementById('no-page').addEventListener('input', function() {
            var inputValue = this.value;
            if (inputValue == '') {
                document.getElementById('no_of_pages').innerHTML = 0;
            } else {
                document.getElementById('no_of_pages').innerHTML = inputValue;
            }
            var no_of_extra_page = document.getElementById('no_of_extra_sources').value;
            if (parseInt(no_of_extra_page) > parseInt(inputValue)) {
                console.log(no_of_extra_page + ' ' + inputValue);
                var minus = parseInt(no_of_extra_page) - parseInt(inputValue);
                if (inputValue == '') {
                    document.getElementById('extra_sources').innerHTML = no_of_extra_page;
                } else {
                    document.getElementById('extra_sources').innerHTML = minus;
                }

            } else {
                document.getElementById('extra_sources').innerHTML = 0;
            }

            calculate_sub_total();
            console.log('Input Value Changed:', inputValue, no_of_extra_page);
        });

        document.getElementById('no_of_extra_sources').addEventListener('input', function() {
            var inputValue = this.value;
            var no_of_page = document.getElementById('no_of_pages').innerHTML;
            if (parseInt(inputValue) > parseInt(no_of_page)) {
                var minus = parseInt(inputValue) - parseInt(no_of_page);
                document.getElementById('extra_sources').innerHTML = minus;
            } else {
                document.getElementById('extra_sources').innerHTML = 0;
            }
            calculate_sub_total();
        })

        document.getElementById('statistical_analysis').addEventListener('input', function() {

            var inputValue = this.value;
            console.log(inputValue)
            let check = document.getElementById('statistic_percentage').innerHTML;
            if (check != '0') {
                document.getElementById('statistic_percentage').innerHTML = 0
                calculate_sub_total()
            } else {
                document.getElementById('statistic_percentage').innerHTML = 0
            }


        })

        document.getElementById('statistical_analysis_yes').addEventListener('input', function() {

            var inputValue = this.value;
            console.log(inputValue)
            let check = document.getElementById('statistic_percentage').innerHTML;
            if (check != '15') {
                document.getElementById('statistic_percentage').innerHTML = 15
                let no_of_page = document.getElementById('no_of_pages').innerHTML;
                let extra = document.getElementById('extra_sources').innerHTML;
                if (no_of_page === '') {
                    no_of_page = 0;
                }
                if (extra === '') {
                    extra = 0;
                }

                let cost_page = document.getElementById('cost_per_page').innerHTML;
                let total = parseInt(no_of_page) * parseInt(cost_page) + parseInt(extra);
                let percentage = document.getElementById('statistic_percentage').innerHTML;
                let calculate = total + (total * parseInt(percentage) / 100);
                document.getElementById('sub_total').innerHTML = calculate;


                var local = localStorage.getItem('checkedlength');
                console.log(local);
                if (local != null) {
                    check = JSON.parse(local);
                    additional = parseInt(cost_page) * parseInt(check)
                    console.log(additional)
                    total_sum_final(additional)
                } else {
                    additional = 0
                    console.log(additional)

                    total_sum_final(additional)
                }
            }




        })

        function calculate_sub_total() {
            let no_of_page = document.getElementById('no_of_pages').innerHTML;
            let extra = document.getElementById('extra_sources').innerHTML;
            if (no_of_page === '') {
                no_of_page = 0;
            }
            if (extra === '') {
                extra = 0;
            }
            percentage = document.getElementById('statistic_percentage').innerHTML;
            let cost_page = document.getElementById('cost_per_page').innerHTML;
            let total = parseInt(no_of_page) * parseInt(cost_page) + parseInt(extra);
            console.log(percentage);
            if (percentage != '0') {
                let calculate = total + (total * parseInt(percentage) / 100);
                document.getElementById('sub_total').innerHTML = calculate;
            } else {
                document.getElementById('sub_total').innerHTML = total;

            }
            var local = localStorage.getItem('checkedlength');
            console.log(local);
            if (local != null) {
                check = JSON.parse(local);
                additional = parseInt(cost_page) * parseInt(check)
                console.log(additional)
                total_sum_final(additional)
            } else {
                additional = 0
                console.log(additional)

                total_sum_final(additional)
            }
        }

        function payment() {
            var formElements = document.querySelectorAll(".kt_invoice_form [name]");

            // Flag to check if any input is null
            var isNull = false;

            // Loop through each form element
            formElements.forEach(function(element) {
                // Check if the element is an input, select, or textarea
                if (
                    (element.tagName === "INPUT" || element.tagName === "SELECT" || element.tagName ===
                    "TEXTAREA") &&
                    !element.value.trim()
                ) {
                    isNull = true;
                }
            });

            // Display alert if any input is null
            if (isNull) {
                alert("Please fill in all required fields.");
            }

            // Return true if the form is valid, false otherwise
            if (!isNull) {
                
                
                //
                
              var url2 = '{{ route('customer.checkout') }}';

                $.ajax({
                    type: 'GET',
                    url: url2,
                
                    // Assuming id is a parameter you want to send
                    success: function(response) {
                        console.log(response.sessionId);
 Swal.fire('Success', 'Add Payment Details!', 'success');
 
                        if (response && response.sessionId) {
          
            window.location.href = '/customer/card/show/' + response.sessionId;
        } else {
            console.error('Invalid response format or missing sessionId.');
        }
                
                       
                    },
                
                    error: function(error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });

                
                
                
                // Open modal if the form is valid
                var modal = new bootstrap.Modal(document.getElementById("modal-15"));
                modal.show();

                var email = document.getElementById('email').value;
                var backup_email = document.getElementById('backup-email').value;
                var pricing = document.getElementById('pricing').value;
                var due_date = document.getElementById('meeting-date').value;
                var due_time = document.getElementById('meeting-time').value;
                var ampm = document.getElementById('ampm').value;
                var cost_per_page = document.getElementById('cost_per_page').innerHTML;
                var academic_level = document.getElementById('academic_level').value;
                var subject = document.getElementById('subject').value;
                var description = document.getElementById('description').value;
                var paper_format = document.getElementById('paper_format').value;
                var term_of_paper = document.getElementById('term_of_paper').value;
                var no_of_extra_sources = document.getElementById('no_of_extra_sources').value;
                var topic = document.getElementById('topic').value;
                var no_of_pages = document.getElementById('no_of_pages').innerHTML;
                var language_spelling = document.getElementById('language_spelling').value;
                var submitting = document.getElementById('submitting').value;
                var sub_total = document.getElementById('sub_total').innerHTML;
                var total_cost = document.getElementById('total_cost').innerHTML;
                var coupon = document.getElementById('coupon').value;
                var local = localStorage.getItem('checkedlabels');
                var discount = document.getElementById('discount').value;
                var discount_value = document.getElementById('discount_value').value;
                console.log(local);
                if (local != null) {
                    check = JSON.parse(local);
                    additional_info = check;
                } else {
                    additional_info = null;
                }
                var statistical_analysis = document.getElementById('statistic_percentage').innerHTML;

                var dataObject = {
                    pricing: pricing,
                    due_date: due_date + ' ' + due_time,
                    due_time: due_time,
                    coupon: coupon,
                    ampm: ampm,
                    subject: subject,
                    description: description,
                    paper_format: paper_format,
                    term_of_paper: term_of_paper,
                    no_of_extra_sources: no_of_extra_sources,
                    topic: topic,
                    no_of_pages: no_of_pages,
                    submitting: submitting,
                    sub_total: sub_total,
                    academic_level: academic_level,
                    language_spelling: language_spelling,
                    total_cost: total_cost,
                    cost_per_page: cost_per_page,
                    additional_info: additional_info,
                    statistical_analysis: statistical_analysis,
                    email: email,
                    backup_email: backup_email,
                     discount : discount,
                    discount_value :  discount_value,
                };
                localStorage.setItem('dataObject', JSON.stringify(dataObject))
                console.log(dataObject);
            }
        }
        function total_sum_final(additional) {
            var sub_total = document.getElementById('sub_total').innerHTML;
            console.log(additional)
            total = parseInt(sub_total) + parseInt(additional);
            console.log(total);
            document.getElementById('total_cost').innerHTML = total;
            coupon();

        }

        var checkedLabels = [];

        // Add event listener to the toggle switches
        document.querySelectorAll('#toggleSwitch').forEach(function(toggleSwitch) {
            toggleSwitch.addEventListener('change', function() {
                var target = this.dataset.target; // Get the data-target attribute
                var costLabelElement = document.getElementById('cost_label' + target);

                // Log the costLabelElement to the console to debug
                console.log(costLabelElement);

                // Update the variable or perform any action based on the checked state
                if (this.checked) {
                    var costLabelValue = costLabelElement.textContent.trim();
                    // Do something with the costLabelValue
                    console.log('ON: ' + costLabelValue);

                    // Add the checked label to the array
                    checkedLabels.push(costLabelValue);
                    checklength = checkedLabels.length;
                    localStorage.setItem('checkedlength', JSON.stringify(checklength));
                    localStorage.setItem('checkedlabels', JSON.stringify(checkedLabels));
                    cost_per = document.getElementById('cost_per_page').innerHTML;
                    additional = parseInt(checklength) * parseInt(cost_per);
                    total_sum_final(additional);
                } else {
                    // Remove the unchecked label from the array
                    var costLabelValue = costLabelElement.textContent.trim();
                    var index = checkedLabels.indexOf(costLabelValue);
                    if (index !== -1) {
                        checkedLabels.splice(index, 1);
                    }
                    checklength = checkedLabels.length;
                    localStorage.setItem('checkedlength', JSON.stringify(checklength));
                    localStorage.setItem('checkedlabels', JSON.stringify(checkedLabels));
                    cost_per = document.getElementById('cost_per_page').innerHTML;
                    additional = parseInt(checklength) * parseInt(cost_per);
                    total_sum_final(additional);
                    console.log('OFF: ' + costLabelValue);
                }

                // Display the current array of checked labels
                console.log('Checked Labels: ', checkedLabels);


            });
        });

        function total_sum_final(additional) {
            var sub_total = document.getElementById('sub_total').innerHTML;
            console.log(additional)
            total = parseInt(sub_total) + parseInt(additional);
            console.log(total);
            document.getElementById('total_cost').innerHTML = total;
            coupon();

        }

        function coupon() {

            var my_coupon = document.getElementById('my_coupon').innerHTML;
            var entered_coupon = document.getElementById('coupon').value;
            var url = '{{ route('customer.coupon-check') }}';
if(entered_coupon != ''){
    $.ajax({
                type: 'post',
                url: url,
                data: {
                    coupon: entered_coupon,
                    _token: '{{ csrf_token() }}',
                },
                // Assuming id is a parameter you want to send
                success: function(response) {
                    Swal.fire('Success', response.success, 'success');

          
                var json = localStorage.getItem('discountCoupon');
                var parsed = JSON.parse(json);

                if (parsed == null || parsed == '') {
                    console.log(parsed)
                    let coupon = response.coupon;
                    if(coupon.discount_value == 'Fixed Amount'){
                        var net_total = document.getElementById('total_cost').innerHTML;
                    // var total = parseInt(net_total) - (parseInt(net_total) * 0.1); // Apply a 10% discount
                    var total = parseInt(net_total) -  parseInt(coupon.discount);
                    document.getElementById('total_cost').innerHTML = total;
                    document.getElementById('discount').value=coupon.discount
                    document.getElementById('discount_value').value=coupon.discount_value
                    localStorage.setItem('discountCoupon', JSON.stringify(entered_coupon));
                    }else if(coupon.discount_value == 'Percentage'){
                        var net_total = document.getElementById('total_cost').innerHTML;
                    var total = parseInt(net_total) - (parseInt(net_total) * parseInt(coupon.discount)/100); // Apply a 10% discount
                   
                    document.getElementById('total_cost').innerHTML = total;
                    document.getElementById('discount').value=coupon.discount
                    document.getElementById('discount_value').value=coupon.discount_value
                    localStorage.setItem('discountCoupon', JSON.stringify(entered_coupon));
                    }
                   

                }
            },
                error: function(response) {
                    // Handle any errors here
                    console.log(response)
                    var my = response.responseJSON;
                    Swal.fire('Error', my.error, 'error');
                    document.getElementById('coupon').value='';
                }
            });
}

         
            // if (entered_coupon === my_coupon) {

            //     }else{
            //         console.log('else')
            //     }
            // }
        }

        function submit_payment() {
            var card_name = document.getElementById('card_name').value;
            var card_number = document.getElementById('card_number').value;
            var card_expiry_month = document.getElementById('card_expiry_month').value;
            var card_expiry_year = document.getElementById('card_expiry_year').value;
            var card_cvv = document.getElementById('card_cvv').value;

            var card_detail = {
                card_name: card_name,
                card_number: card_number,
                card_expiry_month: card_expiry_month,
                card_expiry_year: card_expiry_year,
                card_cvv: card_cvv
            }
            localStorage.setItem('card_detail', JSON.stringify(card_detail))
            console.log(card_detail);
            user_id = document.getElementById('user_id').value;
            var data = localStorage.getItem('dataObject');
            dataobject = JSON.parse(data);
            var url = '{{ route('customer.customer_payment', ['id' => ':id']) }}';
            url = url.replace(':id', user_id);

            $.ajax({
                type: 'post',
                url: url,
                data: {
                    card: card_detail,
                    _token: '{{ csrf_token() }}',
                },
                // Assuming id is a parameter you want to send
                success: function(response) {
                    console.log(response);
                    message = response.message;
                    card = message.card;
                    var url2 = '{{ route('customer.create_order', ['id' => ':id']) }}';
                    url2 = url2.replace(':id', user_id);
                    $.ajax({
                        type: 'post',
                        url: url2,
                        data: {
                            card: card_detail,
                            dataObject: dataobject,
                            _token: '{{ csrf_token() }}',
                        },
                        // Assuming id is a parameter you want to send
                        success: function(response) {
                            console.log(response);

                            Swal.fire('Success', "Order Placed Successfully", 'success');


                        },

                        error: function(error) {
                            // Handle any errors here
                            console.error(error);
                        }
                    });

                },

                error: function(error) {
                    // Handle any errors here
                    console.error(error);
                }
            });
        }
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/user-management/users/list/add.js') }}"></script>


<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('backend/assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('backend/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>


<script src="{{ asset('backend/assets/js/custom/utilities/modals/users-search.js') }}"></script>

<!--end::Custom Javascript-->
<!--end::Javascript-->


@endsection