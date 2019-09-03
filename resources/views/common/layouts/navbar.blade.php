<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                    aria-expanded="false"><span class="hide-menu">Mark Jeckson</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap">--- PERSONAL</li>
            </li>
            @if (Session::get('loginrole')== 'PK')
            <li><a class="fcolor" href="/home"><i class="icon-home"></i>@lang('scheme/navbar.home')</a></li>
            <li> <a class="has-arrow fcolor" href="javascript:void(0)" aria-expanded="false"><i
                        class="ti-layout-grid2"></i><span class="hide-menu">@lang('scheme/navbar.new_claim')</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a class="fcolor2" href="/Scheme">@lang('scheme/navbar.new_claim')</a></li>

                    {{--<li> <a class="has-arrow fcolor2" href="javascript:void(0)" aria-expanded="false"><span
                                class="hide-menu">@lang('scheme/navbar.upload_doc')</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="/searchdocument">@lang('scheme/navbar.ob_profile')</a></li>
                            <li><a href="/searchdocument">@lang('scheme/navbar.claim_info')</a></li>

                        </ul>
                    </li>--}}
                </ul>
            </li>
            {{--<li><a href="/testmc"><i class="icon-home"></i>Test MC</a></li>
            <li><a href="/testuploaddoc"><i class="icon-home"></i>Test Upload Doc</a></li>--}}

            
            @elseif(Session::get('loginrole') == 'SCO')
            <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
            <li><a href="/home"><i class="icon-home"></i>@lang('scheme/navbar.home')</a></li>
            <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">@lang('scheme/navbar.new_claim')</span></a>
                <ul aria-expanded="false" class="collapse">
                   <li><a href="/noticetype">@lang('scheme/navbar.new_claim')</a></li>
        
                   <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">@lang('scheme/navbar.upload_doc')</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/searchdocument">@lang('scheme/navbar.ob_profile')</a></li>
                        <li><a href="/searchdocument">@lang('scheme/navbar.claim_info')</a></li>
        
                    </ul>
                    </li>
                </ul>
            </li>
            
        
        
        @elseif(Session::get('loginrole') == 'ADM')
        <li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>
        <li><a href="/home"><i class="icon-home"></i>@lang('scheme/navbar.home')</a></li>
        <li><a href="/homeAdmin"><i class="icon-home"></i>@lang('scheme/navbar.Administartive Task')</a></li> --}}
        @endif
        </ul>
        </nav>
        <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        