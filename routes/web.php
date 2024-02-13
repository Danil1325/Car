<?php

use Illuminate\Support\Facades\Route;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

class CarController extends Controller
{
    public function index() {
        $cars=Car::all();
        return view('car.index',['car'=>$users]);
    }
}
