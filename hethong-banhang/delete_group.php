<?php
require_once('includes/load.php');
// Checkin What level user has permission to view this page
page_require_level(1);
?>
<?php
$delete_id = delete_by_id('user_groups', (int)$_GET['id']);
if ($delete_id) {
  $session->msg("s", "Nhóm đã bị xóa.");
  redirect('group.php');
} else {
  $session->msg("d", "Xóa nhóm không thành công.");
  redirect('group.php');
}
?>
