<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tour;
use App\hinh_thuc_tours;
use App\tin_tuc;

class SearchController extends Controller
{
	protected $modelTour;
	protected $modelHinhThuc;

	public function __construct(tour $modelTour, hinh_thuc_tours $modelHinhThuc)
	{
		$this->modelTour = $modelTour;
		$this->modelHinhThuc = $modelHinhThuc;
	}
    public function getSearch(Request $request)
    {
    	$name = $request->name;
    	$dataSearch = $this->modelTour->searchTour($name);
		$dataTourType = $this->modelHinhThuc->getAll();
		$new_tour= tour::orderBy('id','desc')->take(5)->get();
    	return view('user.search', compact('dataSearch', 'dataTourType','new_tour'));
    }
}
