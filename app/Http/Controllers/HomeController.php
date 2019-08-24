<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Task;
use App\Categories;

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
           
        
       $data = DB::table('items')
                ->join('categories', 'categories.cat_id', '=', 'items.it_id')
                ->select('items.it_id','items.it_name','items.price','categories.cat_name','categories.aisle')
                ->paginate(20);
                return view('home',compact('data'));
      
    }

    public function usersList()
    {   
        $usersQuery = DB::table('items')
                ->join('categories', 'categories.cat_id', '=', 'items.it_id')
                ->select('items.it_id','items.it_name','items.price','categories.cat_name','categories.aisle')
                ->paginate(20);

        $aisle = (!empty($_GET["aisle"])) ? ($_GET["aisle"]) : ('');
        

        if($aisle){
    
         $aisle = date('Y-m-d', strtotime($aisle));
     
         
         $usersQuery->whereRaw("date(users.created_at) >= '" . $aisle . "' AND date(users.created_at) <= '" . $end_date . "'");
        }
        $users = $usersQuery->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}
