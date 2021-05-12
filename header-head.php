<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<?php 
  $google_tag_manager_script = get_field('google_tag_manager_script', 'option');
  if($google_tag_manager_script) {
    echo $google_tag_manager_script;
  } else {
?>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W8QPCL');</script>
<?php } ?>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

<script>
  WebFontConfig = {
    typekit: {
      id: 'jje2ktv'
    },
    custom: {
      families: ['quincycf-light']
    }
  };
  (function(d) {
    var wf = d.createElement('script'), s = d.scripts[0];
    wf.src = 'https://cdn.jsdelivr.net/webfontloader/1.6.27/webfontloader.js';
    s.parentNode.insertBefore(wf, s);
  })(document);
</script>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<link rel="icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon-32.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri();?>/favicon-ios-152.png">
   <!-- Owl Stylesheets -->
   <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/font.css">
    <!-- javascript -->
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/vendors/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/vendors/highlight.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/assets/js/app.js"></script>
    <script src="https://kit.fontawesome.com/17b78e60a0.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?> >
<!-- Google Tag Manager (noscript) -->
<?php 
  $google_tag_manager_iframe = get_field('google_tag_manager_iframe', 'option');
  if($google_tag_manager_iframe) {
    echo $google_tag_manager_iframe;
  } else {
?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8QPCL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php } ?>
<!-- End Google Tag Manager (noscript) -->
