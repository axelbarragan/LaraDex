<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;
use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller
{
    public function prueba($param) {
    	return 'Estoy dentro de un controller y recibi: '.$param;
    }
}
