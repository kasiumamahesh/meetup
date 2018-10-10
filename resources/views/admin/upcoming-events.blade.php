<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

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
                    <li><a href="index.php">Dashboard</a></li>
                    <li class="active">Upcoming Events</li>
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
                        <strong class="card-title">Upcoming Events List</strong>
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
                                <tr>
                                    <td>1</td>
                                    <td>Mumbai Food Truck Festival</td>
                                    <td>Mumbai</td>
                                    <td>21-9-2018</td>
                                    <td>10:00 - 13:00</td>
                                    <td>24</td>
                                    <td><span>Rs.</span>2,400</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bangalore Fashion Show</td>
                                    <td>Bangalore</td>
                                    <td>1-6-2018</td>
                                    <td>9:00 - 16:00</td>
                                    <td>40</td>
                                    <td><span>Rs.</span>2,400</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>The Reality</td>
                                    <td>Hyderabad</td>
                                    <td>14-5-2017</td>
                                    <td>14:00 - 18:00</td>
                                    <td>200</td>
                                    <td><span>Rs.</span>2,400</td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Trucking to the Hill</td>
                                    <td>Chennai</td>
                                    <td>7-3-2017</td>
                                    <td>5:00 - 9:00</td>
                                    <td>100</td>
                                    <td><span>Rs.</span>8,400</td>
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