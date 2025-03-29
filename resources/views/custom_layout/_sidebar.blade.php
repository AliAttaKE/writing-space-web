<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
    <!--begin::Menu-->
    <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
        <!--begin:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu {{ (request()->is('admin/dashboard')) ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">Admin
                        Dashboard</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-purchase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Order Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.placeOrder')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Place New
                    Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.new-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">New
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{route('admin.inprogress-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">In-Progress
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->

                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.revision-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Revisions</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.completed-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Completed</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.delivered-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Delivered</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.other-order')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Others</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->

         <!--begin:Menu item-->
         <div class="menu-item menu-accordion">
            <!--begin:Menu link-->
            <span class="menu-link py-0">
                <span class="menu-icon">
                    <i class="ki-duotone ki-switch fs-2">
                        <span class="path1"></span><span class="path2"></span>
                    </i>
                </span>
                <span class="menu-title">
                    <a class="menu-link ps-0 custom-menu {{ (request()->is('file_chat_gpts')) ? 'active' : '' }}" href="{{ url('file_chat_gpts') }}">
                        Complete Order Files
                    </a>
                </span>
            </span><!--end:Menu link-->
        </div><!--end:Menu item-->
        


      
        
        <!-- <div class="menu-item menu-accordion">-->
           
        <!--    <span class="menu-link py-0">-->
        <!--        <span class="menu-icon">-->
        <!--            <i class="ki-duotone ki-switch fs-2">-->
        <!--                <span class="path1"></span><span class="path2"></span>-->
        <!--            </i>-->
        <!--        </span>-->
        <!--        <span class="menu-title">-->
        <!--            <a class="menu-link ps-0 custom-menu {{ request()->routeIs('admin.cms_pages.index') ? 'active' : '' }}" href="{{ route('admin.cms_pages.index') }}">-->
        <!--                CMS Pages-->
        <!--            </a>-->
                    
                       
        <!--        </span>-->
        <!--    </span>-->
        <!--</div>-->
        <!--end:Menu item-->

        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">
            <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/folders/show')) ? 'active' : '' }}" href="{{ route('admin.folder.show') }}">File
                        Management</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu " href="{{route('admin.message-management')}}">Message
            Management</a></span></span><!--end:Menu link-->
</div><!--end:Menu item-->
            
        <!--<div class="menu-item menu-accordion">-->
          
        <!--    <span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-security-user fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">-->
        <!--    <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/emails')) ? 'active' : '' }}" href="{{ route('admin.emails.index') }}">Email-->
        <!--                Automation</a></span></span>-->
                     
        <!--</div>-->
        
        
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-purchase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Product Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.subscription')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Package</span></a><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{route('admin.custom-setting')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Custom
                            Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
         <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
            <!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-user fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title custom-menu">Customers Manage</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link-->
                    <a class="menu-link {{ (request()->is('admin/customers/management')) ? 'active' : '' }}" href="{{ route('admin.customer.management') }}">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Contact
                            Customer</span>
                    </a>
                            <!--end:Menu link-->
                </div>
                <!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link-->
                    <a class="menu-link {{ (request()->is('admin/show/customers/data')) ? 'active' : '' }}" href="{{ route('admin.show.customers.data') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Customer Data
                            Table</span>
                    </a><!--end:Menu link-->
                </div><!--end:Menu item--><!--end:Menu item-->
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
          <!--begin:Menu item-->
    
      

        <!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title">
            <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/library/management')) ? 'active' : '' }}" href="{{ route('admin.library.index') }}">Library
                        Management</a></span></span><!--end:Menu link-->
        </div><!--end:Menu item-->
        
     

          <!--begin:Menu item-->
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link "><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Services</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                <!--begin:Menu item-->
                
                
                      <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.pakage_limit.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Package limit Pages</span></a><!--end:Menu link--></div><!--end:Menu item-->

                      <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.add_ons.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">add ons</span></a><!--end:Menu link--></div><!--end:Menu item-->
                
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.paper_formats.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Paper Format</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.languages.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Language & Spelling</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                {{-- <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.services.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Service Type</span></a><!--end:Menu link--></div><!--end:Menu item--> --}}
                <!--begin:Menu item-->
                
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.email_types.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Email Type</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                {{-- <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.restrictions.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Restriction</span></a><!--end:Menu link--></div><!--end:Menu item--> --}}
                <!--begin:Menu item-->
                {{-- <div class="menu-item"><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.subtime_limits.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Sub-Time-Limit</span></a><!--end:Menu link--></div><!--end:Menu item--> --}}
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link" href="{{ route('admin.academics.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Academic Level</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.paper_terms.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Paper Types</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.subjects.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Subjects</span></a><!--end:Menu link--></div><!--end:Menu item-->
                <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.coupons.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Coupons</span></a><!--end:Menu link--></div><!--end:Menu item-->
                 <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.blogs') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Blogs</span></a><!--end:Menu link--></div><!--end:Menu item-->
                 <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.promotions.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Promotions</span></a><!--end:Menu link--></div><!--end:Menu item-->
                 
                  <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.package.cancelation') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Package Cancelation</span></a><!--end:Menu link--></div><!--end:Menu item-->
                  
                  
                     <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.show.feedback') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Feedbacks</span></a><!--end:Menu link--></div><!--end:Menu item-->
                     
                     
                     
                       <!--begin:Menu item-->
  <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <!--begin:Menu link--><span class="menu-link "><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">System Configurations</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
        <!--begin:Menu item-->
        <div class="menu-item"><!--begin:Menu link--><a class="menu-link 
        {{ (request()->is('admin/merchant/account/configurations')) ? 'active' : '' }}
        " 
        href="{{ route('admin.merchant.account.configurations') }}"
        ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Marchant Account</span></a><!--end:Menu link--></div><!--end:Menu item-->
        <!--end:Menu item-->

        <!--begin:Menu item-->
        <div class="menu-item"><!--begin:Menu link--><a class="menu-link 
        {{ (request()->is('admin/smpt/configurations')) ? 'active' : '' }}
        " 
        href="{{ route('admin.smpt.configurations') }}"
        ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">SMTP Configuration</span></a><!--end:Menu link--></div><!--end:Menu item-->
        <!--end:Menu item-->

       
    
    </div><!--end:Menu sub-->
</div><!--end:Menu item-->




  <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.contacts.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Contact Information</span></a><!--end:Menu link--></div><!--end:Menu item-->
  
  
    <div class="menu-item "><!--begin:Menu link--><a class="menu-link " href="{{ route('admin.campaigns.index') }}" ><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Email Campaigns</span></a><!--end:Menu link--></div><!--end:Menu item-->
    
       
        <div data-kt-menu-trigger="click" class="menu-item menu-accordion ">
    <!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu"> Invoice Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
      
        <!--end:Menu item--><!--begin:Menu item-->
        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/create/custom/invoice')) ? 'active' : '' }}" href="{{route('admin.create.custom.invoice')}}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Create New Invoice
                    </span></a><!--end:Menu link--></div><!--end:Menu item--><!--end:Menu item-->
                    
                    <!--end:Menu item--><!--begin:Menu item-->
        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/invoices')) ? 'active' : '' }}" href="{{ route('admin.invoices.index') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu"> Invoices
                    </span></a><!--end:Menu link--></div><!--end:Menu item--><!--end:Menu item-->
                    
       
                    
    </div><!--end:Menu sub-->
</div><!--end:Menu item-->

                 
            </div><!--end:Menu sub-->
        </div><!--end:Menu item-->
        
     
        
      

<!--begin:Menu item-->
        <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-circle fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">
            <a class="menu-link ps-0 custom-menu {{ (request()->is('admin/show/profile')) ? 'active' : '' }}" href="{{ route('admin.show.profile') }}">Your
                        Profile</a></span></span><!--end:Menu link--></div>
        <!--end:Menu item-->
        
    </div>
    <!--end::Menu-->
</div>