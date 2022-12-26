<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(2);
?>
<?php
$product = find_by_id('products', (int)$_GET['id']);
if (!$product) {
  $session->msg("d", "Thiếu mã sản phẩm.");
  redirect('product.php');
}
?>
<?php
$delete_id = delete_by_id('products', (int)$product['id']);
if ($delete_id) {
  $session->msg("s", "Đã xóa sản phẩm.");
  redirect('product.php');
} else {
  $session->msg("d", "Xóa sản phẩm không thành công.");
  redirect('product.php');
}
?>