{{-- resources/views/livewire/message-list.blade.php --}}
<div>
  {{-- Search box --}}
  <div class="d-flex align-items-center position-relative mb-3">
    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
      <span class="path1"></span>
      <span class="path2"></span>
    </i>

    <input
      type="text"
      wire:model.debounce.300ms="search"
      class="form-control form-control-solid w-250px ps-15 btn-dark-primary"
      placeholder="Search threads…"
      wire:keydown.enter="$refresh"
    />

    <!-- Yahan Search button add kiya -->
    <button
      type="button"
      wire:click="$refresh"
      class="btn btn-light ms-2"
    >
      Search
    </button>
  </div>

  <div class="card-body px-10 msg-cus">
    {{-- Table --}}
    <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
      <thead>
        <tr>
          <th class="min-w-80px">Order ID</th>
          <th class="min-w-125px">Unread</th>
          <th class="min-w-125px">Last Updated</th>
          <th class="min-w-125px">Status</th>
          <th class="min-w-125px">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse($threads as $thread)
          <tr>
            <td class="ps-9">{{ $thread->order_id }}</td>
            <td class="fs-7 pe-9">
              @if($thread->unread_count)
                <span class="fw-semibold text-center bg-danger rounded-circle px-2 text-white">
                  Unread ({{ $thread->New_message }})
                </span>
              @else
                <span class="fw-semibold">All Read</span>
              @endif
            </td>
            <td class="fs-7 pe-9">{{ $thread->updated_at->diffForHumans() }}</td>
            @php $status = $thread->order->order_status; @endphp
            <td>
              <span class="badge badge-custom-bg me-2">
                @if(auth()->user()->id != 1 && $status == 'Completed')
                  In-Progress
                @else
                  {{ $status }}
                @endif
              </span>
            </td>
            <td>
              <a href="{{ route('customer.reply-message', $thread->order_id) }}"
                 class="btn btn-sm btn-light btn-active-light-primary">
                View
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center text-white">No threads found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    {{-- Pagination --}}
<div class="mt-4">
  {{ $threads->links('pagination::bootstrap-5') }}
</div>
  </div>
</div>
