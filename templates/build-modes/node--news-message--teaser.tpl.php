<div class="news-message">
  <div class="news-message-image">
    <img src="https://s3.amazonaws.com/hcpss.web.schoolsites/base/placeholder_logo_1.png" alt="Logo image">
  </div>
  <div class="news-message-content">
    <?php print render($title_prefix); ?>
    <h1><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
    <?php print render($title_suffix); ?>
    <p class="news-message-detail"><?php print $date; ?></p>
    <?php print render($content); ?>
  </div>
</div>
