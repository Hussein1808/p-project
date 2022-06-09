<?php
class Pages extends Controller
{

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function main()
    {
        $viewPath = VIEWS_PATH . 'pages/main.php';
        require_once $viewPath;
        $mainView = new main($this->getModel(), $this);
        $mainView->output();
    }


}
