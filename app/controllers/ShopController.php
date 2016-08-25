<?php

class ShopController extends Controller
{
    public function indexAction(){
        $this->view->render("shop/index");
    }
}
