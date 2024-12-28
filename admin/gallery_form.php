<?php 
session_start();
include('connect.php');
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('First Login...')
    window.location.href='login.php'</script>";
}

if(isset($_POST['btn']))
{
    $filename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    $folder="imgs/".$filename;

    if(move_uploaded_file($tempname,$folder))
    {
        $sql="insert into gallery(image)values('$filename')";

        if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Image Added')
            window.location.href='../admin/gallery_table.php'</script>";
        }
        else
        {
            echo "<script>alert('Image Not Added')</script>";
        }
    }
}

include('header.php'); 
?>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Gallery Form</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
            </div>
        </div>
    </div>

     <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <!-- <h4 class="card-title">Personal Info</h4> -->
                                    <div class="form-group row">
                                    <label class="col-md-3">Select Image</label>
                                    <div class="col-md-9">
                                        <!-- <div class="custom-file">
                                            <input type="file" name="img" class="custom-file-input" id="validatedCustomFile" >
                                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                                        </div> -->
                                        <input type="file" name="img" Required>
                                    </div>
                                </div>
                                    
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
</div>
</div>
</div>
<br><br>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

<?php include('footer.php'); ?>