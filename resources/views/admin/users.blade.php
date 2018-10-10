<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Users</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Users</li>
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
                        <strong class="card-title">Users List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>UserName</th>
                                    <th>Email Id</th>
                                    <th>Joined Date</th>
                                    <th>Member of groups</th>
                                    <th>Created Groups</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Deo</td>
                                    <td>johndeo@gmail.com</td>
                                    <td>21-9-2018</td>
                                    <td>210</td>
                                    <td>24</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Leo Cartey</td>
                                    <td>carteyleo@gmail.com</td>
                                    <td>1-6-2018</td>
                                    <td>100</td>
                                    <td>4</td>
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
                                    <td>20</td>
                                    <td>2</td>
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
                                    <td>70</td>
                                    <td>1</td>
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


<?php include('footer.php'); ?>