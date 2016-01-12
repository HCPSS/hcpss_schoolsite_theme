<?php
/**
 * Based on Fences: field--fences-div.tpl.php
 *
 */

/**
 * @file field--fences-div.tpl.php
 * Wrap each field value in the <div> element.
 *
 * @see http://developers.whatwg.org/grouping-content.html#the-div-element
 */
?>

<?php foreach ($items as $delta => $item): ?>
    <?php print render($item); ?>
<?php endforeach; ?>
