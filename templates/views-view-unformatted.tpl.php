<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php
  foreach ($rows as $id => $row):
/**
 * Modified to contain no whitespace between the </div><div>
 * tags, allowing the inline-block grid alignment to work.
 */
?><div class="<?php print $classes_array[$id]; ?>">
    <?php print $row; ?>
  </div><?php endforeach; ?>
