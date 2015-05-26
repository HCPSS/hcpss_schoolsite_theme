<?php

/**
 * @file
 * Default theme implementation to display a node.
 */

?>

<div class="line-behind-text"><h6>Photo Galleries</h6></div>

<div class="grid-items">

    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    
</div>
