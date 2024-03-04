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
                     <form id="contact_form" name="contact_form" class action="https://html.kodesolution.com/2023/desix-html/includes/sendmail.php" method="post">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="mb-3">
                                 <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                              </div>
                           </div>
                        </div>
                        <div class="mb-3">
                           <textarea name="form_message" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="mb-3">
                           <input name="form_botcheck" class="form-control" type="hidden" value />
                           <button type="submit" class="theme-btn btn-style-one text-white" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                           <button type="reset" class="theme-btn btn-style-one bg-theme-color5 reset"><span class="btn-title">Reset</span></button>
                        </div>
                     </form>
                  </div>
                  <div class="col-xl-5 col-lg-6">
                     <div class="contact-details__right">
                        <div class="sec-title">
                           <span class="sub-title">Need any help?</span>
                           <h2>Get in touch with us</h2>
                           <div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
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
                                 <a href="mailto:info@graga.in"><span class="__cf_email__" data-cfemail="355b5050515d50594575565a5845545b4c1b565a58">info@graga.in</span></a>
                              </div>
                           </li>
                           <li>
                              <div class="icon">
                                 <span class="lnr-icon-location"></span>
                              </div>
                              <div class="text">
                                 <h6>Visit anytime</h6>
                                 <span>Bangalore, Karnataka</span>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="map-section">
            <iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
         </section>
         <!-- Footer -->
         <?php include 'template/footer.php'; ?>
         <!-- Footer -->
      </div>
      <!-- <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
         <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.fancybox.js"></script>
         <script src="js/jquery-ui.js"></script>
         <script src="js/wow.js"></script>
         <script src="js/appear.js"></script>
         <script src="js/select2.min.js"></script>
         <script src="js/swiper.min.js"></script>
         <script src="js/owl.js"></script>
         <script src="js/script.js"></script> -->
      <!-- js -->
      <?php include 'template/link-js.php'; ?>
      <!-- js -->
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/jquery.form.min.js"></script>
      <script>
         (function($) {
         	$("#contact_form").validate({
         		submitHandler: function(form) {
         			var form_btn = $(form).find('button[type="submit"]');
         			var form_result_div = '#form-result';
         			$(form_result_div).remove();
         			form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
         			var form_btn_old_msg = form_btn.php();
         			form_btn.php(form_btn.prop('disabled', true).data("loading-text"));
         			$(form).ajaxSubmit({
         				dataType:  'json',
         				success: function(data) {
         					if( data.status == 'true' ) {
         						$(form).find('.form-control').val('');
         					}
         					form_btn.prop('disabled', false).php(form_btn_old_msg);
         					$(form_result_div).php(data.message).fadeIn('slow');
         					setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
         				}
         			});
         		}
         	});
         })(jQuery);
      </script>
   </body>
   <!-- Mirrored from html.kodesolution.com/2023/desix-html/page-contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2024 08:02:48 GMT -->
</html>