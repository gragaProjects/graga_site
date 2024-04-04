<?php
session_start();
if (!isset($_SESSION['contact_modal_shown'])) {
    // Set the session variable to indicate that the contact modal has been shown
    $_SESSION['contact_modal_shown'] = true;
}
?>
<meta charset="utf-8">
<title>Home | Graga Technologies </title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<link href="assets/wnoty/wnoty.css" rel="stylesheet" type="text/css" />  
   <link href="assets/wnoty/jquery-confirm.min.css" rel="stylesheet" type="text/css" /> 
<style>
    .btn-style-one,.scroll-to-top,.sec-title h2:before,.why-choose-us .info-box .icon,.icon-box,.date,.news-block .content-box .read-more i,
    .testimonial-section .title-column .info-box .icon,.marquee-section,.faq-block .icon,.service-block .inner-box .hover-content .icon,.service-block .inner-box .content-box .icon,
    .service-block .inner-box:before,.social-icon-two li a::before{
        background: #ed7422 !important;/* orange */
        
    }
    .other-title,.contact-info-block .icon,.news-block .content-box .post-info li i,.accordion-box .block .acc-btn.active,.testimonial-block .info-box .rating,
    .about-section .content-column .info-box .icon,.list-style-one li i,.main-header .info-btn small,.page-breadcrumb li a{
        color: #ed7422 !important;
    }
    .sticky-header .logo img {
      max-height: 100px !important;
   }
   .why-choose-us .info-box .inner:hover .icon,.reset {
    background-color: #1684c3 !important;/* blue */
    color: white;
   }
   .project-block .content-box::before{
    background: #ed7422 !important;/* orange */
    color: white !important;
   }
   .title a,.project-block .content-box .cat,.service-block .inner-box .hover-content .icon,.service-block .inner-box .content-box .icon,.list-style-one li,
   .header-top .useful-links li a{
    color: white !important;
   }
   .project-block .content-box .icon,.contact-info-block .inner:hover .icon{
    background-color: white;
    color: #ed7422 !important;/* orange */
   }
   .bg-pattern-1{
    background-image: unset !important;
   }
   .sec-title.light h2, .sec-title.light h1{
    color: black !important;
   }
   .contact-details__info li:hover .icon{
    background-color: #ed7422 !important;
    color: white !important;
   }
</style>