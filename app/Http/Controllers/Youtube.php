<?php

namespace App\Http\Controllers;

use App\Events\VideoViewar;
use App\Models\Video;
use Illuminate\Http\Request;

class Youtube extends Controller
{
  public function getvideo()
  {
   $video= Video::first();
   event(new VideoViewar($video));
     return view('youtube')->with('videos',$video);
  }
}
