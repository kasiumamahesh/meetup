@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user fa-users text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Users</div>
                        <div class="stat-digit text-white">{{$user ?$user:0}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-tags text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Categories</div>
                        <div class="stat-digit text-white">{{$catg ?$catg:0}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-users text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Groups</div>
                        <div class="stat-digit text-white">{{$gp ?$gp:0}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-calendar text-white bordewhite"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">New Events</div>
                        <div class="stat-digit text-white">{{$events?$events:0}} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <strong class="card-title mb-3">Profile Card</strong>
            </div>
            <div class="card-body">
                <div class="clearfix">&nbsp;</div>
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="{{asset('storage/'.$profile->photo)}}" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1">{{$profile->name}}</h5>
                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$profile->location}}</div>
                </div>
                    <div class="clearfix">&nbsp;</div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <a href="{{url('/catlist')}}" class="btn-link float-right">See all</a>
                <strong class="card-title">Categories</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    
                    <table id="bootstrap-data-table" class="table table-bordered table-striped">
                        <tbody>
                            @foreach($cat5 as $rec)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$rec->cat_name}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <a href="{{url('/mail')}}" class="btn-link float-right">See all</a>
                <strong class="card-title">Mails</strong>
            </div>
            <div class="card-body">
                @foreach($ins as $in)
                    <section>
                        <span class="float-left mr-2">
                            <img alt="avatar" src="{{asset('storage/'.$in->photo)}}" height="50px" width="50px">
                        </span>
                        <span class="">
                            <p><small class="float-right">{{$in->time}}</small></p>
                            <span class="float-left">{{$in->name}}</span>
                            <br>
                            <p class="">{{$in->subject}}</p>
                        </span>
                    </section>
                    @endforeach

                  <!--   <hr>
                    <section>
                        <span class="float-left mr-2"><img alt="avatar" src="images/avatar/3.jpg"></span>
                        <span class="">
                            <span class="float-left">Cheryl Wheeler</span>
                            <p><small class="float-right ">10 minutes ago</small></p>
                            <br>
                            <p class="">Hello, this is an example msg</p>
                        </span>
                    </section>
                    <hr>
                    <section>
                        <span class="float-left mr-2"><img alt="avatar" src="images/avatar/4.jpg"></span>
                        <span class="">
                            <span class="float-left">Rachel Santos</span>
                            <p><small class="float-right">15 minutes ago</small></p>
                            <br>
                            <p class="">Lorem ipsum dolor sit amet</p>
                        </span>
                    </section> -->
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
                
    </div>



</div> <!-- .content -->
<!-- modal -->
  
<div class="modal fade" id="m12" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p id='para'></p>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>




@include('admin.footer')