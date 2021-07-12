<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Service\HomeService;

class UsrHomeController extends Controller
{
    private ArticleService $homeService;

 

    public function actionShowAboutMe()
    {
        require_once $this->getViewPath("usr/home/aboutMe");
    }


}