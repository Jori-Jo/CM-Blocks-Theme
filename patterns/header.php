<?php
/**
 * Title: header
 * Slug: cm-blocks/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0px"}},"color":{"background":"#e4e4e4"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#e4e4e4;margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-logo {"width":47,"shouldSyncIcon":true} /-->

<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://cmblocks.com/cm-blocks/"><?php echo __('Get Started', 'cm-blocks');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->