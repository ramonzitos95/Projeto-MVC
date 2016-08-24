<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

/**
 * Description of IndexController
 *
 * @author Ramon
 */
class IndexController {
    public function index()
    {
        $cars = array("Mustang", "Ferrari", "Ford");
        include_once "../App/Views/index/index.phtml";
    }
    
    public function contact()
    {
        $cars = array("Mustang", "Ferrari", "Ford");
        include_once "../App/Views/index/contact.phtml";
    }
}
