<?php
$orderFiles = array('2190302.php', '2194282.php');

// Concatenate the file names with commas in between
$combinedLinks = implode(',', $orderFiles);

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1);
?>

<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
        <!--begin::Scroll wrapper-->
        <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <?php $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/') + 1); ?>
                <!--begin:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'admin-dashboard.php' ? 'active' : '' ?>" href="admin-dashboard.php">Admin Dashboard</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= $page == 'create-order.php' || $page == 'new-order.php' || $page == 'in-progress-order.php'|| $page == 'revisions.php' || $page == 'completed-order.php'|| $page == 'delivered.php' || $page == 'other.php' ? 'active' : '' ?>"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-duotone ki-purchase fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Order Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'create-order.php' ? 'active' : '' ?>" href="create-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Place New Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'new-order.php' ? 'active' : '' ?>" href="new-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">New Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item "><!--begin:Menu link--><a class="menu-link <?= $page == 'in-progress-order.php' ? 'active' : '' ?>" href="in-progress-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">In-Progress Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'revisions.php' ? 'active' : '' ?>" href="revisions.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Revisions</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'completed-order.php' ? 'active' : '' ?>" href="completed-order.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Completed</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'delivered.php' ? 'active' : '' ?>" href="delivered.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Delivered</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'other.php' ? 'active' : '' ?>" href="other.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Others</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'file-management.php' ? 'active' : '' ?>" href="file-management.php">File Management</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion py-0 ps-0"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'message-management.php' ? 'active' : '' ?>" href="message-management.php">Message Management</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-security-user fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'email-event.php' ? 'active' : '' ?>" href="email-event.php">Email Automation</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-map fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'subscription.php' ? 'active' : '' ?>" href="subscription.php">Subscription Management</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= $page == 'customer-management.php' || $page == 'customer-listing.php'  ? 'active' : '' ?>"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-user fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i></span><span class="menu-title custom-menu">Customers Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'customer-management.php' ? 'active' : '' ?>" href="customer-management.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Contact Customer</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'customer-listing.php' ? 'active' : '' ?>" href="customer-listing.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Customer Data Table</span></a><!--end:Menu link--></div><!--end:Menu item-->
                    </div><!--end:Menu sub-->
                </div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-credit-cart fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'invoice-manager.php' ? 'active' : '' ?>" href="invoice-manager.php">Invoice Management</a></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= $page == 'user-activity-log.php' || $page == 'roles.php' || $page == 'permission.php' ? 'active' : '' ?>"><!--begin:Menu link--><span class="menu-link "><span class="menu-icon"><i class="ki-duotone ki-abstract-28 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title custom-menu">Users Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link {{ (request()->is('admin/user/activity/log')) ? 'active' : '' }}" href="{{ route('admin.user.activity.log') }}"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">User Activity</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link <?= $page == 'roles.php' ? 'active' : '' ?>" href="roles.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Roles</span></a><!--end:Menu link--></div><!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item "><!--begin:Menu link--><a class="menu-link <?= $page == 'permission.php' ? 'active' : '' ?>" href="permission.php"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title custom-menu">Permission</span></a><!--end:Menu link--></div><!--end:Menu item-->

                    </div><!--end:Menu sub-->
                    
                </div><!--end:Menu item-->
                
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-abstract-26 fs-2"><span class="path1"></span><span class="path2"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu <?= $page == 'library-access.php' ? 'active' : '' ?>" href="library-access.php">Library Management</a></span></span><!--end:Menu link-->
                </div><!--end:Menu item--><!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-circle fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title">
                    <a class="menu-link ps-0 custom-menu" href="{{ route('admin.show.profile') }}">
                        Your Profile
                    </a>
                </span></span><!--end:Menu link--></div><!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item menu-accordion"><!--begin:Menu link--><span class="menu-link py-0"><span class="menu-icon"><i class="ki-duotone ki-profile-circle fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i></span><span class="menu-title"><a class="menu-link ps-0 custom-menu" href="login.php">Log Out</a></span></span><!--end:Menu link--></div><!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Scroll wrapper-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::sidebar menu-->