<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Tag;

class KeywordController extends Controller
{

    /**
     * Keyword検索のAutocomplete用API
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category, Tag $tag, Idea $idea)
    {
        $categories = $category->select('name')->get()->toArray();
        $tags = $tag->select('name')->get()->toArray();
        $ideas = $idea->select('title as name')->get()->toArray();
        return response(array_merge($categories, $tags, $ideas));
    }
}
