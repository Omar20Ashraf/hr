<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <div class="media-body">
                        <span class="media-heading text-semibold">
                            {{ Auth::user()->name }}
                        </span>
                        <div class="text-size-mini text-muted">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->




        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <br><br>
                <ul class="navigation navigation-main navigation-accordion">

                    {{-- start Home --}}
                    <li >
                        <a href="#" ><i class="icon-home"></i> <span>Home</span></a>

                        <ul>
                            <li><a href="{{url('/admin')}}">Home</a></li>
                        </ul>
                    </li>
                    {{-- end Home --}}

                    {{-- start Admins --}}
                    @if(Auth::user()->role == 1)
                        <li>
                            <a href="#" ><i class="icon-user"></i>
                                <span>Admins</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('admin.registerAdmins.index') }}">
                                        Admins
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    {{-- end Admins  --}}

                    {{-- start Settings  --}}
                    <li>
                        <a href="#" ><i class="icon-wrench"></i>
                            <span>Settings</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ url('admin/showSettings/1') }}">
                                    Website Information
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Settings --}}


                    {{-- start Sliders  --}}
                    <li>
                        <a href="#" ><i class="icon-location4"></i>
                            <span>Sliders</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.sliders.index') }}">
                                    Sliders
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Sliders --}}

                    {{-- start Names  --}}
                    <li>
                        <a href="#" ><i class="icon-info3"></i>
                            <span>Names</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.globalStaticNames') }}">
                                    Global Names
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.carierStaticNames') }}">
                                    Carier Names
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.mediaStaticNames') }}">
                                    Media Names
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.studyStaticNames') }}">
                                    Study Names
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Names --}}

                    {{-- start home sliders  --}}
                    <li>
                        <a href="#" ><i class="fa fa-image"></i>
                            <span>Home Sliders</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.homeSlider','firstSlider') }}">
                                    First Slider
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.homeSlider','secondSlider') }}">
                                    Second Slider
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.homeSlider','thirdSlider') }}">
                                    Third Slider
                                </a>
                            </li>

                        </ul>
                    </li>
                    {{-- end home sliders --}}

                    {{-- start Militray Service  --}}
                    <li>
                        <a href="#" ><i class="icon-wrench"></i>
                            <span>Militray Service</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('admin.militrayService.index') }}">
                                    Militray Service
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Militray Service --}}

                    {{-- start Carier  --}}
                    <li>
                        <a href="#" ><i class="icon-briefcase"></i>
                            <span>Icarier</span>
                        </a>
                        <ul>
                            <ul class="navigation navigation-main navigation-accordion">
                            <li>
                                <a href="#" ><i class="icon-briefcase"></i>
                                    <span>Companies</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.jobCompanies.index') }}">
                                            All Companies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.carierCompanyRequests') }}">
                                            Requests
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            </ul>

                            <ul class="navigation navigation-main navigation-accordion">
                                <li>
                                    <a href="#" ><i class="icon-briefcase"></i>
                                        <span>Employees</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin.carierEmployees.index') }}">
                                                All Employees
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.carierEmployeesRequests') }}">
                                                Requests
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </ul>
                    </li>
                    {{-- end Carier --}}

                    {{-- start Media  --}}
                    <li>
                        <a href="#" ><i class="icon-yelp"></i>
                            <span>IMedia</span>
                        </a>
                        <ul>
                            <ul class="navigation navigation-main navigation-accordion">
                            <li>
                                <a href="#" ><i class="icon-yelp"></i>
                                    <span>Companies</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.mediaCompanines.index') }}">
                                            All Companies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.mediaCompanyRequests') }}">
                                            Requests
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            </ul>

                            <ul class="navigation navigation-main navigation-accordion">
                                <li>
                                    <a href="#" ><i class="icon-yelp"></i>
                                        <span>Employees</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin.mediaEmployees.index') }}">
                                                All Employees
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.mediaEmployeesRequests') }}">
                                                Requests
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </ul>
                    </li>
                    {{-- end Media --}}

                    {{-- start Study  --}}
                    <li>
                        <a href="#" ><i class="icon-book"></i>
                            <span>IStudy</span>
                        </a>
                        <ul>
                            <ul class="navigation navigation-main navigation-accordion">
                            <li>
                                <a href="#" ><i class="icon-book"></i>
                                    <span>Companies</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('admin.studyCompanines.index') }}">
                                            All Companies
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.studyCompanyRequests') }}">
                                            Requests
                                        </a>
                                    </li>
                                </ul>

                            </li>
                            </ul>

                            <ul class="navigation navigation-main navigation-accordion">
                                <li>
                                    <a href="#" ><i class="icon-book"></i>
                                        <span>Employees</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('admin.studyEmployees.index') }}">
                                                All Employees
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.studyEmployeesRequests') }}">
                                                Requests
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </ul>
                    </li>
                    {{-- end Study --}}

                    {{-- start Contact Us  --}}
                    <li>
                        <a href="#" ><i class="fa fa-envelope"></i>
                            <span>Contact Us</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('admin.contact.index')}}">
                                    Contact Us
                                </a>
                            </li>

                            <li>
                                <a href="{{route('admin.contactMessage')}}">
                                    Contact Us Messages
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Contact Us --}}

                    {{-- start About  --}}
                    <li>
                        <a href="#" ><i class="fa fa-globe"></i>
                            <span>About</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('admin.about.index')}}">
                                    About
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end About --}}

                    {{-- start Services  --}}
                    <li>
                        <a href="#" ><i class="fa fa-server"></i>
                            <span>Services</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('admin.service.index')}}">
                                    Services
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Services --}}
                    
                    {{-- start Select Images  --}}
                    <li>
                        <a href="#" ><i class="fa fa-image"></i>
                            <span>Select Images</span>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('admin.selectImages.index')}}">
                                    Select Images
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{-- end Select Images --}}
                    
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
