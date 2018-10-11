@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Payment List</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="active">Payments</li>
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
                        <strong class="card-title">Users Payment List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>User Id</th>
                                    <th>Email Id</th>
                                    <th>Created Date</th>
                                    <th>Group Name</th>
                                    <th>Amount Paid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$payment->name}}</td>
                                    <td>{{$payment->email}}</td>
                                    <td>{{$payment->date}}</td>
                                    <td>{{$payment->group_name}}</td>
                                    <td>{{$payment->amount}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                          <a href="{{url('/delpayment/'.$payment->id)}}" <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>2</td>
                                    <td>Leo Cartey</td>
                                    <td>carteyleo@gmail.com</td>
                                    <td>1-6-2018</td>
                                    <td>Passion about Fashion</td>
                                    <td>4000</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Messi King</td>
                                    <td>messitheking@yahoo.com</td>
                                    <td>14-5-2017</td>
                                    <td>Makes u Beautiful</td>
                                    <td>2400</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mosi Venom</td>
                                    <td>venomosi@yahoo.com</td>
                                    <td>7-3-2017</td>
                                    <td>The Entrepreneur Zone</td>
                                    <td>4000</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->




@include('admin.footer')