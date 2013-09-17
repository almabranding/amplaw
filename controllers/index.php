<?php

class Index extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->js = array('index/js/custom.js');
        $this->view->css = array('index/css/style.css');
    }
    
    function index() {
        $this->view->render('index/index');
    }
    
}