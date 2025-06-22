{{-- resources/views/livewire/message-list.blade.php --}}
<div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Actions-->
                            <div class="d-flex flex-wrap gap-2">
                                <!--begin::Checkbox-->

                                <!--end::Checkbox-->
                                <!--begin::Reload-->
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary badge-custom-bg"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                    title="Reload"
                                    onclick="window.location.href='{{route('customer.message-managememnt')}}' ">
                                    <i class="ki-duotone ki-arrows-circle fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <!--end::Reload-->
                                <!--begin::Delete-->
                                <!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" aria-label="Archive" data-bs-original-title="Archive" data-kt-initialized="1" title="Archive">-->
                                <!--    <i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span class="path2"></span></i> </a>-->
                                <!--end::Delete-->
                                <!--begin::Filter-->
                                <div>
                                    <!--<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">-->
                                    <!--    <i class="ki-duotone ki-down fs-2"></i>-->
                                    <!--</a>-->
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-inbox-listing-filter="show_all">All</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-inbox-listing-filter="show_read">Read</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-inbox-listing-filter="show_unread">Unread</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-inbox-listing-filter="show_starred">Starred</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3"
                                                data-kt-inbox-listing-filter="show_unstarred">Unstarred</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Filter-->
                            </div>
                            <!--end::Actions-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative">
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
                                <!--end::Search-->
                                <!--begin::Toggle-->
                                <a href="#"
                                    class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                    title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                                    <i class="ki-duotone ki-burger-menu-2 fs-3 m-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                </a>
                                <!--end::Toggle-->
                            </div>
                            <!--end::Actions-->
                        </div>
<div>
  {{-- Search box --}}

  </div>

  <div class="card-body px-10 msg-cus">
    {{-- Table --}}
    <table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
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
<div class="mb-3">
    <label for="perPageSelect" class="form-label text-white">Items per page:</label>
    <select id="perPageSelect" wire:model="perPage" class="form-select w-auto" wire:change="$refresh" >
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="25">25</option>
    </select>
</div>


    {{-- Pagination --}}
<div class="mt-4">
  {{ $threads->links() }}
</div>
  </div>
</div>
