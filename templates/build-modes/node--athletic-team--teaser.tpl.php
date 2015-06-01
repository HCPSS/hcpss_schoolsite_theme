<div class="news-message">
  <div class="news-message-image">
    <span><i class="fa fa-trophy" style="font-size: 2em;"></i></span>
  </div>
  <div class="news-message-content">
    <?php print render($title_prefix); ?>
    <h1 style="font-size: 1.5em;"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h1>
    <?php print render($title_suffix); ?>
    <p class="news-message-detail"></p>
    <?php print render($content); ?>
  </div>
</div>
