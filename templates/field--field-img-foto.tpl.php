
<div  class="field-img-foto">
    <br class="clear" />
<ul class="ul-field-img-fot BaguetteBox">
  <?php foreach ($items as $delta => $item): ?>
  	        <li class="<?php print $item['#item']['alt']; ?> li-field-img-foto" value="<?php print $item['#item']['title']; ?>">
         <?php print render($item); ?>
        </li>
    <?php endforeach; ?>
</ul>
    <br class="clear" />
</div>
