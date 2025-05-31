<div wire:poll.750ms>
    @if($messages->count() > 0)
        @foreach ($messages as $m)
            @php
                $output = $m->created_at->diffForHumans();
                $isSender = $m->sender_id == Auth()->user()->id;
                $senderRole = $m->sender_role;
                $sendBy = $m->send_by;
                $type = $m->type;
                $orderId = $m->order_id;
                $createdAt = $m->created_at->format('F j, Y g:i A');
                $currentUserRole = Auth()->user()->role;

                // Determine sender display name
                $senderDisplay = match(true) {
                    $senderRole == 'admin' && $sendBy == 'Writer' => 'Writer',
                    $senderRole == 'admin' => 'Admin',
                    default => 'Customer'
                };

                // Determine avatar path
                $avatarPath = match(true) {
                    $senderRole == 'admin' => asset('images/users/admins/'.$m->sender_avatar),
                    $m->sender_avatar => asset('images/users/customers/'.$m->sender_avatar),
                    default => asset('backend/assets/media/ws/profile.png')
                };
                if(!isset($type)){
                    $messageDirection = match(true) {
                    // Admin sending to customer
                    $isSender && $senderRole == 'admin' => 'Message for Customer',
                    // Customer sending to admin/writer
                    $isSender && $senderRole == 'customer' => 'Message for ' . $sendBy,
                    // Customer viewing admin's message
                    !$isSender && $currentUserRole == 'customer' && $senderRole == 'admin' => 'Message for Customer',
                    // Admin viewing customer's message
                    !$isSender && $currentUserRole != 'customer' && $senderRole == 'customer' => 'Message for ' . $sendBy,
                    // Default case
                    default => 'Message from ' . $senderDisplay
                };
                }else{
                    $messageDirection = "Rewrite Request";
                }
                // Determine message direction text

            @endphp

            <div data-kt-inbox-message="message_wrapper">
                <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer custom-padding" data-kt-inbox-message="header">
                    <div class="d-flex align-items-center" style="{{ $isSender ? 'text-align:end;' : '' }}">
                        <div class="symbol symbol-50 me-4">
                            <span class="symbol-label" style="background-image:url({{ $avatarPath }});"></span>
                        </div>

                        <div class="pe-5">
                            <div class="d-flex align-items-center flex-wrap gap-1">
                                <span class="fw-bold {{ ($messageDirection == 'Rewrite Request') ? 'text-danger' : 'text-warning' }}">
                                    {{ $messageDirection }} _ Order Number: {{ $orderId }}
                                </span>
                            </div>

                            <div class="d-flex text-start" data-kt-inbox-message="details">
                                <span class="text-muted fw-semibold">From: </span>
                                <a href="#" class="me-1 text-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                    {{ $senderDisplay }}
                                </a>
                            </div>

                            <div class="d-flex text-start" data-kt-inbox-message="details">
                                <span class="text-muted fw-semibold">Date: </span>
                                <a href="#" class="me-1 text-white" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                    {{ $createdAt }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse fade show" data-kt-inbox-message="message" style="{{ $isSender ? 'text-align:end' : 'margin-left: auto' }}">
                    <div class="custom-padding">
                        @if($m->media != null)
                            @foreach(json_decode($m->media) as $a)
                                @if($a->type == 'image')
                                    <a href="{{ asset('storage/'.$a->url) }}">
                                        <img src="{{ asset('storage/'.$a->url) }}" alt="Image" width="150px" height="150px"
                                            style="height: 40px; width: 50px; border-radius: 100%; margin-bottom: 10px; display: flex;">
                                    </a>
                                @elseif ($a->type == 'video')
                                    <video controls loop width="150px" height="150px" style="display:block;">
                                        <source src="{{ asset('storage/'.$a->url) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @elseif ($a->type == 'word')
                                    <a href="{{ asset('storage/'.$a->url) }}" download="{{ $a->url }}" class="d-flex text-warning">
                                        {{ str_replace("media/", "", $a->url) ?? 'Download File' }}
                                    </a>
                                    <br>
                                @elseif ($a->type == 'document')
                                    <a href="{{ asset('storage/'.$a->url) }}" download="{{ $a->url }}" class="d-flex text-warning">
                                        {{ str_replace("media/", "", $a->url) ?? 'Download File' }}
                                    </a>
                                    <br>
                                @elseif ($a->type == 'others')
                                    <button class="bg-transparent mb-4 border-0 d-flex text-warning"
                                        onclick="window.open('{{ asset('storage/'.$a->url)}}', '_blank')"
                                        style="height: 50px; width: 100px; display: block;">
                                        {{ str_replace("media/", "", $a->url) ?? 'Download File' }}
                                    </button>
                                @endif
                            @endforeach
                        @endif

                        @if($m->message != null)
                            <div class="msg-bubble d-flex flex-column {{ $isSender ? 'text-start' : '' }}" style="
                                padding: {{ $isSender ? '2rem' : '6px' }};
                                border-radius: 5px;
                                border: 1px solid #783AFB !important;
                                background-color: #1515158a !important;
                                color: #fff !important;">
                                {!! $m->message !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        {{ $messages->links() }}
    @endif
</div>
