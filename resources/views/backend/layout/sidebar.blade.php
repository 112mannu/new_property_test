<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="page-sidebar">
        <div class="main-header-left d-none d-lg-block">
            <div class="logo-wrapper">
                <a href="{{ route('admin.dashboard') }}">
                    <!-- <img class="blur-up lazyloaded" src="assets/img/logo.png" alt=""> -->

                    <h3>Nagar Sahayak</h3>
                </a>
            </div>
        </div>
        <div class="sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
                <div>
                    <img class="img-60 rounded-circle lazyloaded blur-up" src="/images/{{ auth()->user()->profile }}" alt="#">
                </div>
                <h6 class="mt-3 f-14">{{ auth()->user()->name }}</h6>
                <p>Role : <b>
                        @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                        @endforeach
                    </b> </p>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="sidebar-header active" href="{{ route('admin.dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg><span>Dashboard</span></a>
                </li>

                @canany('User access','User add','User edit','User delete')
                <li>
                    <a class="sidebar-header" href="{{ route('admin.users.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span>User</span><i class="fa fa-angle-right pull-right"></i></a>

                        <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-circle"></i>User list</a></li>
                        <li><a href="{{ route('admin.users.create') }}"><i class="fa fa-circle"></i>New User</a></li>
                    </ul>
                </li>
                @endcanany

                @canany('Staff access','Staff add','Staff edit','Staff delete')
                <li>
                    <a class="sidebar-header" href="{{ route('admin.staff.index') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg><span>Employee</span><i class="fa fa-angle-right pull-right"></i></a>

                        <ul class="sidebar-submenu">
                        <li><a href="{{ route('admin.staff.index') }}"><i class="fa fa-circle"></i>Employee list</a></li>
                        @canany('Staff add')
                        <li><a href="{{ route('admin.staff.create') }}"><i class="fa fa-circle"></i>Add Employee</a></li>
                        @endcanany
                    </ul>
                </li>

 @endcanany
                <li>
                    <a class="sidebar-header" href="{{route('admin.municipal.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg> <span>Survey Form</span><i class="fa fa-angle-right pull-right"></i></a>
                    <!-- <ul class="sidebar-submenu">
                        <li><a href="service.html"><i class="fa fa-circle"></i>Service list</a>
                        </li>
                    </ul> -->
                </li>

                @canany('UlbType access','UlbType add','UlbType edit','UlbType delete')

                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg> <span>ULB Type
                        </span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                    @can('UlbType access')
                        <li><a href="{{route('admin.ulbtype.index')}}"><i class="fa fa-circle"></i>ULB Type list</a>
                        </li>
                        @endcan

                        @can('UlbType create')
                        <li><a href="{{route('admin.ulbtype.create')}}"><i class="fa fa-circle"></i>Add ULB Type</a>
                        </li>
                        @endcan

                    </ul>
                </li>
@endcanany



@canany('Ulbbodies access','Ulbbodies add','Ulbbodies edit','Ulbbodies delete')

<li>
    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
            <line x1="8" y1="6" x2="21" y2="6"></line>
            <line x1="8" y1="12" x2="21" y2="12"></line>
            <line x1="8" y1="18" x2="21" y2="18"></line>
            <line x1="3" y1="6" x2="3" y2="6"></line>
            <line x1="3" y1="12" x2="3" y2="12"></line>
            <line x1="3" y1="18" x2="3" y2="18"></line>
        </svg> <span>ULB Bodies
        </span><i class="fa fa-angle-right pull-right"></i></a>
    <ul class="sidebar-submenu">
    @can('Ulbbodies access')
        <li><a href="{{route('admin.ulbodies.index')}}"><i class="fa fa-circle"></i>ULB Bodies list</a>
        </li>
        @endcan

        @can('Ulbbodies create')
        <li><a href="{{route('admin.ulbodies.create')}}"><i class="fa fa-circle"></i>Add ULB  Bodies</a>
        </li>
        @endcan

    </ul>
</li>
@endcanany

@can('ULB Ward access')
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg> <span>ULB ward</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('admin.ulbward.index')}}"><i class="fa fa-circle"></i>ULB ward list</a>
                        </li>
                        @can('ULB Ward create')
                        <li><a href="{{route('admin.ulbward.create')}}"><i class="fa fa-circle"></i>New ULB ward</a>
                        </li>
                        @endcanany
                    </ul>
                </li>

                @endcanany

                @canany('State access','State add','State edit','State delete')
              
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg> <span>State</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('admin.state.index')}}"><i class="fa fa-circle"></i>State list</a></li>
                        @canany('State add')
                        <li><a href="{{route('admin.state.create')}}"><i class="fa fa-circle"></i>Add State</a></li>
                        @endcanany

                    </ul>
                </li>

                @endcanany

                @can ('District access')
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg> <span>District</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">


                        <li><a href="{{route('admin.district.index')}}"><i class="fa fa-circle"></i>District list</a>
                        </li>
                        @can ('District add')
                        <li><a href="{{route('admin.district.create')}}"><i class="fa fa-circle"></i>Add New District</a>
                        </li>
                        @endcanany

                    </ul>
                </li>

                @endcanany
                
                @can ('ULB access')
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg> <span>ULB</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">

                        <li><a href="{{route('admin.ulb.index')}}"><i class="fa fa-circle"></i>ULB list</a> </li>
                        @can ('ULB add')
                        <li><a href="{{route('admin.ulb.create')}}"><i class="fa fa-circle"></i>Add New ULB </a> </li>
                        @endcanany
                    </ul>
                </li>

                @endcanany

                
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg> <span>wallets</span><i class="fa fa-angle-right pull-right"></i></a>
                                                
                    <ul class="sidebar-submenu">

                        <li><a href="{{route('admin.wallet.create')}}"><i class="fa fa-circle"></i>Request Fund</a> </li>
                        
                        <li><a href="{{route('admin.wallet.index')}}"><i class="fa fa-circle"></i> Balance</a> </li>
                     
                    </ul>   
                </li>


                 <!------
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg> <span>Check In Management</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="check.html"><i class="fa fa-circle"></i>Check list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                            <polyline points="20 12 20 22 4 22 4 12"></polyline>
                            <rect x="2" y="7" width="20" height="5"></rect>
                            <line x1="12" y1="22" x2="12" y2="7"></line>
                            <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                            <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                        </svg> <span>Offer Management
                        </span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="offer.html"><i class="fa fa-circle"></i>Offer list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg> <span>Search Management
                        </span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="html"><i class="fa fa-circle"></i>Search list</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg> <span>Hotel Booking Management</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="hotel.html"><i class="fa fa-circle"></i>Hotel List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg> <span>Travel Blog</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="blog.html"><i class="fa fa-circle"></i>Blog list</a>
                        </li>
                    </ul>
                </li>
              
                <li>
                    <a class="sidebar-header" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg> <span>Content Management</span><i class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="cms.html"><i class="fa fa-circle"></i>Content List</a>
                        </li>
                    </ul>
                </li>
                ------------>

                <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                @method('POST')
                <li><a class="sidebar-header" href="{{route('admin.logout')}}"  onclick="event.preventDefault();
                                                this.closest('form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg><span>Logout</span></a>
                </li>

                </form>
            </ul> 
        </div>
    </div>