<?php
include ("header.php");
?>

<style>
* {
  box-sizing: border-box;
}

.cont {
  position: relative;
  width: 20%;
  width: 20%;
  height: 20%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.cont:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}




* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container01 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column01 {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row01:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column01, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="<?php echo FRONT_SITE_PATH?>home">Home</a></li>
                        <li class="active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
       <!-- <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-location-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Our Location</h4>
                                <p>012 345 678 / 123 456 789</p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-telephone-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Contact us Anytime</h4>
                                <p>Mobile: 012 345 678</p>
                                <p>Fax: 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ion-ios-email-outline"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Write Some Words</h4>
                                <p><a href="#">Support24/7@example.com </a></p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div> -->


<!------------------------ founder Detail ----------------------------->
    <br><br>
    <center>
        <h1 style="font-family: Cursive; background-color: LightBlue; Color: White; font-size: 35px; margin-right:70px; margin-left:70px ">Founders of CU STAFF
        </h1>

    </center>
 

 
<div class="row">
  <div class="cont"></div>
  <div class="cont">
    <a href="https://www.linkedin.com/in/darshan-yadav-9496b0201/" target="_blank"> <img src="assets/img/PHOTO.jpg" alt="Darshan" class="image">
    <div class="overlay">
    <div class="text"> 
         <h2>Darshan Yadav</h2>
         <p class="title">Creator and Editor</p></div>
    </div>  
    <a href="https://www.linkedin.com/in/darshan-yadav-9496b0201/" target="_blank" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on LinkedIn </p></a>
  </div></a>
  <div class="cont">
    <a href="https://www.instagram.com/sayansarkar688/" target="_blank"><img src="assets/img/sayan.jpg" alt="sayan" class="image">
    <div class="overlay">
    <div class="text">
           <h2>Sayan Sarkar</h2>
           <p class="title">Creator and UI Designer</p></div>
    </div> 
    <a href="https://www.instagram.com/sayansarkar688/" target="_blank" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on Instagram </p></a> 
  </div> </a>
  <div class="cont">
    <a href="https://www.instagram.com/vb4031347/" target="_blank"><img src="assets/img/vaibhav.jpg" alt="vaibhav" class="image">
    <div class="overlay">
    <div class="text">
            <h2>Vaibhav</h2>
        <p class="title">Editor or Content helper</p></div>
    </div> 
     <a href="#" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on Instagram </p></a>
  </div> </a>
  <!-- <div class="cont">
    <a href="#"><img src="assets/img/1.jpg" alt="-" class="image">
    <div class="overlay">
    <div class="text">
            <h2>Kirat Kaur</h2>
        <p class="title">Project Superviser</p></div>
    </div> 
     <a href="#" style="font-family: Bold; color: Red">
           <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on Instagram </p></a>
  </div></a>
  <div class="cont">
    <a href="#"><img src="assets/img/1.jpg" alt="-" class="image">
    <div class="overlay">
    <div class="text">
            <h2>Chitra Sharma</h2>
        <p class="title">Project Co-Superviser</p></div>
    </div> 
    <a href="#" style="font-family: Bold; color: Red">
          <P style="background-color:Black; Color:white; text-align:center; padding-up:20px; pandding-down:20px"> Contact on LinkedIn </p></a>
  </div></a> -->
</div>
 

<!-- ******************************************* Get in Touch *********************************** -->
                <!-- <div class="row">
                    <div class="col-12">
                        <div class="contact-message-wrapper">
                            <h4 class="contact-title">GET IN TOUCH</h4>
                            <div class="contact-message">
                                <form id="contact-form" action="contact_us_submit.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="name" placeholder="Full Name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="email" placeholder="Email Address" type="email" required>
                                            </div>
                                        </div>
										<div class="col-lg-4">
                                            <div class="contact-form-style mb-20">
                                                <input name="mobile" placeholder="Mobile" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style mb-20">
                                                <input name="subject" placeholder="Subject" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style">
                                                <textarea name="message" placeholder="Message" required></textarea>
                                                <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

<div class="container01">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row01">
    <div class="column01">
      <img src="media/banner/banner.jpg" style="width:100%">
    </div>
    <div class="column01">
      <form action="contact_us_submit.php" method="post">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Your Full Name..." required>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Your E-Mail..." required>
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" placeholder="Your Mobile Number..." required>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>



<?php
include("footer.php");
?>