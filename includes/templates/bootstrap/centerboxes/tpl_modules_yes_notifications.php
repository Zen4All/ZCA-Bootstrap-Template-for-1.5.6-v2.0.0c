<?php
/**
 * Side Box Template
 * 
 * BOOTSTRAP v1.0.BETA
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_yes_notifications.php 2982 2006-02-07 07:56:41Z birdbrain $
 */

  echo '<div id="productNotifications-centerBoxContents" class="centerBoxContents card mb-3 text-center">';
  echo '<h4 id="productNotifications-centerBoxHeading" class="centerBoxHeading card-header">' . BOX_HEADING_NOTIFICATIONS . '</h4>';
  echo '<div id="productNotifications-card-body" class="card-body p-3 text-center">';
  echo '<a href="' . zen_href_link($_GET['main_page'], zen_get_all_get_params(array('action')) . 'action=notify_remove', $request_type) . '">' . zen_image(DIR_WS_TEMPLATE_IMAGES . OTHER_IMAGE_BOX_NOTIFY_REMOVE, OTHER_BOX_NOTIFY_REMOVE_ALT) . '<br />' . sprintf(BOX_NOTIFICATIONS_NOTIFY_REMOVE, zen_get_products_name($_GET['products_id'])) .'</a>';
  echo '</div>';
  echo '</div>';
?>