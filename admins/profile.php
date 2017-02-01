<?php include ('header.navbar.php'); ?>

<div class="main-content">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Profile</li>
    </ol>
    <div class="page-profile">
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-3">
                    <div class="avatar-w">
                        <img src="assets/images/<?php echo $_SESSION['avatar'];?>" alt="" class="img-max">
                    </div>
                    <div class="sub-avatar-buttons">
                        <input type="file" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i> Change Avatar</input>
                    </div>
                </div>
                <div class="col-sm-9 col-md-5 col-lg-4">
                    <div class="profile-main-info">
                        <h1><?php echo $_SESSION['userN']; ?></h1>
                        <p><?php echo $_SESSION['note']; ?></p>
                        <a href="#"><?php echo $_SESSION['fName']; ?><i class="fa fa-external-link-square icon-left-margin"></i></a>
                    </div>
                    <div class="profile-details visible-lg">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="icon"><i class="fa fa-map-marker"></i></div><?php echo $_SESSION['add']; ?>
                            </div>
                            <div class="col-lg-4">
                                <div class="icon"><i class="fa fa-calendar"></i></div> Jul 17
                            </div>
                            <div class="col-lg-4">
                                <div class="icon"><i class="fa fa-<?php echo $_SESSION['sex']; ?>"></i></div> <?php echo $_SESSION['sex']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-5 hidden-sm">
                    <div class="left-inner-shadow profile-charts">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <h4 class="knob-header">Posts%</h4>
                                <input type="text" value="<?php echo $_SESSION['perc']; ?>" class="knob" data-fgColor="#318cc8" data-linecap="round" data-width="100" data-height="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="widget widget-red">
                    <span class="offset_anchor" id="widget_send_a_message"></span>
                    <div class="widget-title">
                        <div class="widget-controls">
                            <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
                            <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                            <!--<a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>-->
                        </div>
                        <h3><i class="fa fa-envelope"></i>Send Broadcast</h3>
                    </div>
                    <form method="post" action="phpfunc/broadcast.php">
                        <div class="widget-content">
                            <div class="widget-foot">
                                <div class="create-chat-message-w">
                                    <div class="input-group">
                                        <textarea type="text" name="message" class="form-control" placeholder="Your message here...">
                                        </textarea>
                                        <span class="input-group-btn">
                                            <button class="btn btn-danger" type="submit" id="broad">Send</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6" id="broadwidget">
                <div class="widget widget-green" style="">
                    <span class="offset_anchor" id="widget_server_activity"></span>
                    <div class="widget-title">
                        <div class="widget-controls">
                            <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Expand"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                        </div>
                        <h3><i class="fa fa-warning"></i>Broadcast Messages</h3>
                    </div>
                    <div class="widget-content">
                        <ul class="activity-list">
                            <?php include ('phpfunc/broadselect.php'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="post">
            <div class="col-md-12">
                <div class="widget widget-blue" id="widget_stats">
                    <form method="post" action="phpfunc/postpusher.php" enctype="multipart/form-data">
                        <div class="widget-title">
                            <span class="offset_anchor" id="widget_server_activity"></span>
                            <div class="widget-controls">
                                <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Expand"><i class="fa fa-expand"></i></a>
                                <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"><i class="fa fa-expand"></i></a>
                                <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                            </div>
                            <h3><i class="fa fa-ok-circle"></i>POST ON BLOG</h3>
                        </div>
                        <div class="widget-content">
                            <div class="form-group">
                                <label>Title of Post</label>
                                <input type="text" name="posttitle" class="form-control" placeholder="Post Title">
                                <strong><span class="help-block">Provide a suitable title for your post</strong></span>
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" accept="image/*" name="feauturedimage" class="form-control" placeholder="feature image">
                                <span class="help-block"><strong>Image displayed with post(optional). <i>Note: Feautured Image makes your post more attractive to readers</i></strong></span>
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select data-placeholder="choose category" name="category" class="form-control chosen-select">
                                    <option value=""></option>
                                    <optgroup label="AMEBO">
                                        <option value="Education">Education</option>
                                        <option value="Latest Discoveries">Latest Discoveries</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Science and Technology">Science and Technology</option>
                                    </optgroup>
                                    <option value="health">HEALTH</option>
                                    <option value="inpirational">Inspirational</option>
                                    <optgroup label="POEM">
                                        <option value="End Time">End Time</option>
                                        <option value="Grace">Grace</option>
                                        <option value="Sacred">Sacred</option>
                                        <option value="Special">Special</option>
                                    </optgroup>
                                </select>
                                <span class="help-block"><strong>Select a category from the drop down menu. Note: <i>For Poems, click on a subcategory where the poem belogs to</i></strong></span>
                            </div>
                            <div class="form-group">
                                <label>Editor</label>
                                <textarea class="summernote" name="postcontent" rows="6"></textarea>
                                <span class="help-block">Block of help text for the field</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" id="post">
            <div class="col-md-12" id="commentwidget">
                <div class="widget widget-blue" id="widget_stats">
                    <div class="widget-title">
                        <span class="offset_anchor" id="widget_server_activity"></span>
                        <div class="widget-controls">
                            <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Expand"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Collapse"><i class="fa fa-expand"></i></a>
                            <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
                        </div>
                        <h3><i class="fa fa-ok-circle"></i>Comments to be Approved</h3>
                    </div>
                    <div class="widget-content">
                        <ul class="activity-list">
                            <?php include ('phpfunc/comunappselect.php'); ?>
                        </ul>
                    </div>
                </div>
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
