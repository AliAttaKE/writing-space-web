<div>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="sidebar-user-panel active">
                    @if(auth()->user()->erp_image == null)
                        <div class="user-panel">
                            <div class=" image">
                                <a href="{{url('myprofile-user')}}" class="p-0 mr-5" style="width:80px;" >
                                    <img  src="{{asset('management/images/profile.png')}}" class="img-circle user-img-circle" alt="User Image"/>
                                </a>
                            </div>
                        </div>
                    @else
                        <div class="user-panel">
                            <div class=" image">
                                <a href="{{url('myprofile-user')}}" class="p-0 mr-5" style="width:80px;" >
                                    <img  src="{{asset('image/announcement'.'/'.auth()->user()->erp_image)}}" class="img-circle user-img-circle" alt="User Image"/>
                                </a>
                            </div>
                        </div>
                    @endif
                    <div class="profile-usertitle">
                        <div class="sidebar-userpic-name">{{App\Helpers\Sc::getUserProfile()->name}} </div>
                        <div class="profile-usertitle-job ">{{App\Helpers\Sc::getUserProfile()->user_type}} </div>
                    </div>
                </li>
                <li class="">
                    <a href="{{url('user-dashboard')}}" >
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a  onClick="return false;" class="menu-toggle" href="" >
                        <i class="fas fa-question"></i>
                        <span>Quiz</span>
                    </a>
                    <ul class="ml-menu">
                        {{--<li>
                            <a href=" {{url('quiz')}}">
                                <i class="fas fa-question"></i>
                                <span>Quiz</span>
                            </a>
                        </li>
{{--                        --}}{{--<li>--}}
                        {{--                            <a href=" {{url('required_quiz')}}">--}}
                        {{--                                <span>Required Quiz</span>--}}
                        {{--                            </a>--}}
                        {{--                        </li>--}}
                        <li>
                            <a href=" {{url('compeleted_quiz')}}">
                                <span> Complete Quiz </span>
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
                            <a href=" {{url('availeble-Order')}}">
                                <span>Available Order</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('in-progress-orders')}}">
                                <span>In Progress Order ({{App\Helpers\Qs::workerorders(auth()->user()->id,1)}})</span>
                            </a>
                        </li>
                        <li>
                            <a href=" {{url('completed-order')}}">
                                <span>Completed Order ({{App\Helpers\Qs::workerorders(auth()->user()->id,null,1)}})</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href=" {{url('Available-order')}}">--}}
{{--                                <span>Available Orders</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li>
                            <a href=" {{url('others-orders')}}">
                                <span>Others Orders</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                {{--                    <a  onClick="return false;" class="menu-toggle" href="" >--}}
                {{--                        <i class="fas fa-cog"></i>--}}
                {{--                        <span>Manage Settings</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="ml-menu">--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('home')}}">--}}
                {{--                                <span>Workflow</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('home')}}">--}}
                {{--                                <span>Commission</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('home')}}">--}}
                {{--                                <span>User</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                {{--                    <a  onClick="return false;" class="menu-toggle" href="" >--}}
                {{--                        <i class="fas fa-cog"></i>--}}
                {{--                        <span>Order Settings</span>--}}
                {{--                    </a>--}}
                {{--                    <ul class="ml-menu">--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('academiclevel')}}">--}}
                {{--                                <span>Academic Level</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('papertype')}}">--}}
                {{--                                <span>Paper Type</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('subjecttype')}}">--}}
                {{--                                <span>Subject Type</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('paperformat')}}">--}}
                {{--                                <span>Paper Format</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('Citation_Style')}}">--}}
                {{--                                <span>Citation Style</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                        <li>--}}
                {{--                            <a href=" {{url('DocumentType')}}">--}}
                {{--                                <span>Document Type</span>--}}
                {{--                            </a>--}}
                {{--                        </li>--}}
                {{--                    </ul>--}}
                {{--                </li>--}}
                {{--                <li>--}}
                <li>
                    <a href="{{url('manage_message')}}" >
                        <i class="fas fa-bullhorn"></i>
                        <span>Manage Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('manage_files')}}" >
                        <i class="fas fa-bullhorn"></i>
                        <span>Manage Files</span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="{{url('Statistics')}}" >--}}
{{--                        <i class="fas fa-user"></i>--}}
{{--                        <span>Statistics</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{url('user-account')}}" >
                        <i class="fas fa-bullhorn"></i>
                        <span>Accounting</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('myprofile-user')}}" >
                        <i class="fas fa-user"></i>
                        <span>My Profile</span>
                    </a>
                </li>

            </ul>
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

        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active in active stretchLeft" id="skins">
                <div class="demo-skin">
                    <div class="rightSetting">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list list-unstyled m-t-20">
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Save
                                            History
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Auto
                                            Submit Issue
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <div class="form-check m-l-10">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" value="" checked> Show
                                            Status To All
                                            <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
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
                    <div class="rightSetting">
                        <p>Disk Space</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-cyan shadow-style width-per-45" role="progressbar"
                                     aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>26% remaining</small>
                                </span>
                        </div>
                    </div>
                    <div class="rightSetting">
                        <p>Server Load</p>
                        <div class="sidebar-progress">
                            <div class="progress m-t-20">
                                <div class="progress-bar l-bg-orange shadow-style width-per-63" role="progressbar"
                                     aria-valuenow="63" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="progress-description">
                                    <small>Highly Loaded</small>
                                </span>
                        </div>
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
