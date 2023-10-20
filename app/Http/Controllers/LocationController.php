<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function getDistricts($divId){
        $dist = DB::table('districts')
                ->where('division_id','=',$divId)
                ->get();
        return response()->json([
            'districts' => $dist
        ]);
    }
    // public function getDivisions(){
    //     $divi = DB::table('divisions')
    //             ->get();
    //     return response()->json([
    //         'divisions' => $divi,
    //     ]);
    // }
}