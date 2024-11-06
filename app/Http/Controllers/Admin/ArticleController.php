<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles-create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles-show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles-edit');
    }

    public function comments()
    {
        return view('admin.articles-comments');
    }
}