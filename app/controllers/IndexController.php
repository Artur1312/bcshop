<?php

class IndexController extends Controller
{
    public function indexAction(){
//        $this->view->template = null;
        
        $products = new Products();
        $data = $products->get_products();
        $this->view->render("index", ["products"=>$data]);
    }
}