<?php include ('header.navbar.php'); ?>
<div class="main-content">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
    </ol>
    <div class="widget widget-green" id="statistics">
        <span class="offset_anchor" id="widget_profit_chart"></span>
        <div class="widget-title">
            <div class="widget-controls">
                <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
                <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
                <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
            </div>
            <h3><i class="fa fa-bar-chart-o"></i>Statistics</h3>
        </div>
        <div class="widget-content">
            <div class="widget-content-tp">
                <div class="shadowed-top top-margin">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-6 bordered">
                            <div class="value-block value-bigger changed-up some-left-padding changed-up-border">
                                <div class="value-self"> <?php echo $_SESSION['allpostcount']; ?> </div>
                                <div class="value-sub">Total Posts</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 visible-md visible-lg bordered">
                            <div class="value-block text-center">
                                <div class="value-self"> <?php echo $_SESSION['viewssum']; ?> </div>
                                <div class="value-sub">Total Views</div>
                            </div>
                        </div>
                        <div class="col-lg-2 bordered visible-lg">
                            <div class="value-block text-center">
                                <div class="value-self"> <?php echo $avgviews; ?> </div>
                                <div class="value-sub">Average View per Post</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget widget-blue" id="postview">
                <div class="widget-title">
                    <div class="widget-controls">
                        <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
                        <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                    </div>
                    <h3><i class="fa fa-table"></i> Users Table</h3>
                </div>
                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Date/Time</th>
                                    <th>Edit</th>
                                    <th>Del</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include ('phpfunc/selectallpost.php'); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-footer">
  @otunwrites admin 2017
</div>
</div>


<script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='ad67372f4b8b70896e8a596720082ac6.js'></script>

<script src='6ede73fb6e204f0d1ba850a2db67eb65.js'></script>

<!-- @include _footer
