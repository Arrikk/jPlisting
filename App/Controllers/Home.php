<?php

namespace App\Controllers;

use Core\Controller;
use Core\Http\Res;
use Core\View;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

class Home extends Controller
{
  public function index()
  {
    View::render("login.html");
  }
  public function dashboard()
  {
    View::draw('dashboard/index');
  }


  public function chat()
  {
    View::draw('ai/chat');
  }
  public function test()
  {
    View::draw('ai/test');
  }


}
