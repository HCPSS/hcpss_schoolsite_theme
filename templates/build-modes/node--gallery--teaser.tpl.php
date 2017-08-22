<?php
  $wrapped_content = "<div>" . render($content) . "</div>";

  $xml = new SimpleXMLElement($wrapped_content);

  $content_uri = $xml->xpath('//img/@src');
  $content_taxonomy = $xml->xpath('//span/text()');
  $content_description = $xml->xpath('//p/text()');

  if( $content_taxonomy ) {

  $tax = $content_taxonomy[0]->asXml();

  $tax_icon = "fa-star";

  switch ($tax) {
    case "<span>Competition</span>":
        $tax_icon = "fa-trophy";
        break;
    case "<span>Celebration</span>":
        $tax_icon = "fa-star";
        break;
    case "<span>Theatre</span>":
        $tax_icon = "fa-ticket";
        break;
    case "<span>Art</span>":
        $tax_icon = "fa-paint-brush";
        break;
    case "<span>Clubs / Programs</span>":
        $tax_icon = "fa-gavel";
        break;
  }
}
?>

<a href="<?php print $node_url; ?>" class="grid-item"
   style="background: url('<?php print $content_uri[0]; ?>');
          background-position: top;
          background-repeat: no-repeat;
          background-size: cover;">
  <div style="background-color: rgba(0,0,0,.5); padding: .4em;">
    <?php if ($content_taxonomy): ?>
      <i class="fa <?php print $tax_icon; ?>"></i>
    <?php endif; ?>

  <h1><?php print $title; ?></h1>
  <?php if ($content_description): ?>
     <?php print $content_description[0]->asXml(); ?>
   <?php endif; ?>
  </div>
</a>
