@props(['pricing'])

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="pricing-table" style="overflow-x: auto;">
                <table class="table listview" style="overflow-x: auto;">
                    <thead>
                        <tr class="listview">
                            <th scope="col" class="th-1">Deals on Offer</th>
                            <th scope="col" class="th-2">Deadline</th>
                            <th scope="col" class="th-3">Cost Per Page</th>
                            <th scope="col" class="th-4">Page Limit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($pricing)
                            @foreach ($pricing as $p)
                                @php
                                    // Remove unwanted words from the 'min' field if needed
                                    $cleanMin = preg_replace('/^(Only|Just|Need it in)\s+/', '', trim($p->min));

                                    // Define the phrases you want to remove from the page_limit field
                                    $removePhrases = [
                                        "ensures your urgent needs,",
                                        "for up to",
                                        "up to",
                                        "limit of",
                                        "With a",
                                        "-page",
                                        "-"
                                    ];
                                    // Remove these phrases (case-insensitive) from the page_limit field
                                    $cleanPageLimit = str_ireplace($removePhrases, "", $p->page_limit);
                                    $cleanPageLimit = trim($cleanPageLimit);
                                @endphp
                                <tr>
                                    <th scope="row" class="th-1">
                                        <span class="text-purple">{{ $p->text }}</span>
                                    </th>
                                    <td class="th-2">
                                        <span class="underline">
                                            @if ($cleanMin == '15')
                                                {{ $cleanMin }} {{ $p->duration_type }} or {{ $p->max }}
                                            @else
                                                {{ $cleanMin }} - {{ $p->max }} {{ $p->duration_type }}
                                            @endif
                                        </span>
                                    </td>
                                    <td class="th-3">
                                        <span class="underline">${{ $p->cost_per_page }}</span>
                                    </td>
                                    <td class="th-4">
                                        {{ $cleanPageLimit }} page-limit
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center align-items-center mt-5">
            <a href="{{ route('customer.customerPlaceOrder') }}" class="gradient-btn border-0 text-decoration-none btn-custom-width">Order Now</a>
        </div> --}}
    </div>
</div>