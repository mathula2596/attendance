<?php
  $user = Auth::user();
?>
<aside class="aside-container">
        <!-- START Sidebar (left)-->
        <div class="aside-inner">
          <nav class="sidebar">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
              <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse show" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img class="img-thumbnail rounded-circle" src="{{ asset('admin/img/user/02.jpg') }}" alt="Avatar" width="60" height="60">
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">Howdy, {{user()->name}}</span>
                                <span class="user-block-role">{{ user()->roles->implode('name', ', ') }}</span>
                            </div>
                        </div>
                    </div>
                </li>
              <!-- END user info-->
              <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span>Main Navigation</span>
                </li>
              <li class="{{ isActiveRoute('dashboard') }}">
                <a href="{{ route('dashboard') }}" title="Dashboard">
                  {{-- <div class="float-right badge badge-success">3</div> --}}
                  <em class="icon-speedometer"></em>
                  <span>Dashboard</span>
                </a>
              </li>
             
                  
              <li class="{{ isActiveRoute('attendance') }} ">
                <a href="{{ route('attendance.index') }}"title="Layouts">
                  <em class="icon-layers"></em>
                  <span>Attendance</span>
                </a>
              </li>
              @if ($user->hasRole("Admin"))  
                <li class="{{ isActiveRoute('user') }} {{ isActiveRoute('permission') }} {{ isActiveRoute('role') }}">
                  <a href="#user-control" title="User Control" data-toggle="collapse">
                    <em class="icon-chemistry"></em>
                    <span>User Control</span>
                  </a>
                  <ul class="sidebar-nav sidebar-subnav collapse {{ isActiveRoute('user') }} {{ isActiveRoute('permission') }} {{ isActiveRoute('role') }}" id="user-control">
                    <li class="sidebar-subnav-header">User Control</li>
                    <li class="{{ isActiveRoute('permission') }}">
                      <a href="{{route('permission.index')}}" title="Permission">
                        <span>Permission</span>
                      </a>
                    </li>

                    <li class="{{ isActiveRoute('role') }}">
                      <a href="{{route('role.index')}}" title="Role">
                        <span>Role</span>
                      </a>
                    </li>

                    <li class="{{ isActiveRoute('user') }}">
                      <a href="{{route('user.index')}}" title="User">
                        <span >User</span>
                      </a>
                    </li>
                  

                    
                  </ul>
                </li>
              @endif


               
        
            </ul>
            <!-- END sidebar nav-->
          </nav>
        </div>
        <!-- END Sidebar (left)-->
      </aside>