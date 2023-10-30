<?php





class controller
{
    // public function home()
    // {
    //     echo "Home Page";
    // }

    public function __construct()
    {
        require_once('view/header.php');
        require_once('view/footer.php');
        // echo "home Page from construct";
    }
}


$controller = new controller;
// $controller->home();



















?>