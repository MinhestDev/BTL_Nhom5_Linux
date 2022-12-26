<?php
$page_title = 'Trang chủ';
require_once('includes/load.php');
if (!$session->isUserLoggedIn(true)) {
  redirect('index.php', false);
}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
  <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
        <h1>Đây là trang chủ mới!</h1>
        <p>Chỉ cần lướt qua và tìm ra trang nào bạn có thể truy cập.</p>
      </div>
    </div>
  </div>
</div>
<?php include_once('layouts/footer.php'); ?>