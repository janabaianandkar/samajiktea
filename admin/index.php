<?php 
session_start();
include('connect.php');
if(!isset($_SESSION['uname']))
{
    echo "<script>alert('First Login...')
    window.location.href='login.php'</script>";
}
include('header.php'); 
?>
 <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
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
                    <!-- Column -->
                    <!-- <a href="../admin/index.php" class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </a> -->
                    <!-- Column -->
                    <!-- <a href="../admin/gallery_form.php" class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Gallery Form</h6>
                            </div>
                        </div>
                    </a> -->
                    <?php
                    $sql="select count(*) from gallery";
                    $res=mysqli_query($con,$sql);
                    $gallcount=mysqli_fetch_column($res);
                    ?>
                     <!-- Column -->
                    <a href="../admin/gallery_table.php" class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Gallery Details</h6>
                                <h2 style="color:white;"><?php echo $gallcount; ?></h2>
                            </div>
                        </div>
                    </a>
                    <?php
                    $sql="select count(*) from contact";
                    $res=mysqli_query($con,$sql);
                    $contcount=mysqli_fetch_column($res);
                    ?>
                    <!-- Column -->
                    <a href="../admin/contact_table.php" class="col-md-6 col-lg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Contact Details</h6>
                                <h2 style="color:white;"><?php echo $contcount; ?></h2>
                            </div>
                        </div>
                    </a>
                </div>
                
                

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