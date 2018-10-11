@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Events</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="active">Events</li>
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
                        <strong class="card-title">Events List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Event Name</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>No.of Seats</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($events as $event)
                 
                 <?php 
                  $temp = explode(' ',$event->event_date);
                ?>
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$event->event_name}}</td>
                                    <td>{{$event->event_name}}</td>
                                   <td>{{$temp[0]}}</td>
                                   <td>  {{$temp['1']}}</td>
                                    <td>{{$event->no_tickets}}</td>
                                    <td><span>Rs.</span>{{$event->ticket_price}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                        <a href="{{url('/delevent/'.$event->id)}}"  <i class="fa fa-trash-o"></i> Delete <a>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->



@include('admin.footer')