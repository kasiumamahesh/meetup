<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<?php include('header-1.php'); ?>


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<div class="content mt-3">

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user fa-users text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Users</div>
                        <div class="stat-digit text-white">1,012</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-tags text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Categories</div>
                        <div class="stat-digit text-white">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-users text-white border-white"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">No.of Groups</div>
                        <div class="stat-digit text-white">961</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="fa fa-calendar text-white bordewhite"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text text-light">New Events</div>
                        <div class="stat-digit text-white">770</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="card-title mb-0">Traffic</h4>
                        <div class="small text-muted">October 2017</div>
                    </div>
                    <!--/.col-->
                    <div class="col-sm-8 hidden-sm-down">
                        <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
                        <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option1"> Day
                                </label>
                                <label class="btn btn-outline-secondary active">
                                    <input type="radio" name="options" id="option2" checked=""> Month
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="options" id="option3"> Year
                                </label>
                            </div>
                        </div>
                    </div>
                    <!--/.col-->


                </div>
                <!--/.row-->
                <div class="chart-wrapper mt-4">
                    <canvas id="trafficChart" height="200px"></canvas>
                </div>

            </div>  
        </div>
    </div>
    
</div> <!-- .content -->


<?php include('footer.php'); ?>