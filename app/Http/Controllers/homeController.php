<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\all_category;
use App\Models\hukum_news;

class homeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $pageSize = 20;
        $page = $request->get('page', 1);
        $skip = (($page - 1) * ($pageSize) + 1);
        $category = $request->get('category', 'notFound');
        $q = $request->get('q', 'notFound');
        
        try {
            $all_category = all_category::where('title', 'LIKE', '%' .$q. '%')
            ->orWhere('desc', 'LIKE', '%' .$q. '%')
            ->orWhere('category', $category)
            ->get();

            if($all_category !="" && count($all_category)>0) {
                return  [
                    'status' => "ok",
                    'totalResults' => count($all_category),
                    'page' => $page,
                    'articles' => $all_category->skip($skip)->take($pageSize),
                ];  
            } else {
                return response()->json([
                    'pesan'       => "Articles data not found",
                    'status_code'   => 403,
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json([
                'message'       => "Internal server error",
                'status_code'   => 500,
            ]);
        }
    }

    public function all_category(Request $request){
        $pageSize = 20;
        $page = $request->get('page', 1);
        $skip = (($page - 1) * ($pageSize) + 1);

        try {
            $all_category = all_category::all();

            if($all_category !="" && count($all_category)>0) {
                return  [
                    'status' => "ok",
                    'totalResults' => count($all_category),
                    'page' => $page,
                    'articles' => $all_category->skip($skip)->take($pageSize),
                ];  
            } else {
                return response()->json([
                    'pesan'       => "Articles data not found",
                    'status_code'   => 403,
                ]);
            }
        } catch (\Exception $ex) {
            return response()->json([
                'message'       => "Internal server error",
                'status_code'   => 500,
            ]);
        }

    }
}
