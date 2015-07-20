<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <title><?php print $head_title; ?></title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>High School Demo</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.cdn.mozilla.net/fonts/fira.css" >
    <link href="http://www.hcpss.org/f/mrb/base/hs-theme/stylesheets/<?php print $hcpss_school_name; ?>.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

      var menuToggle = $('#js-centered-navigation-mobile-menu').unbind();
      $('#js-centered-navigation-menu').removeClass("show");

      menuToggle.on('click', function(e) {
        e.preventDefault();
        $('#js-centered-navigation-menu').slideToggle(function(){
          if($('#js-centered-navigation-menu').is(':hidden')) {
            $('#js-centered-navigation-menu').removeAttr('style');
          }
        });
      });
    });


    </script>

  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="index <?php print $classes; ?>" <?php print $attributes;?>>
  <?php
    print $page_top;
    print $page;
    print $page_bottom;
  ?>
</body>
</html>
