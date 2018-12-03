<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{

    public function home()
    {
        $article = Article::first();

        require dirname(__FILE__).'/../views/home.php';

        echo "<h1>控制器成功！</h1>";
    }
}
