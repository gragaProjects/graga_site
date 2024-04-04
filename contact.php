<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include 'template/link-css.php'; ?>
   </head>
   <body>
      <div class="page-wrapper">
         <div class="preloader"></div>
         <!-- header -->
         <?php include 'template/header.php'; ?>
         <!-- header -->
         <section class="page-title" style="background-image: url(assets/images/background/page-title.jpg);">
            <div class="auto-container">
               <div class="title-outer">
                  <h1 class="title">Contact Us</h1>
                  <ul class="page-breadcrumb">
                     <li><a href="index.php">Home</a></li>
                     <li>Contact</li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="contact-details">
            <div class="container ">
               <div class="row">
                  <div class="col-xl-7 col-lg-6">
                     <div class="sec-title">
                        <span class="sub-title">Send us email</span>
                        <h2>Feel free to write</h2>
                     </div>
                     <form id="contact_form" name="contact_form" class  method="post">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="email" id="email" class="form-control required email" type="email" placeholder="Enter Email">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <!-- <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                              </div>
                           </div> -->
                           <div class="col-sm-12">
                              <div class="mb-3">
                                 <input name="number" class="form-control" type="number" placeholder="Enter Phone" required>
                              </div>
                           </div>
                        </div>
                        <div class="mb-3">
                           <textarea name="message" id="message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-3">
                           <input name="form_botcheck" class="form-control" type="hidden" value />
                           <button type="submit" class="theme-btn btn-style-one text-white" id="sendcontact1" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                           <button type="reset" class="theme-btn btn-style-one bg-theme-color5 reset"><span class="btn-title">Reset</span></button>
                        </div>
                     </form>
                  </div>
                  <div class="col-xl-5 col-lg-6">
                     <div class="contact-details__right">
                        <div class="sec-title">
                           <span class="sub-title">Need any help?</span>
                           <h2>Get in touch with us</h2>
                           <div class="text">Get in touch with our team to elevate your online presence and drive results with tailored digital strategies and innovative web development services.</div>
                        </div>
                        <ul class="list-unstyled contact-details__info">
                           <li>
                              <div class="icon">
                                 <span class="lnr-icon-phone-plus"></span>
                              </div>
                              <div class="text">
                                 <h6>Have any question?</h6>
                                 <a href="tel:+919964085222"><span>Free</span> +91 99640 85222</a>
                              </div>
                           </li>
                           <li>
                              <div class="icon">
                                 <span class="lnr-icon-envelope1"></span>
                              </div>
                              <div class="text">
                                 <h6>Write email</h6>
                                 <a href="mailto:webroky2@gmail.com"><span class="__cf_email__" data-cfemail="355b5050515d50594575565a5845545b4c1b565a58">webroky2@gmail.com</span></a>
                              </div>
                           </li>
                           <li>
                              <div class="icon" style=" padding: 30px; ">
                                 <span class="lnr-icon-location"></span>
                              </div>
                              <div class="text">
                                 <h6>Visit anytime</h6>
                                 <span>9, 36, Tumkur Rd, Yeshwanthpur Industrial Area, Phase 1, Yeswanthpur, Bengaluru, Karnataka 560022</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="map-section">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.1759665455643!2d77.54614842479452!3d13.024463763717621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3dd1c850d58f%3A0x63164cc542d95ab1!2sVaishnavi%20Sapphire%20Centre!5e0!3m2!1sen!2sin!4v1710503637663!5m2!1sen!2sin"></iframe>
         </section>
         <!-- Footer -->
         <?php include 'template/footer.php'; ?>
         <!-- Footer -->
      </div>

      <!-- js -->
      <?php include 'template/link-js.php'; ?>
      <!-- js -->
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/jquery.form.min.js"></script>
      <script>
$(document).on('click','#sendcontact1',function(){

event.preventDefault();
   $("#contact_form").valid();
   var email = $("#email").val();
   var name=$("#name").val();
    
   

if(email != '' && name != ''  ){ // 
  
 $.ajax({
type:'post',
url: 'https://demoblr.in/mailer/mailer.php',
data: new FormData($("#contact_form")[0]),
contentType: false,
processData: false, 
success:function(resp){
var data=$.parseJSON(resp);
if(data.status == 'success'){
$('#contact_form')[0].reset();

$.wnoty({
type: 'success',
message: 'Thank you for contactus!',
autohideDelay: 1000,
position: 'top-right'

});

 setTimeout(function(){
    location.reload(true);
    },2000);
}else if(data.status == 'error'){

      $.wnoty({
            type: 'error',
            message: data.message,
            autohideDelay: 1000,
            position: 'top-right'

            });
    
}
},
});
}

return false;
})

      </script>
   </body>

</html>