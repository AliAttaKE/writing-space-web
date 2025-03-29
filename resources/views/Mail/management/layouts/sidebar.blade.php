<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="sidebar-user-panel active">
                    <div class="contact-photo">
              @if(auth()->user()->erp_image == null)
                    <div class="user-panel">
                        <div class=" image">
                          <a href="{{url('myprofile')}}" class="p-0 mr-5" style="width:80px;" >
                              <img  src="{{asset('management/images/profile.png')}}" class="img-circle user-img-circle" alt="User Image"/>
                          </a>
                        </div>  
                    </div>
                        @else
                        <div class="user-panel">
                            <div class=" image">
                                <a href="{{url('myprofile')}}" class="p-0 mr-5" style="width:80px;" >
                                    <img  src="{{asset('image/announcement'.'/'.auth()->user()->erp_image)}}" class="img-circle user-img-circle" alt="User Image"/>
                                </a>
                            </div>
                        </div>
                        @endif
                    <div class="profile-usertitle ml-4">
                        <div class="sidebar-userpic-name">{{App\Helpers\Sc::getUserProfile()->name}} </div>
                        <div class="profile-usertitle-job ">{{App\Helpers\Sc::getUserProfile()->user_type}} </div>
                    </div>
                </li>
                <li class="">
                    <a href="{{url('home')}}" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <span>Quiz</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('quiz')}}">
                                <span>Quiz</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('assignquiz')}}">
                                <span>Assign Quiz</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('checkquiz')}}">
                                <span>Check Results</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-store"></i>
                        <span>Manage Order</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('create-order')}}">
                                <span>Create Order</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('new-order')}}">
                                <span>New Order ({{App\Helpers\Qs::neworders(1)}})</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('inprogress-order')}}">
                                <span>In Progress Order ({{App\Helpers\Qs::neworders(2)}})</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('admin-complete-orders')}}">
                                <span>Completed Order ({{App\Helpers\Qs::neworders(3)}})</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href=" {{url('revesion_admin')}}">--}}
{{--                                <span>Revision</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href=" {{url('admin-other-orders')}}">
                                <span>Others</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-store"></i>
                        <span>Requests </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('Request-reason')}}">
                                <span>Request Reason</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('request-page')}}">
                                <span>Page Request</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('/deadline')}}">
                                <span>Deadline Extension</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-cog"></i>
                        <span>Workflow</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('workflow')}}">
                                <span>Roles</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('commission')}}">
                                <span>Commission</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('teams')}}">
                                <span> Teams</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-cog"></i>
                        <span>Users</span>
                    </a>
                    <ul class="ml-menu">

                        <li>
                            <a href=" {{url('users')}}">
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('role-Assign')}}">
                                <span>Role Assign</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-cog"></i>
                        <span>Order Settings</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('academic_level')}}">
                                <span>Academic Level</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('paper_type')}}">
                                <span>Paper Type</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('subject_type')}}">
                                <span>Subject Type</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('paper_format')}}">
                                <span>Paper Format</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('language_style')}}">
                                <span>Language Style</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('citation_style')}}">
                                <span>Citation Style</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('document_type')}}">
                                <span>Document Type</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-cog"></i>
                        <span>Message</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('monitor-message')}}">
                                <span>Monitor Messages</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="{{url('manage-files')}}" >
                        <i class="fas fa-user"></i>
                        <span>Manage Files</span>
                    </a>
                </li>

                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-store"></i>
                        <span>Announcement</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('announcement')}}">
                                <span>Create Announcement</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('all-announcement')}}">
                                <span>All announcement</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin-account')}}" >
                        <i class="fas fa-user"></i>
                        <span>Accounting</span>
                    </a>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-cog"></i>
                        <span>Products</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('subscription')}}">
                                <span>Subscription</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('products')}}">
                                <span>Products</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('categories')}}">
                                <span> Categories</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="{{url('customers')}}" >
                        <i class="fas fa-user"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myprofile')}}" >
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->

    </aside>
    <!-- #END# Left Sidebar -->
    <!-- Right Sidebar -->
    <aside id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs tab-nav-right" role="tablist">
            <li role="presentation">
                <a href="#skins" data-toggle="tab" class="active">SKINS</a>
            </li>
{{--            <li role="presentation">--}}
{{--                <a href="#settings" data-toggle="tab">SETTINGS</a>--}}
{{--            </li>--}}
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">

                    <div class="rightSetting">
                        <p>SIDEBAR MENU COLORS</p>
                        <button type="button"
                                class="btn btn-sidebar-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-sidebar-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>THEME COLORS</p>
                        <button type="button"
                                class="btn btn-theme-light btn-border-radius p-l-20 p-r-20">Light</button>
                        <button type="button"
                                class="btn btn-theme-dark btn-default btn-border-radius p-l-20 p-r-20">Dark</button>
                    </div>
                    <div class="rightSetting">
                        <p>SKINS</p>
                        <ul class="demo-choose-skin choose-theme list-unstyled">
                            <li data-theme="black" class="actived">
                                <div class="black-theme"></div>
                            </li>
                            <li data-theme="white">
                                <div class="white-theme white-theme-border"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple-theme"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue-theme"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan-theme"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green-theme"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange-theme"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane stretchRight" id="settings">
                <div class="demo-settings">
                    <p>GENERAL SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Report Panel Usage</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-green"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Email Redirect</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-blue"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>SYSTEM SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Notifications</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-purple"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Auto Updates</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-cyan"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <p>ACCOUNT SETTINGS</p>
                    <ul class="setting-list">
                        <li>
                            <span>Offline</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox" checked>
                                    <span class="lever switch-col-red"></span>
                                </label>
                            </div>
                        </li>
                        <li>
                            <span>Location Permission</span>
                            <div class="switch">
                                <label>
                                    <input type="checkbox">
                                    <span class="lever switch-col-lime"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</div>
