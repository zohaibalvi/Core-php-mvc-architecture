<?php

namespace App\Controllers;

use \Core\View;
use App\Models\User;
use \Core\Controller;


class HomeController extends Controller
{

    public function index()
    {
        //Call user Model
        // $result = User::getUsers();

        // Render the view template
        View::renderTemplate('Home/index.php');
    }
}
