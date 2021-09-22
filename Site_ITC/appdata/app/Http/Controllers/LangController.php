<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class LangController extends Controller
{
    //Analyse de langues
    public function langroute(Request $request){

        //on recupere la langue demander
        //////Route::getRoutes()->getRoutesByName()
        $url = url()->previous();//url recupere
        $route_base =env('APP_URL'); //url de base
        $route = Str::afterLast($url,$route_base); //recupere le url apres avoir enlever la base url
        //convertir en array
        $r_array=explode('/',$route);
        $newlang = $request->selectlang;//langue demande
        $oldlang = @$r_array[0];
        $lasturl = @$r_array[1];


        //New full url
         $fullnewroute = $route_base.$newlang.'/'.$lasturl;


        //dd($fullnewroute);
        return redirect()->to($fullnewroute);
    }

}
