<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use App\Models\Vote;
use App\Services\DogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
    public function index()
    {
        $users = User::with('votes')->get();

        return view('users.index', compact('users'));
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
        $user = User::findOrFail($id);

        $votesUserArray = [];

        $votesUserData = DB::table('votes')
            ->where('user_id', $id)
            ->select('dog_name')
            ->groupBy('dog_name')
            ->get();

        foreach ($votesUserData as $item) {
            $image_src = json_decode($this->dogService->getRequest('breed/' . $item->dog_name . '/images/random'), true)['message'];

            $vouteCountLikes = Vote::where('dog_name', $item->dog_name)->count();

            $votesUserArray[] = [
                'name' => $item->dog_name,
                'image_src' => $image_src,
                'likes' => $vouteCountLikes
            ];
        }

        return view('users.show', compact('user', 'votesUserArray'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id)->update([
            'name' => $request->name,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
        ]);

        return redirect()->route('users.show', $id);
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
