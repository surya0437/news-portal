<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct(){
        $company = Company::first();
        View::share([
            'company'=>$company        ]);
    }

    public function index()
    {
        return view('Frontend.index');
    }
}
