<?php include 'projects/projectData.php' ?>
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
                  <h1 class="title">Portfolio</h1>
                  <ul class="page-breadcrumb">
                     <li><a href="index.php">Home</a></li>
                     <li><a href="#">Pages</a></li>
                     <li>Portfolio</li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="projects-section">
            <div class="auto-container">
               <div class>
                  <div class="row">
                  <?php foreach ($projects as $project): ?>
                     
                    <div class="project-block col-lg-4 col-md-6"
                        data-title="<?= $project['title'] ?>"
                        data-description="<?= $project['description'] ?>"
                        data-shortdescription="<?= $project['shortdescription'] ?>"
                        data-image="<?= $project['image'] ?>"
                        data-thumnail="<?= $project['thumnail'] ?>"
                     >
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image" style="    height: 280px;"><a href="#"><img src="<?= $project['thumnail'] ?>" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <a href="#"   data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="icon"><i class="fa fa-long-arrow-alt-right"></i></a>
                                <span class="cat">Development</span>
                                <h4 class="title"><a href="#" title><?= $project['title'] ?></a></h4>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                   
                     
                  </div>
               </div>
            </div>
         </section>
         <!-- Footer -->
         <?php include 'template/footer.php'; ?>
         <!-- Footer -->
      </div>
      <!-- js -->
      <?php include 'template/link-js.php'; ?>
      <!-- js -->
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalTitle"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <img id="modalImage" src="" alt="">
             <!-- <img id="modalImage" src="" alt=""> assets/images/resource/products/product-details.jpg -->
             <!--  -->
             <!-- <div class="bxslider">
            <div class="slider-content">
               <figure class="image-box"><a href="" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/resource/products/product-details.jpg" id="" alt></a></figure>
               <div class="slider-pager">
                  <ul class="thumb-box">
                  </ul>
               </div>
            </div>
         </div> -->
             <!--  -->
             <!-- <h5>Description:</h5> -->
             <p id="modalDescription"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
         </div>
      </div>
      </div>
      <script>
        $(document).ready(function () {
            $('.project-block').on('click', function () {
                // Get project details from data attributes
                var title = $(this).data('title');
                var description = $(this).data('description');
                var image = $(this).data('image');
                var link = $(this).data('link');

                // Update modal content with project details
                $('#modalTitle').text(title);
                $('#modalDescription').html(description);
                $('#modalImage').attr('src', image);
                $('#modalLink').attr('href', link);

                // Show the modal
                $('#staticBackdrop').modal('show');
            });
        });
    </script>
   </body>
</html>