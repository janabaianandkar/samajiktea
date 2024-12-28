<?php
include('admin/connect.php');
include('header.php');
?>

<!-- banner-start -->
    <section class="banner-section">
        <div class="banner-overlay text-center d-flex align-items-center justify-content-center">
            <div class="text-content text-light mt-5">
                <h3 class="text-white fs-1 mt-5 p-2">Gallery</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="home.php"
                                class="text-light text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"> Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- banner-end -->

<!-- Gallery-start -->

<section class="gallery">
    <div class="container mt-5">
        <div class="text-center mt-5">
            <h6 class="section-title bg-white text-center title-color px-3">Gallery</h6>
            <h1 class="mb-5 fs-4">Tea Shop Opening Ceremonys Images</h1>
        </div>
        <div class="row g-0">
            <?php
            $sql="select * from gallery";
            $res=mysqli_query($con,$sql);
            while($rw=mysqli_fetch_assoc($res))
            {
            ?>
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="admin/imgs/<?php echo $rw['image']; ?>" class="glightbox" data-gallery="images-gallery">
                        <img src="admin/imgs/<?php echo $rw['image']; ?>" alt="" class="img-fluid">
                    </a>
                </div>
            </div><!-- End Gallery Item -->
            <?php
            }
            ?>

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (1)_batcheditor_fotor.jpg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (1)_batcheditor_fotor.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>--><!--End Gallery Item -->
<!-- 
            <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (2)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (2)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (2)_batcheditor_fotor.jpg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (2)_batcheditor_fotor.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (3)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (3)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (4)_batcheditor_fotor.jpeg" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (4)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (5)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (5)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->

            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (6)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (6)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->
            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (7)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (7)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->
            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img1 (8)_batcheditor_fotor.jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img1 (8)_batcheditor_fotor.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->
            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img8 (1).jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img8 (1).jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item -->
            <!-- <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="img/gallery-img8 (2).jpeg" class="glightbox" data-gallery="images-gallery">
                        <img src="img/gallery-img8 (2).jpeg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>End Gallery Item --> 

        </div>

    </div>
</section>

<!-- Gallery-end -->

<?php include('footer.php'); ?>