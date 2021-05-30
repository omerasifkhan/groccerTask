<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RestaurantController extends Controller
{

    public function restaurant($id)
    {
        $data= DB::table('menus')->where('restaurant_id', $id)->paginate(3);
        //$data=  DB::table('restaurants')->paginate(5);
        //$data= $id;
        return view('data',['name' => $data]);
    }
    public function addFood($id, Request $request)
    {

        $food = $request->input('Item');
        $category = $request->input('Category');

        DB::table('menus')->insert([
            'restaurant_id' => $id,
            'Item' => $food,
            'Category' => $category,
        ]);

        return response()->json([
            'Status' => 'Success',
        ]);

    }

}
