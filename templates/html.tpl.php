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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://s3.amazonaws.com/hcpss.web.site/fonts/fira.css" >
    <link href="https://www.hcpss.org/f/mrb/base/hs-theme/stylesheets/<?php print $hcpss_school_name; ?>.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

  <?php if ($analytics_id): ?>
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', '<?php print $analytics_id; ?>', 'auto');
     ga('send', 'pageview');
    </script>
  <?php endif; ?>

</body>
</html>
