<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Services\DogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DogController extends Controller
{

    public function __construct(private DogService $dogService)
    {
        $this->middleware('auth');
        $this->dogService = $dogService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $count = $request->count ?: 10;

        $dogsArray = [];

        $dogs = json_decode($this->dogService->getRequest('breeds/list/all'), true)['message'];
        $dogs = array_slice($dogs, 0, $count);
        $dogsArray = [];
        foreach ($dogs as $key => $value) {

            $image_src = json_decode($this->dogService->getRequest('breed/' . $key . '/images/random'), true)['message'];

            $dogCountLikes = Vote::where('dog_name', $key)->count();

            $dogsArray[] = [
                'name' => $key,
                'image_src' => $image_src,
                'likes' => $dogCountLikes
            ];
        }

        return view('dogs.index', compact('dogsArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $name = $id;
        $image_src = json_decode($this->dogService->getRequest('breed/' . $name . '/images/random'), true)['message'];

        $voteUser = Vote::where([
            ['user_id', auth()->user()->id],
            ['dog_name', $name],
        ])->first();

        $voted = false;

        if ($voteUser) {
            $voted = true;
        }

        return view('dogs.show', compact('image_src', 'name', 'voted'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
