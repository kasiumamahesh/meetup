@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')
@if(session()->has('psuccess'))
    
    <div   id='psuccess' data-psuccess="{{ session()->get('psuccess')}}"></div>
@endif 
@if(session()->has('psuccess2'))
    
    <div   id='psuccess2' data-psuccess2="{{ session()->get('psuccess2')}}"></div>
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
                    <li class="active">My Profile</li>
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
                        <strong class="card-title mb-3">Profile</strong>
                        <a href="{{url('/editprofile')}}" class="btn btn-sm btn-info float-right">
                            <i class="fa fa-edit"></i> Edit Profile
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="{{asset('public/storage/'.$user->photo)}}" alt="Card image cap')}}">
                                    <h5 class="text-sm-center mt-2 mb-1">{{$user->name}}</h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table mb-0" style="border-left:1px dotted #ccc;">
                                    <tbody>
                                        <tr>
                                            <td>Email Id</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td>{{$user->password}}</td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Number</td>
                                            <td>{{$user->mobileno}}</td>
                                        </tr>

                                        
                                        <tr>
                                            <td>Location</td>
                                            <td>{{$user->location}}</td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
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