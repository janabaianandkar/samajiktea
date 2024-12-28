<?php
include('admin/connect.php');

$nameErr = $lnmerr = $emlerr = $moberr = $subjerr = $msgerr = "";
$fname = $lname = $eml = $mob = $subj = $msg = "";

if(isset($_POST['btn']))
{

    if(empty($_POST['fname']))
    {
        $nameErr="Name is required";
    }
    else
    {
        $fname=$_POST['fname'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['lname']))
    {
        $lnmerr="Last name is required";
    }
    else
    {
        $lname=$_POST['lname'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $lnmerr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['eml']))
    {
        $emlerr="Email is required";
    }
    else
    {
        $eml=$_POST['eml'];
        if (!filter_var($eml, FILTER_VALIDATE_EMAIL)) {
            $emlerr = "Invalid email format";
          }
    }
    if(empty($_POST['mob']))
    {
        $moberr="Mobile number is required";
    }
    else
    {
        $mob=$_POST['mob'];
        if (!preg_match("/^[0-9]{10}$/",$mob)) {
            $moberr = "Only 10-digit numbers are allowed";
        }
    }
    if(empty($_POST['subj']))
    {
        $subjerr="Subject is required";
    }
    else
    {
        $subj=$_POST['subj'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$subj)) {
            $subjerr = "Only letters and white space allowed";
        }
    }
    if(empty($_POST['msg']))
    {
        $msgerr="Meassage is required";
    }
    else
    {
        $msg=$_POST['msg'];
        if (!preg_match("/^[a-zA-Z-' ]*$/",$msg)) {
            $msgerr = "Only letters and white space allowed";
        }
    }

    if (empty($nameErr) && empty($lnmerr) && empty($emlerr) && empty($moberr) && empty($subjerr) && empty($msgerr)) {
    $sql="select count(id) from contact where email='$eml'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_fetch_row($res);

    if($count[0]=='1')
    {
        echo "<script>alert('You have already fillup this form...')</script>";
    }
    else
    {
        $cl="insert into contact(fname,lname,email,mobile,subject,message)
        values('$fname','$lname','$eml','$mob','$subj','$msg')";

        if(mysqli_query($con,$cl))
        {
            echo "<script>alert('Succesfully fillup this form....')</script>";
        }
        else
        {
            echo "<script>alert('Not fillup this form')</script>";
        }
    }
}
}

include('header.php');
?>

<section class="banner-section">
        <div class="banner-overlay text-center d-flex align-items-center justify-content-center">
            <div class="text-content text-light mt-5">
                <h3 class="text-white fs-1 mt-5 p-2">Contact Us</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="home.php"
                                class="text-light text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page"> Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>Vijaypur taluka sindagi 
                                RD Patil College. 586128</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@vertextechnosys.com</p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+9606504855 / 9008018983</p>
                        </div>
                      
                      
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.631782308714!2d75.92209907367624!3d17.66759039467556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da64017f2cad%3A0x9696761cef43dc11!2sVertex%20Technosys!5e0!3m2!1sen!2sin!4v1707668161478!5m2!1sen!2sin"
                            width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form  method="post"  class="php-email-form">
                    <!-- <p><span class="error">* required field</span></p> -->
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">First Name</label>
                                <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name"
                                value="<?php echo $fname; ?>" Required><span class="error"><?php echo $nameErr; ?></span>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="email"
                                    placeholder="Your Last Name" value="<?php echo $lname; ?>" required><span class="error"><?php echo $lnmerr; ?></span>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="eml" id="email"
                                    placeholder="Your Email" value="<?php echo $eml; ?>" required><span class="error"><?php echo $emlerr; ?></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Mobile Number</label>
                                <input type="tel" name="mob" class="form-control" id="name" placeholder="Mobile No"
                                value="<?php echo $mob; ?>" required><span class="error"><?php echo $moberr; ?></span>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subj" id="subject" placeholder="Subject"
                            value="<?php echo $subj; ?>"  required><span class="error"><?php echo $subjerr; ?></span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="msg" rows="10" value="<?php echo $msg; ?>" required></textarea>
                            <span class="error"><?php echo $msgerr; ?></span>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" name="btn">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Us Section -->

<?php include('footer.php'); ?>