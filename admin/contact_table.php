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
                <h4 class="page-title">Gallery Table</h4>
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
                   <div class="col-12">
                   <div class="card">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Basic Datatable</h5> -->
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql="select * from contact";
                                            $res=mysqli_query($con,$sql);
                                            while($rw=mysqli_fetch_assoc($res))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $rw['id']; ?></td>
                                                <td><?php echo $rw['fname']; ?></td>
                                                <td><?php echo $rw['lname']; ?></td>
                                                <td><?php echo $rw['email']; ?></td>
                                                <td><?php echo $rw['mobile']; ?></td>
                                                <td><?php echo $rw['subject']; ?></td>
                                                <td><?php echo $rw['message']; ?></td>
                                                <td><a class="btn btn-danger" href="contact_delete.php?id=<?php echo $rw['id']; ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>    
                                    </table>
                                </div>
                            </div>
                        </div>
                   </div>
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