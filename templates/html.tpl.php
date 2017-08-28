<?php

/**
 * @file
 */
?>
<!DOCTYPE html>
<html<?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
</head>
<body class="<?php print $classes; print $attributes; ?>">
  <div id="bg">
    <div id="skip">
      <a href="#content"><?php print t('Jump to Navigation'); ?></a>
    </div>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
    <div id="toTop"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
  </div>
</body>
</html>
