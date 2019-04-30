<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tour;
use App\hinh_thuc_tours;

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
    	return view('user.search', compact('dataSearch', 'dataTourType'));
    }
}
