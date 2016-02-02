<?php if ($display->title && !$display->hide_title): ?>
  <h2><?php print $display->title; ?></h2>
<?php endif; ?>

<div class="panel-display panel-1col clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-col">
    <div><?php print $content['middle']; ?></div>
  </div>
</div>
