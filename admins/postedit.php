<?php include ('header.navbar.php'); ?>

<div class="main-content">
    <div class="page-profile">
        <div class="row" id="post">
            <div class="col-md-12">
                <div class="widget widget-blue" id="widget_stats">
                    <form method="post" action="phpfunc/postupdate.php" enctype="multipart/form-data">
                        <div class="widget-title">
                            <h3><i class="fa fa-ok-circle"></i>Edit Post</h3>
                        </div>
                        <div class="widget-content">
                            <div class="form-group">
                                <label>Title of Post</label>
                                <input type="text" name="posttitle" class="form-control" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" accept="image/*" name="feauturedimage" class="form-control" placeholder="feature image">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select data-placeholder="choose category" name="category" class="form-control chosen-select">
                                    <option value=""></option>
                                    <optgroup label="AMEBO">
                                        <option value="Amebo Education">Education</option>
                                        <option value="Amebo Latest Discoveries">Latest Discoveries</option>
                                        <option value="Amebo Nigeria">Nigeria</option>
                                        <option value="Amebo Science and Technology">Science and Technology</option>
                                    </optgroup>
                                    <option value="health">HEALTH</option>
                                    <option value="inpirational">Inspirational</option>
                                    <optgroup label="POEM">
                                        <option value="Poem End Time">End Time</option>
                                        <option value="Poem Grace">Grace</option>
                                        <option value="Poem Sacred">Sacred</option>
                                        <option value="Poem Special">Special</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Editor</label>
                                <textarea class="summernote" name="postcontent" rows="6"></textarea>
                                <span class="help-block">Block of help text for the field</span>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </form>
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
