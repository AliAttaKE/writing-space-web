<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="sidebar-user-panel active">
                    <div class="user-panel">
                        <div class=" image">
                            <img src="{{asset('management/images/usrbig.jpg')}}" class="img-circle user-img-circle"
                                 alt="User Image" />
                        </div>
                    </div>
                    <div class="profile-usertitle">
{{--                        <div class="sidebar-userpic-name">{{App\Helpers\Sc::getUserProfile()->name}} </div>--}}
{{--                        <div class="profile-usertitle-job ">{{App\Helpers\Sc::getUserProfile()->user_type}} </div>--}}
                        <div> Customer</div>

                        <div> Muhammad Yasir</div>
                    </div>
                </li>
                <li class="">
                    <a href="{{url('customer_dashboard')}}" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('courses')}}">
                        <i class="fas fa-user"></i>
                        <span>My courses</span>
                    </a>
                </li>

                <li>
                    <a href="{{url('createOrder_customer')}}" >
                        <i class="fas fa-store"></i>
                        <span>Create Order</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Order_status')}}" >
                        <i class="fas fa-store"></i>
                        <span> Assigned </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Order_status')}}" >
                        <i class="fas fa-book"></i>
                        <span> In-progress  </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Order_status')}}" >
                        <i class="fas fa-store"></i>
                        <span>Completed </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Order_status')}}" >
                        <i class="fas fa-store"></i>
                        <span>Dispute </span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Order_status')}}" >
                        <i class="fas fa-store"></i>
                        <span> Cancelled </span>
                    </a>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-store"></i>
                        <span>Subscription </span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href=" {{url('pages_request')}}">
                                <span>Upgrade</span>
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
                            <a href=" {{url('pages_request')}}">
                                <span>Page Request</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('/deadline_ext')}}">
                                <span>Deadline Extension</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a >
                        <i class="fas fa-user"></i>
                        <span>Live Chat</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('referal')}}" >
                        <i class="fas fa-user"></i>
                        <span>Earn</span>
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
