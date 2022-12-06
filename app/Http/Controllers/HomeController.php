<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Services\DogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $votesArray = DB::table('votes')
            ->select('dog_name', DB::raw('count(*) as likes'))
            ->groupBy('dog_name')
            ->get();

        $dogsArray = [];

        if ($votesArray->count() != 0) {
            foreach ($votesArray as $item) {
                $image_src = json_decode($this->dogService->getRequest('breed/' . $item->dog_name . '/images/random'), true)['message'];

                $dogsArray[] = [
                    'name' => $item->dog_name,
                    'image_src' => $image_src,
                    'likes' => $item->likes,
                ];
            }
        } else {
            $dogs = json_decode($this->dogService->getRequest('breeds/list/all'), true)['message'];
            $dogs = array_slice($dogs, 0, 10);

            foreach ($dogs as $key => $value) {

                $image_src = json_decode($this->dogService->getRequest('breed/' . $key . '/images/random'), true)['message'];

                $dogsArray[] = [
                    'name' => $key,
                    'image_src' => $image_src,
                    'likes' => 0,
                ];
            }
        }

        $votesUserArray = [];

        $votesUserData= DB::table('votes')
            ->where('user_id', auth()->user()->id)
            ->select('dog_name')
            ->groupBy('dog_name')
            ->get();

            foreach ($votesUserData as $item) {
                $image_src = json_decode($this->dogService->getRequest('breed/' . $item->dog_name . '/images/random'), true)['message'];

                $vouteCountLikes = Vote::where('dog_name', $item->dog_name)->count();

                $votesUserArray[] =[
                    'name' => $item->dog_name,
                    'image_src' => $image_src,
                    'likes' => $vouteCountLikes
                ];
            }

        return view('home', compact('dogsArray', 'votesUserArray'));
    }
}
