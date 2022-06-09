
<?php
class main extends View
{
  public function output()
  {
    require APPROOT . '/views/inc/header.php';
?>
  <h1>hello</h1>
<?php
    require APPROOT . '/views/inc/footer.php';
  }
}
?>