<style>
    .card-style_new {
        min-height: 400px; /* Ensuring uniform height */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .myCardBody_new {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* Align Turnitin Image to the Right */
    .turnitin-img {
        max-width: 100px;
        height: auto;
        display: block;
        margin-left: auto; /* Moves image to the right */
    }

 /* Paper Details in One Line with Overflow Handling */
 .paper-details p {
    margin: 5px 0;
    font-size: 14px;
    color: white;
}

.detail-item {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 48%; /* Ensures two items fit in one row */
   
}

</style>

<div class="container px-0 position-relative">
    <div class="owl-carousel owl-theme">
        @if(!empty($papers))
            @foreach ($papers as $paper)
                <div class="mb-4">
                    <a href="{{ route('customer.show.libraries') }}" class="text-decoration-none">
                        <div class="card-style_new myCardStyles">
                            <div class="card-body myCardBody_new">
                                <h5 class="yellow-text fw-bold">{{ Str::limit($paper->paper_title, 40, '...') }}</h5>

                                <!-- Paper Details in One Line -->
                            <!-- Paper Details in One Line with Overflow Handling -->
                            <div class="paper-details">
                                <p><strong>Subject:</strong> {{ Str::limit($paper->subject_topic, 24, '...') }}</p>
                                <p><strong>Paper Type:</strong>  {{ Str::limit($paper->paper_type, 24, '...') }}</p>
                                
                                <p><strong>Words Count:</strong> {{ $paper->word_count }}</p>
                                
                                <p><strong>Citation Style:</strong> {{ $paper->citation }}</p>
                            </div>
                            


                                <!-- Align Turnitin Image to the Right -->
                                <img src="{{ asset('fronted_final/assets/images/image.png') }}" alt="Turnitin Image" class="turnitin-img">

                                <!-- AI Detection and Plagiarism -->
                                <p class="card-text d-flex justify-content-between align-items-center mb-3">
                                    <span style="color: white">AI Detection:</span>
                                    <button class="btn btn-primary my-btn" style="background-color: #007bff; border: none; min-width: 120px;">
                                        {{ $paper->ai_report }}%
                                    </button>
                                </p>

                                <p class="card-text d-flex justify-content-between align-items-center mb-3">
                                    <span style="color: white">Plagiarism:</span>
                                    <button class="btn btn-secondary my-btn" style="background-color: #dc3545; border: none; min-width: 120px;">
                                        {{ $paper->plagiarism }}%
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>
</div>
