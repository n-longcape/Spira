<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Idea;
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

    public function userIndex(Idea $idea) {
        $ideas = $idea->where('user_id', Auth::id())->get();
        return view('ideas.index', ['ideas' => $ideas]);
    } 

    /**
     * @param Idea $idea
     * @param Category $category
     * @return mixed
     */
    public function create(Idea $idea, Category $category)
    {
        return view('ideas.create', ['idea' => $idea, 'categories' => $category::all()]);
    }


    public function store(Request $request, Idea $idea)
    {
        $idea->category_id = $request->category;
        $idea->title = $request->title;
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
