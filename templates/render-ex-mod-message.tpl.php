<?php if (!empty($message)): ?>
  <div <?php print $attributes; ?>  class="<?php print $classes;?>">
    <?php print render($message); ?>
  </div>
<?php endif; ?>
