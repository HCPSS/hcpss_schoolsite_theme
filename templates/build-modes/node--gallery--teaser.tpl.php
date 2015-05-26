<?php
  $wrapped_content = "<div>" . render($content) . "</div>";

  $xml = new SimpleXMLElement($wrapped_content);

  $content_uri = $xml->xpath('//img/@src');
  $content_taxonomy = $xml->xpath('span');
  $content_description = $xml->xpath('/p');
?>

<a href="<?php print $node_url; ?>" class="grid-item"
   style="background: url("<?php print $content_uri; ?>");
          background-position: top;
          background-repeat: no-repeat;
          background-size: cover;">
  <i class="fa fa-trophy"></i>
  <h1><?php print $title; ?></h1>
  <p><?php print $content_description; ?></p>
</a>
