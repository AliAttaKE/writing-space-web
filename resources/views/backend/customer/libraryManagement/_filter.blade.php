<div class="card mb-5 card-custom-bg">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center py-6 px-6 flex-wrap me-3">
        <!--begin::Title-->
        <h3 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center mt-0 mb-5 custom-fs-22 fs-color-white">
            Manage Papers
        </h3>
        <!--end::Title-->

        <div class="row">
            <!--begin::col-->
            <div class="col-md-3 col-sm-6 mb-3">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2 custom-fs-13 fs-color-white">Subject</label>
                <!--end::Label-->
                @php
                    $query = \App\Models\Paper::where('status', 'Enable');
                        if (!empty($subject)) {
                            $query->where('subject_topic', $subject);
                        }
                        if (!empty($termOption)) {
                            $query->where('paper_type', $termOption);
                        }
                        if (!empty($wordCount)) {
                            $query->where('word_count', $wordCount);
                        }
                        if (!empty($citation)) {
                            $query->where('citation', $citation);
                        }
                    $titles = $query->select("subject_topic")->distinct()->orderBy('subject_topic', 'asc')->get();
                @endphp

                @if ($titles->isNotEmpty())

                    <select name="subject" id="subject"
                            class="form-select form-select-solid subject btn-dark-primary select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">

                        <option data-select2-id="select2-data-3-38ru"></option>

                        @foreach ($titles as $title)
                            <option value="{{$title->subject_topic}}"
                                {{ isset($subject) && $title->subject_topic === $subject ? 'selected' : '' }}
                            >
                                {{$title->subject_topic}}
                            </option>
                        @endforeach

                    </select>
                    @else
                    <select name="subject" id="subject"
                            class="form-select form-select-solid select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">
                        <option data-select2-id="select2-data-3-38ru"></option>
                        <option></option>
                    </select>
                @endif
                <!--begin::Input-->
                <!--end::Input-->
            </div>
            <!--end::col-->
            <!--begin::col-->
            <div class="col-md-3 col-sm-6 mb-3">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2 custom-fs-13 fs-color-white">Paper Type</label>
                <!--end::Label-->
                <!--begin::Input-->
                @php
                // Paper type
                    $query = \App\Models\Paper::where('status', 'Enable');
                    if (!empty($subject)) {
                            $query->where('subject_topic', $subject);
                        }
                        if (!empty($termOption)) {
                            $query->where('paper_type', $termOption);
                        }
                        if (!empty($wordCount)) {
                            $query->where('word_count', $wordCount);
                        }
                        if (!empty($citation)) {
                            $query->where('citation', $citation);
                        }

                    $terms = $query->select("paper_type")->distinct()->orderBy('paper_type', 'asc')->get();
                @endphp
                @if ($terms->isNotEmpty())

                    <select name="term_of_paper_id" id="term_of_paper_id"
                            class="form-select form-select-solid paperTermOption btn-dark-primary select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">
                        <option data-select2-id="select2-data-6-1mij"></option>
                        @foreach ($terms as $term)
                            <option value="{{$term->paper_type}}"
                                {{ isset($termOption) && $term->paper_type === $termOption ? 'selected' : '' }}
                            >{{$term->paper_type}}</option>
                        @endforeach

                    </select>
                    @else
                    <select name="term_of_paper_id" id="term_of_paper_id"
                            class="form-select form-select-solid select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">
                        <option data-select2-id="select2-data-6-1mij"></option>
                        <option value="1">No term of paper found in database...</option>
                    </select>
                @endif
                <!--end::Input-->
            </div>
            <!--end::col-->
            <!--begin::col-->
            <div class="col-md-2 col-sm-6 mb-3">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2 custom-fs-13 fs-color-white">Word Count</label>
                <!--end::Label-->
                <!--begin::Input-->
                @php
                    $query = \App\Models\Paper::where('status', 'Enable');
                    if (!empty($subject)) {
                            $query->where('subject_topic', $subject);
                        }
                        if (!empty($termOption)) {
                            $query->where('paper_type', $termOption);
                        }
                        if (!empty($wordCount)) {
                            $query->where('word_count', $wordCount);
                        }
                        if (!empty($citation)) {
                            $query->where('citation', $citation);
                        }
                    $papers = $query->select("word_count")->distinct()->orderBy('word_count', 'asc')->get();
                @endphp
                @if ($papers->isNotEmpty())

                    <select name="paper_id_word_count" id="paper_id_word_count"
                            class="form-select form-select-solid wordCountOption btn-dark-primary select22"
                            data-control="select2" data-hide-search="true"
                            data-placeholder=""
                    >
                        <option data-select2-id="select2-data-9-q7hp"></option>
                        @foreach ($papers as $paper)
                            <option value="{{$paper->word_count}}"
                                {{ isset($wordCount) && $paper->word_count == $wordCount ? 'selected' : '' }}
                            >{{$paper->word_count}}</option>
                        @endforeach

                    </select>
                    @else
                    <select name="paper_id_word_count" id="paper_id_word_count"
                            class="form-select form-select-solid select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">
                        <option data-select2-id="select2-data-9-q7hp"></option>
                        <option value="1">No word count found in database...</option>
                    </select>
                @endif
                <!--end::Input-->
            </div>
            <!--end::col-->

            <div class="col-md-4 col-sm-6 mb-3">
                <label for="" class="mb-3 fs-6 fw-semibold custom-fs-13 fs-color-white">Bibliography format &amp; citation
                    style:<span class="text-white">*</span>
                </label>
                {{-- Paper_Format --}}
                @php
                     $query = \App\Models\Paper::where('status', 'Enable');
                     if (!empty($subject)) {
                            $query->where('subject_topic', $subject);
                        }
                        if (!empty($termOption)) {
                            $query->where('paper_type', $termOption);
                        }
                        if (!empty($wordCount)) {
                            $query->where('word_count', $wordCount);
                        }
                        if (!empty($citation)) {
                            $query->where('citation', $citation);
                        }
                     $papers = $query->select("citation")->distinct()->orderBy('citation', 'asc')->get();
                @endphp

                @if ($papers->isNotEmpty())

                    <select name="citation" id="citation"
                            class="form-select form-select-solid paperFormatOption btn-dark-primary select22"
                            data-control="select2" data-hide-search="true"
                            data-placeholder=""
                    >
                        <option data-select2-id="select2-data-12-cci9"></option>
                        @foreach ($papers as $citations)
                            <option value="{{$citations->citation}}"
                                {{ isset($citation) && $citations->citation == $citation ? 'selected' : '' }}
                            >{{$citations->citation}}</option>
                        @endforeach

                    </select>
                    @else
                    <select name="citation" id="citation"
                            class="form-select form-select-solid select22"
                            data-control="select2" data-hide-search="true" data-placeholder="">
                        <option data-select2-id="select2-data-12-cci9"></option>
                        <option value="1">No paper format found in database...</option>
                    </select>
                @endif
            </div>
            <div class="col-3">
                {{-- <button class="btn btn-sm fw-bold btn-primary">Search</button> --}}
                <button class="btn btn-sm fw-bold btn-secondary badge-custom-bg" onclick="window.location.href='{{route('customer.show.libraries')}}' " >Reset</button>
            </div>
        </div>

    </div>
    <!--end::Page title-->
</div>
