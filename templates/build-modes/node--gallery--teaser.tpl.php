<?php
  $wrapped_content = "<div>" . render($content) . "</div>";

  $xml = new SimpleXMLElement($wrapped_content);

  $content_uri = $xml->xpath('//img/@src');
  $content_taxonomy = $xml->xpath('//span');
  $content_description = $xml->xpath('//p');
?>

<a href="<?php print $node_url; ?>" class="grid-item"
   style="background: url("<?php print $content_uri[0]; ?>");
          background-position: top;
          background-repeat: no-repeat;
          background-size: cover;">
  <i class="fa fa-trophy"></i>
  <h1><?php print $title; ?></h1>
  <div>wr - <?php print $wrapped_content; ?></div>
  <p>desc - <?php var_dump($content_description); ?></p>
  <p>uri - <?php var_dump($content_uri); ?></p>
  <p>tax - <?php var_dump($content_taxonomy); ?></p>
</a>
