        <!-- MENU SECTION -->
        <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{ asset('assets') }}/admin/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> {{ Auth::user()->name }}</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel">
                    <a href="/admin" >
                        <i class="icon-home"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                {{-- <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-edit"> </i> Reservations     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">3</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="button.html"><i class="icon-angle-right"></i> Pending Reservations </a></li>
                         <li class=""><a href="icon.html"><i class="icon-angle-right"></i> Accepted Reservations </a></li>
                        <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Cancelled Reservations </a></li>
                        
                    </ul>
                </li> --}}

                <li class="panel">
                    <a href="/admin/reservation" >
                        <i class="icon-edit"></i> Reservations
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/category" >
                        <i class="icon-th-large"></i> Categories
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/car" >
                        <i class="icon-map-marker"></i> Cars
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/user" >
                        <i class="icon-group"></i> Users
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/profile" >
                        <i class="icon-user"></i> Profile
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/comment" >
                        <i class="icon-comment"></i> Comments
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/image" >
                        <i class="icon-picture"></i> Images
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="{{ route('admin.faq.index') }}" >
                        <i class="icon-info"></i> FAQ
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="{{ route('admin.message.index') }}" >
                        <i class="icon-envelope"></i> Messages
	   
                       
                    </a>                   
                </li>

                <li class="panel">
                    <a href="/admin/setting" >
                        <i class="icon-cog"></i> Settings
	   
                       
                    </a>                   
                </li>




            </ul>

        </div>
        <!--END MENU SECTION -->