<?php

namespace App\Controllers;

use Core\Controller;
use Core\Model;

class HomeController extends Controller
{
       public function index()
       {
              // you can add your function in helper.php file and use it here for any condition for restricting the access to the page
              $model = new Model();
              $this->view('home');
       }
       public function about()
       {
              $this->view('about');
       }

}