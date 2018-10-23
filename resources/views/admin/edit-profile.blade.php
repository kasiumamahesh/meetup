@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')
@if(session()->has('profileerror'))
    
    <div   id='profileerror' data-profileerror="{{ session()->get('profileerror')}}"></div>
@endif 

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Categories</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{url('/profile')}}" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Edit Profile</strong>
                    </div>
                    <div class="card-body">
                        <form  id="editpform" method="post" action="{{url('/update')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" id="username" name="username" value="{{$user->name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email Id</label>
                                        <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control">
                                    </div>
                                </div>
                               <!--  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <input type="password" id="password" name="password" id="" value="{{$user->password}}" class="form-control">
                                    </div>
                                </div> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone Number</label>
                                        <input type="text" id="mobile" name="mobile" id="" value="{{$user->mobileno}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Location</label>
                                        <input type="text" id="location"  name="location" value="{{$user->location}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Profile Pic</label>
                                        <input type="file" name='photo' id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->

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