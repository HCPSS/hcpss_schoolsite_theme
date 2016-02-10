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
        <li><a href="/gsearch">Search</a></li>
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
  <?php print render($page['footer_nav']); ?>
<?php endif; ?>
