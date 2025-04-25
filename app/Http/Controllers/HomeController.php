<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = Carbon::now();
        $date2 = Carbon::now();
        $date = $date->format('Y-m-d 00:00:00');
        $date2 = $date2->format('Y-m-d 23:59:59');

        $total_caja = DB::table('facturas')
        ->select(DB::raw('SUM(facturas.total)as total'))
        ->whereDate('created_at', '>=', $date)
        ->whereDate('updated_at', '<=', $date2)
        ->where('estado','=',1)
        ->get();
        
        $total_mes = DB::table('facturas')
        ->select(DB::raw('SUM(facturas.total)as total'))
        
        ->whereRaw('month(created_at) = month(now())')
        ->whereRaw('year(created_at) = year(now())')  
        ->where('estado','=',1)
        ->get();

        // dd($total_mes);


        return view('home',compact('total_caja','total_mes'));
    }
}
