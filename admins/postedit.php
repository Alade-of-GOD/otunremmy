<?php include ('header.navbar.php'); ?>
<?php
    $geti = $_GET['ed'];
    require_once('../otun-admin/php/dbfunctions/connect.inc.php');
    $selectallpost = "SELECT * FROM `otun_posts` WHERE `idofpost` = '$geti'";
    if (!$result = $db->query($selectallpost)){
        die('There was an error running the query [' . $db->error . ']');
    }
    $k = 0;
    while ($row = $result->fetch_assoc()){
        $k++;
        $t = $row['titleofpost'];
        $c = $row['category'];
        $postcontent = nl2br($row['contentofpost']);
        $contentshort = '';
        $contentarr = explode(' ', trim($postcontent));
        for ($i = 0; $i < 20; $i++) {
            $contentshort = $contentshort .' '. $contentarr[$i];
        }
        $contentshort = $contentshort.'...';
        switch ($row['active']) {
            case 0:
                $what = '<td><a href="phpfunc/postrefetch.php?ref='.$row['idofpost'].'" class="btn btn-primary">Refetch</a></td>';
                break;

            default:
                $what = '<td><a href="phpfunc/postdelete.php?del='.$row['idofpost'].'" class="btn btn-warning">Hide</a></td>';
                break;
        }
    }

    if (isset($_POST['posttitle']) && !empty($_POST['posttitle']) &&
        isset($_POST['category']) && !empty($_POST['category']) &&
        isset($_POST['postcontent']) && !empty($_POST['postcontent']) ){

        $posttitle = $_POST['posttitle'];
        $category = $_POST['category'];
        $postcontent = nl2br($_POST['postcontent']);
        //$time = date("h:i:sa");
    	//$date = date("d/m/Y");
        //$fName = $_SESSION['fName'];
        //$feauturedimage = ($_FILES['feauturedimage']['name']);
        //echo $feauturedimage;
        $update = "UPDATE `otun_posts` SET titleofpost = '".mysqli_real_escape_string($db, $posttitle)."', contentofpost = '".mysqli_real_escape_string($db, $postcontent)."', category = '".mysqli_real_escape_string($db, $category)."' WHERE `idofpost` = $geti";
        if(!$res = $db->query($update)){
            die('There was an error running the query [' . $db->error . ']');
        }

        else {
            if (isset($_FILES['feauturedimage']) && !empty($_FILES['feauturedimage'])){

                //$db->close();
                $feauturedimage = ($_FILES['feauturedimage']['name']);
    			$extension = strtolower(substr($feauturedimage, strpos($feauturedimage,'.')+1));
    			//$type = ($_FILES['stu_passport']['type']);
    			//$size = ($_FILES['stu_passport']['size']);
    			//$maxsize = 524288;
    			//$type = ($_FILES['stu_passport']['type']);
    			$tmp_name = ($_FILES['feauturedimage']['tmp_name']);
    			$error = ($_FILES['feauturedimage']['error']);
    			$location = '../../otun-content/post/feauturedimage/';
    			$location.$feauturedimage = $feauturedimage;
    			if(move_uploaded_file($tmp_name, $location.$feauturedimage)){
    				//echo "File Uploaded";
    			} else {
    			    //echo "File not uploaded";
    			}
                echo '<script type="text/javascript">
                        alert("post updated successfully");
                        window.setTimeout(function(){
                            // Move to a new location or you can do something else
                            window.location.href = "index.php#postview";
                        }, 100);
                    </script>';
            }
        }
        //echo '<script type="text/javascript">window.location.href = "../profile.php";</script>';
    }
?>
<div class="main-content">
    <div class="page-profile">
        <div class="row" id="post">
            <div class="col-md-12">
                <div class="widget widget-blue" id="widget_stats">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="widget-title">
                            <h3><i class="fa fa-ok-circle"></i>Edit Post</h3>
                        </div>
                        <div class="widget-content">
                            <div class="form-group">
                                <label>Title of Post</label>
                                <input type="text" name="posttitle" value="<?php echo $t; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Featured Image</label>
                                <input type="file" accept="image/*" value="" name="feauturedimage" class="form-control" placeholder="feature image">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select data-placeholder="choose category" name="category" class="form-control chosen-select">
                                    <option value=""></option>
                                    <option selected="<?php echo $c; ?>" value="<?php echo $c; ?>"><?php echo $c; ?></option>
                                    <optgroup label="AMEBO">
                                        <option value="Amebo Education">Education</option>
                                        <option value="Amebo Latest Discoveries">Latest Discoveries</option>
                                        <option value="Amebo Nigeria">Nigeria</option>
                                        <option value="Amebo Science and Technology">Science and Technology</option>
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
                            </div>
                            <div class="form-group">
                                <label>Editor</label>
                                <textarea class="summernote" name="postcontent" id="textA" rows="6"><?php echo $postcontent; ?></textarea>
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
