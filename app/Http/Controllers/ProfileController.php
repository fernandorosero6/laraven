<?php

namespace App\Http\Controllers;
use App\Models\profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function index(){
    $temp = Profile::find(1);
    return $temp->user;
  }
}
