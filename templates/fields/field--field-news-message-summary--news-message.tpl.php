<?php
/**
 * Based on code from Fences template
 *
 */

/**
 * @file field--fences-span.tpl.php
 * Wrap each field value in the <span> element.
 *
 * @see http://developers.whatwg.org/text-level-semantics.html#the-span-element
 */
?>

<?php foreach ($items as $delta => $item): ?>
   <?php print render($item); ?>
<?php endforeach; ?>
