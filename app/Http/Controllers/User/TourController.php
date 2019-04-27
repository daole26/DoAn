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
        $count = tour::count();
        return view('tour.index', compact('count'));
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

    /**
     * Load more tours
     */
    public function loadMore(Request $request)
    {
        try {
            $tours = tour::with(['hinhThucTour', 'hinhAnhs'])
                ->skip($request->index)
                ->limit($request->index == 0 ? 12 : 4) //Fist loading
                ->get();
                return response()->json($tours, 200);
        } catch (\Exception $e) {
            \Log::error($e);
            return response()->json('Error', 500);
        }
    }
}
