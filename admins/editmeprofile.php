<?php include ('header.navbar.php'); ?>
<div class="main-content">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Edit Profile</li>
    </ol>
    <div class="row" id="editprofile">
        <div class="col-md-12">
            <div class="widget widget-orange" id="widget_stats">
                <form method="post" action="assets/images/profileedit.php?me=<?php echo $_SESSION['userN']; ?>" enctype="multipart/form-data">
                    <div class="widget-title">
                        <span class="offset_anchor" id="widget_server_activity"></span>
                        <div class="widget-controls">
                            <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Expand"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                        </div>
                        <h3><i class="fa fa-ok-circle"></i>Profile</h3>
                    </div>
                    <div class="widget-content">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="userN" class="form-control" value="<?php echo $_SESSION['userN']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fName" class="form-control" value="<?php echo $_SESSION['fName']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select data-placeholder="choose gender" name="gender" class="form-control chosen-select">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>About</label>
                            <textarea class="summernote" name="userNote" rows="6"><?php echo $_SESSION['userNote']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="userLoc" class="form-control" value="<?php echo $_SESSION['userLoc']; ?>">
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='ad67372f4b8b70896e8a596720082ac6.js'></script>
<script src='54af62862bafb8d935ed7facd521918f.js'></script>
<script src='shows.js'></script>
</body>
</html>
<?php $db->close(); ?>
