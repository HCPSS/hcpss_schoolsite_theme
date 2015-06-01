<?php

/**
 * @file
 * Default theme implementation to display a node.
 */

?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>


  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      // print render($action_links);
      print render($content);
    ?>
  </div>

</div>
