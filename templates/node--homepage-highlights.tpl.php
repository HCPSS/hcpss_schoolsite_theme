<?php

/**
 * @file
 * Default theme implementation to display a node.
 */

?>

<div class="line-behind-text" style="margin-bottom: 1.5em;">
  <?php print render($title_prefix); ?>
  <h6>Important News &amp; Upcoming Events</h6>
  <?php print render($title_suffix); ?>
</div>

<div class="grid-items-lines">

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    <div class="right-cover"></div>
    <div class="bottom-cover"></div>
</div>
