<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookCommentRequest;
use App\Http\Requests\UpdateBookCommentRequest;
use App\Models\BookComment;

class BookCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBookCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookComment  $bookComment
     * @return \Illuminate\Http\Response
     */
    public function show(BookComment $bookComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookComment  $bookComment
     * @return \Illuminate\Http\Response
     */
    public function edit(BookComment $bookComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookCommentRequest  $request
     * @param  \App\Models\BookComment  $bookComment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookCommentRequest $request, BookComment $bookComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookComment  $bookComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookComment $bookComment)
    {
        //
    }
}
