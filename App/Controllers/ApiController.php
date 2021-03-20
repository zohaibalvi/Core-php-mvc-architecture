<?php

namespace App\Controllers;

use App\Models\User;
use \Core\Controller;


class ApiController extends Controller
{

    public function index()
    {
        //Call user Model
        $result = User::getUsers();
        // $result = array();
        // Return APi responce in json the view template
        return apiResponse($result,200);
    }
}
