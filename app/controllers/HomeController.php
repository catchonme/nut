<?php
/**
* \HomeController
*/
class HomeController extends BaseController
{

  public function home()
  {
      echo "<h1>控制器成功</h1>";
  }

  public function index() {
      echo 'index page';
  }
}