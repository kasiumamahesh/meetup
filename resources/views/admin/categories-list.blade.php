@include('admin.header') 
@include('admin.sidebar')
@include('admin.header-1')

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
                    <li class="active">Categories List</li>
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
                        <strong class="card-title">Categories List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Category Name</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lists as $list)
                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$list->cat_name}}</td>
                                    <td>{{$list->created_time}}</td>
                                    <td>
                                        <a href="{{url('/editcat/'.$list->id)}}">
                                            <button type="button" class="btn btn-sm social btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{url('/delcat/'.$list->id)}}">
                                            <button type="button" class="btn btn-sm social btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
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
    </div><!-- .animated -->
</div><!-- .content -->


@include('admin.footer')