<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>

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
                    <li><a href="index.php">Dashboard</a></li>
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
                                <tr>
                                    <td>1</td>
                                    <td>Fashion & Beauty</td>
                                    <td>15-2-2017</td>
                                    <td>
                                        <a href="edit-category.php">
                                            <button type="button" class="btn btn-sm social btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-sm social btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Automobile</td>
                                    <td>18-7-2017</td>
                                    <td>
                                        <a href="edit-category.php">
                                            <button type="button" class="btn btn-sm social btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-sm social btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Reality</td>
                                    <td>24-3-2018</td>
                                    <td>
                                        <a href="edit-category.php">
                                            <button type="button" class="btn btn-sm social btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-sm social btn-danger">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </a>
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