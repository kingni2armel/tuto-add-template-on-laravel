<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // creation de la function qui permet de renoyer au dashboard

    protected function getpageDashboard(){
        return view('dashboard');
    }
    // function qui renvoie a la page d'ajout d'un utilisateur
    protected function adduser(){
        return view('admin.user.add');
    }
}
