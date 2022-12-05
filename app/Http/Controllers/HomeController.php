<?php

namespace App\Http\Controllers;

use App\Services\DogService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private DogService $dogService)
    {
        $this->middleware('auth');
        $this->dogService = $dogService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dogs = json_decode($this->dogService->getRequest('breeds/list/all'), true)['message'];
        $dogs = array_slice($dogs, 0 ,10);

        $dogsArray = [];

        foreach ($dogs as $key => $value) {

            $image_src = json_decode($this->dogService->getRequest('breed/'. $key .'/images/random'), true)['message'];

            $dogsArray[] = [
                'name' => $key,
                'image_src' => $image_src
            ];
        }

        // return $dogsArray;
        return view('home', compact('dogsArray'));
    }
}
