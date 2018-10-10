<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Groups</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Groups</li>
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
                        <strong class="card-title">Groups List</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Group Name</th>
                                    <th>Location</th>
                                    <th>Category Type</th>
                                    <th>Group Type</th>
                                    <th>No.of Members</th>
                                    <th>Events Conducted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hyderabad Tricking Club</td>
                                    <td>Hyderabad</td>
                                    <td>Reality</td>
                                    <td>Public</td>
                                    <td>2100</td>
                                    <td>24</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Passion about Fashion</td>
                                    <td>Bangalore</td>
                                    <td>Fashion</td>
                                    <td>Private</td>
                                    <td>2100</td>
                                    <td>24</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Makes u Beautiful</td>
                                    <td>Chennai</td>
                                    <td>Beauty</td>
                                    <td>Public</td>
                                    <td>2100</td>
                                    <td>24</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>The Entrepreneur Zone</td>
                                    <td>Mumbai</td>
                                    <td>Automobile</td>
                                    <td>Private</td>
                                    <td>2100</td>
                                    <td>24</td>
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