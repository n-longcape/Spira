<?php

namespace App\Http\Controllers;

use App\Http\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{

    /**
     * @param Idea $idea
     * @return mixed
     */
    public function index(Idea $idea)
    {
        $ideas = $idea->all();
        return view('ideas.index', ['ideas' => $ideas]);

    }

    /**
     * @param Idea $idea
     * @return mixed
     */
    public function create(Idea $idea)
    {
        return view('ideas.create', ['idea' => $idea]);
    }


    public function store(Request $request, Idea $idea)
    {
        $idea->description = $request->description;
        $idea->user_id = Auth::id();
        $idea->save();

        return redirect('ideas/' . $idea->id);
    }

    /**
     * @param Idea $idea
     * @return mixed
     */
    public function show(Idea $idea)
    {
        return view('ideas.show', ['idea' => $idea]);
    }

}
