<?php

class LoginController extends Controller
{
    public function indexAction(){
        $this->view->template = null;
        $this->view->render("login/index");
    }
}
