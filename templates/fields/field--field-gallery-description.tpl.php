<?php
/**
 * @file field--fences-p.tpl.php
 * Wrap each field value in the <p> element.
 *
 * @see http://developers.whatwg.org/grouping-content.html#the-p-element
 */
?>

<?php foreach ($items as $delta => $item): ?>
  <p><?php print render($item); ?> </p>
<?php endforeach; ?>
