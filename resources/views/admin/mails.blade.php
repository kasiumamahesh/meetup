@include('admin.header')
@include('admin.sidebar')
@include('admin.header-1')

<!--  error in fields while sending -->
@if(session()->has('msg1'))

    
    <div   id='msg1' data-msg1="{{ session()->get('msg1')}}"></div>
@endif 
<!-- move to trash -->
@if(session()->has('trash'))
    
    <div   id='trash' data-trash="{{ session()->get('trash')}}"></div>
@endif 
<!-- mail send suceess fully when composing -->
@if(session()->has('fileupload'))
    
    <div   id='fileupload' data-fileupload="{{ session()->get('fileupload')}}"></div>
@endif 
<!-- mail send succefully when composing -->
@if(session()->has('mailsent'))
    
    <div   id='mailsent' data-mailsent="{{ session()->get('mailsent')}}"></div>
@endif 
<!-- message permently deleted -->
@if(session()->has('msgdelete'))
    
    <div   id='msgdelete' data-msgdelete="{{ session()->get('msgdelete')}}"></div>
@endif 
<style>
.btn-upload {
  position: relative;
  overflow: hidden;
}
.input-upload {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
</style>
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
                <section class="card">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#mail-inbox" role="tab" aria-selected="true">    
                                <i class="fa fa-envelope-o"></i> Mail Inbox
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#compose-mail" role="tab" aria-selected="false"> 
                                <i class="fa fa-comments-o"></i> Compose Mail 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#sent-mails" role="tab" aria-selected="true">    
                                <i class="fa fa-envelope-o"></i> Sent Mails 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#mail-trash" role="tab" aria-selected="false"> 
                                <i class="fa fa-trash-o"></i> Trash
                            </a>
                        </li>
                    </ul>
                </section>
                
                <div class="tab-content">
                    
                    <div id="mail-inbox" class="tab-pane fade show active" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Inbox</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <thead>
                                            <tr>
                                                <td>User Name</td>
                                                <td>Message</td>
                                                <td>Time</td>
                                                <td>Action</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ins as $row)
                                            <tr> 

                                                <td>{{$row->name}}</a></td>
                                               <td> <a href="{{url('/readmail/'.$row->id)}}"><b>{{$row->subject}}--{{$row->message}}
                                                <a></td>
                                                <td>{{$row->time}}</td>
                                                <td>
                                                    <a href="{{url('/replymail/'.$row->id)}}" class="btn btn-sm social btn-primary">
                                                        <i class="fa fa-reply"></i>
                                                    </a>
                                                    <a href="{{url('/trash/'.$row->id)}}" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="compose-mail" class="tab-pane fade" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Compose</strong>
                            </div>
                            <div class="card-body">
                                <form  id="composeform" method="post" action="{{url('/sendmail')}}" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email"  name='email' id="email" value="" placeholder="To:" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" id="" name='subject' value="" placeholder="Subject:" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea rows="10" name='message' class="form-control">Message</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <input type='file' name='uploads[]'  multiple>
                                                    <i class="fa fa-paperclip"></i> Attachment
                                                
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                                <button type="submit" class="btn btn-sm btn-primary float-right">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div id="sent-mails" class="tab-pane fade show active" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sent Mails</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <tbody>
                                            @foreach($outs as $out)
                                            <tr>
                                                <td>{{$out->recevier_mail}}</a></td>
                                                <td><a href="{{url('/readmail/'.$out->id)}}"><b>{{$out->subject}}</b> -<?php $msg=substr($out->message, 0,12);echo $msg;  ?> ....</a>
                                                </td>
                                                <td>{{$out->time}}</td>
                                                <td>
                                                    <a href="{{url('/trash/'.$out->id)}}" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>28 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>11 hours ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="mail-trash" class="tab-pane fade" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Trash</strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table" class="table">
                                        <tbody>
                                            @foreach($dels as $del)
                                            <tr>
                                                <td>{{$del->sender_mail}}</td>
                                                 <td><a href="{{url('/readmail/'.$del->id)}}"><b>{{$del->subject}}</b> -<?php $msg=substr($del->message, 0,12);echo $msg;  ?> ....</a>
                                                </td>
                                                <td>{{$del->time}}</td>
                                                <td>
                                                    <a href="{{url('/pdelmsg/'.$del->id)}}" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>28 mins ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="read-mail.php">Alexander Pierce</a></td>
                                                <td><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...
                                                </td>
                                                <td>11 hours ago</td>
                                                <td>
                                                    <a href="#" class="btn btn-sm social btn-danger">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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