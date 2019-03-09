<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagsController extends Controller
{

    /**
     * Tag
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function index(Tag $tag)
    {
        return response($tag::all());
    }
}
