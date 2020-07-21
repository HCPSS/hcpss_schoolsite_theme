<footer class="footer-2" role="contentinfo">
  <div style="max-width: 68em; margin-left: auto; margin-right: auto;">
    <div class="footer-logo">
      <img class="school-logo" src="<?php print $logo;?>" alt="Logo image">
    </div>

    <ul>
      <li><a href="/" class="school-name" style="color: white;"><?php print $site_name; ?></a></li>
    </ul>

    <div class="footer-secondary-links">
      <ul>
        <li><a href="/about">Contact Us</a></li>
        <?php if ($blog_url): ?>
        <li><a href="<?php print $blog_url; ?>">Blog</a></li>
        <?php endif; ?>
        <li><a href="/search">Search</a></li>
      </ul>

      <ul class="footer-social">
        <li><a href="https://twitter.com/hcpss_<?php print $hcpss_school_code; ?>">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/twitter-logo-circle.png" alt="Twitter">
        </a></li>

        <?php if ($facebook_url): ?>
        <li><a href="<?php print $facebook_url; ?>">
          <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/facebook-logo-circle.png" alt="Facebook">
          </a></li>
        <?php endif; ?>

        <?php if ($instagram_url): ?>
        <li><a href="<?php print $instagram_url; ?>">

          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 24 24" style="enable-background:new 0 0 24 24; width:26px; fill: white; fill-opacity:0.7;" xml:space="preserve">
          <path d="M14.8,6.3c-0.7,0-1,0-2.8,0s-2.1,0-2.8,0c-1.9,0.1-2.8,1-2.9,2.9c0,0.7,0,1,0,2.8s0,2.1,0,2.8c0.1,1.9,1,2.8,2.9,2.9
            c0.7,0,1,0,2.8,0c1.9,0,2.1,0,2.8,0c1.9-0.1,2.8-1,2.9-2.9c0-0.7,0-1,0-2.8s0-2.1,0-2.8C17.6,7.3,16.7,6.4,14.8,6.3z M12,15.6
            c-2,0-3.6-1.6-3.6-3.6c0-2,1.6-3.6,3.6-3.6s3.6,1.6,3.6,3.6S14,15.6,12,15.6z M15.7,9.1c-0.5,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8
            c0.5,0,0.8,0.4,0.8,0.8C16.6,8.7,16.2,9.1,15.7,9.1z M14.3,12c0,1.3-1,2.3-2.3,2.3s-2.3-1-2.3-2.3s1-2.3,2.3-2.3S14.3,10.7,14.3,12z
            M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z M19,14.9c-0.1,2.5-1.5,4-4.1,4.1c-0.7,0-1,0-2.9,0s-2.1,0-2.9,0
            c-2.5-0.1-4-1.5-4.1-4.1c0-0.7,0-1,0-2.9s0-2.1,0-2.9c0.1-2.5,1.5-4,4.1-4.1c0.7,0,1,0,2.9,0s2.1,0,2.9,0c2.5,0.1,4,1.5,4.1,4.1
            c0,0.7,0,1,0,2.9S19,14.1,19,14.9z"/>
          </svg>
          </a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</footer>

<?php if (!empty($primary_nav)): ?>
  <header class="centered-navigation" role="banner">
    <div class="centered-navigation-wrapper">
      <a href="javascript:void(0)" id="js-centered-navigation-mobile-menu" class="centered-navigation-mobile-menu">MENU</a>
      <nav role="navigation">
        <?php print render($primary_nav); ?>
      </nav>
    </div><!-- /.centered-navigation-wrapper -->
  </header><!-- /.centered-navigation -->
<?php endif; ?>

<?php if (!empty($page['banner'])): ?>
  <?php print render($page['banner']); ?>
<?php endif; ?>

<div class="refills-wrapper">
  <div class="primary-content">

    <?php if (!empty($tabs)): ?>
      <div style="padding-top: 1em;">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>
    <?php print render($page['content']); ?>
  </div>

  <?php if (!empty($page['sidebar_second'])): ?>
      <div class="sbar" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </div>  <!-- /#sidebar-second -->
  <?php endif; ?>

</div>

<?php if (!empty($page['footer_nav'])): ?>
  <footer class="footer" role="contentinfo">
    <?php print render($page['footer_nav']); ?>
  </footer>
<?php endif; ?>
