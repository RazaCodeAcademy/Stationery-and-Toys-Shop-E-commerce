<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index(){
        Mapper::map(0, 0, ['marker' => false, 'zoom' => 17, 'markers' => ['title' => 'You are here', 'animation' => 'DROP', 'icon' => 'http://app.sesami.fr/images/marker-black.svg']]);
        Mapper::informationWindow(31.3695, 74.1768, 'Location 1<hr>Location 2', ['open' => true, 'markers' => ['title' => 'Title']]);

        return view('Map.index');
    }
}
