@include('admin.header')
@include('admin.sidebar')
@include('admin.header-1')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Mails</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="active">Mails</li>
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
                        <a href="{{url('/mail')}}" class="btn btn-sm btn-info">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <strong class="card-title">Read Mail</strong>
                        <button  id='printbutton' class="btn btn-sm btn-primary float-right">
                            <i class="fa fa-print"></i>
                        </button> 
                        <a href="{{url('/trash/'.$msg->id)}}" class="btn btn-sm btn-danger float-right mr-1">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9 mx-auto">
                                <h4 class="display-5 pb-2">Subject:{{$msg->subject}}</h4>
                                <small>From: {{ $msg->sender_mail}}</small>
                                <small class="float-right">{{$msg->time}}</small>
                                <hr>
                                <p>{{$msg->message}}</p>
                                <div class="file-links">
                                    @foreach($file as $row)
                                    <a href="{{url('/download/'.$row->id.'/'.$row->file_name)}}" style="text-decoration:underline;color:#2d2dce;margin-right:10px;">{{$row->file_name}}<i class="fa fa-download"></i></a>
                                     @endforeach
                                    <a href="#" style="text-decoration:underline;color:#2d2dce;margin-right:10px;">FileName <i class="fa fa-download"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div><!-- .content -->


 @include('admin.footer')