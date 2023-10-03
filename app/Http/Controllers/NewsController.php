<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->usertype == '0') {
            $newss=News::paginate(4);
            $categories=Category::all();
            return view('user.news.index',compact('newss','categories'));
        } else {
            $categories = Category::all();
            return view('dashboard.news.create', compact('categories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = News::create([$request->all()]);
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $coverName = time() . '.' . $cover->extension();
            $cover->storeAs('public/covers', $coverName);
            $news->image = $coverName;
        }
        if ($news->save()) {
            return redirect()->route('home')->with('success', 'Adding news successfuly');
        } else
            return back()->with('error', 'error in adding news');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
