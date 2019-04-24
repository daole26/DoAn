<?php

namespace App\Http\Controllers\User;

use App\tour;
use App\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $slug)
    {
        $tour = tour::with(['comments' => function($query) {
            $query->orderBy('created_at', 'desc')->limit(3);
        }])->where('slug', $slug)->first();
        abort_if(!$tour, 404);
        $totalComment = comment::where('id_tour', $tour->id)->count();
        return view('tour.show', compact('tour', 'totalComment'));
    }
}
