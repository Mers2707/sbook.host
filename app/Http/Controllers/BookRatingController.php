<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRatingRequest;
use App\Http\Requests\UpdateBookRatingRequest;
use App\Models\BookRating;

class BookRatingController extends Controller
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
     * @param  \App\Http\Requests\StoreBookRatingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRatingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function show(BookRating $bookRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function edit(BookRating $bookRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRatingRequest  $request
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRatingRequest $request, BookRating $bookRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookRating  $bookRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookRating $bookRating)
    {
        //
    }
}
