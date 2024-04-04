<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script> -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>

<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/main-slider-script.js"></script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/script.js"></script>


<script src="assets/wnoty/jquery-confirm.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script> 
    <script src="assets/wnoty/wnoty.js"></script>

<!-- Modal -->
<div class="modal fade" id="contact-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalTitle">Contact Us</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form method="post"  class="contact-form" id="enquiry-form">
                  <div class="row">
                     <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <input type="text" name="name" class="form-control" id="enquiry-name" placeholder="Enter name" required>
                     </div>
                     <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <input type="email" name="email" class="form-control" id="enquiry-email" placeholder="Email Address" required>
                     </div>
                     <div class="form-group col-lg-12 col-md-12 col-sm-12">
                     <input name="number" class="form-control" type="number" placeholder="Enter Phone" required>
                     </div>
                     <div class="form-group col-lg-12">
                        <textarea name="message" class="form-control" placeholder="Write a message" required></textarea>
                     </div>
                     
                  </div>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button"  class="theme-btn btn-style-one text-white" id="submit-modal" Style="padding:.375rem .75rem;border: 1px solid transparent; padding: 0.375rem 0.75rem; font-size: 1rem; border-radius: 0.25rem;">Submit</button>
            </div>
         </div>
      </div>
      </div>
 <script>
$(document).ready(function () {
    // Show contact modal on page load if necessary
    // <?php if (isset($_SESSION['contact_modal_shown'])) { ?>
    //     $("#contact-modal").modal('show');
    // <?php } ?>

       // Check if the flag is set in local storage
       var modalShown = localStorage.getItem('contactModalShown');
            if (!modalShown) {
                   // Delay showing the modal by 2 minutes (120 seconds)
                setTimeout(function() {
                    $('#contact-modal').modal('show');
                },120000 ); //120000  2 minutes in milliseconds
            }

    $(document).on('click','#submit-modal',function(){

        event.preventDefault();
        $("#enquiry-form").valid();
        var email = $("#enquiry-email").val();
        var name=$("#enquiry-name").val();
        
        

        if(email != '' && name != ''  ){ // 

        $.ajax({
        type:'post',
        url: 'https://demoblr.in/mailer/mailer.php',
        data: new FormData($("#enquiry-form")[0]),
        contentType: false,
        processData: false, 
        success:function(resp){
        var data=$.parseJSON(resp);
        if(data.status == 'success'){
        $('#enquiry-form')[0].reset();
             // After successful form submission, set the flag in local storage
             localStorage.setItem('contactModalShown', 'true');

           $('#contact-modal').modal('hide');
          $(".modal-backdrop").remove();
        $.wnoty({
        type: 'success',
        message: 'Thank you for contactus!',
        autohideDelay: 1000,
        position: 'top-right'

        });
        <?php //unset($_SESSION['contact_modal_shown']); ?>

   
  

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
});



$(document).ready(function(){
    // Fetch the visitor count from your PHP script
    $.ajax({
        url: 'assets/track_visitor.php', // Change this to the path of your PHP script
        success: function(data) {
          // $('#visitorCount').text(data);
          console.log(data);
          if(data){
            $.wnoty({
               type: 'info',
               message: data,
               autohide:false,
               //autohideDelay: 1000,
               position: 'bottom-left'

               });
          }
           
        },
        error: function() {
            $('#visitorCount').text('Failed to retrieve visitor count.');
        }
    });
});


</script>