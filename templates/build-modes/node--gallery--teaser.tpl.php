<?php
  $wrapped_content = "<div>" . render($content) . "</div>";

  $xml = new SimpleXMLElement($wrapped_content);

  $content_uri = $xml->xpath('//img/@src');
  $content_taxonomy = $xml->xpath('//span/text()');
  $content_description = $xml->xpath('//p/text()');
?>

<a href="<?php print $node_url; ?>" class="grid-item"
   style="background: url("<?php print $content_uri[0]; ?>");
          background-position: top;
          background-repeat: no-repeat;
          background-size: cover;">
  <i class="fa fa-trophy"></i>
  <h1><?php print $title; ?></h1>
  <div>wr - <?php print $wrapped_content; ?></div>
  <p>desc - <?php print $content_description[0]->asXml(); ?></p>
  <p>uri - <?php print $content_uri[0]->asXml(); ?></p>
  <p>tax - <?php print $content_taxonomy[0]->asXml(); ?></p>
</a>
