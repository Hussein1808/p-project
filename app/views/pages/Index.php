<script  src="http://localhost/p-project/public/js/main.js"></script>
<?php
class Index extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
?>
  <div class="container">
    <a href="<?php echo URLROOT . 'pages/main.php'; ?>">
      <h1>Hussein Hashad</h1>
      <h1>Art</h1>
    <a>

  </div>
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>