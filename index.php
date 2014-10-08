<?php
  $titles = ['Blog title 1', 'Blog title 2', 'Blog title 3'];

  $titles = array_reverse($titles);
?>
<ul>
  <?php foreach ($titles as $title): ?>
    <li><?= $title ?></li>
  <?php endforeach; ?>
</ul>
