<?php

namespace App\Http\Controllers;

use  App\Models\Menu;
use App\Models\area;
use App\Models\Sales;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        $menu = Menu::get();
        return view('order', compact('menu'));
    }

    public function foodOrder()
    {
        return view('food_order');
    }

    public function checkOut()
    {   
        $area =area::get();
        return view('food_order_checkout', compact('area'));
    }

    public function addToCart($id)
    {   
        $food = Menu::find($id);
        $menu = session()->get('menu');

        $menu[$id] = [
            "name" => $food->name,
            "price" => $food->price,
            "quantity" => 1,
        ];
        session()->put('menu', $menu);
        return redirect()->back()->with('success', 'food added to cart successfully');
    }

    public function storeSales()
    {
        // if (session('menu')) {
        //     // Get the currently authenticated user (if you want to associate the sale with a user)
        //     $user = auth()->user();
    
        //     foreach (session('menu') as $id => $item) {
        //         Sales::create([
        //             'item_name' => $item['name'],
        //             'price' => $item['price'],
        //             'qty' => $item['quantity'],
        //             'user_id' => $user->id, // Replace with the appropriate user ID
        //             // Add other data as needed
        //         ]);
        //     }
    
        //     // Redirect or return a response as needed
        // }
        try {
            if (session('menu')) {
                // Get the currently authenticated user (if you want to associate the sale with a user)
                $user = auth()->user();
    
                foreach (session('menu') as $id => $item) {
                    Sales::create([
                        'item_name' => $item['name'],
                        'price' => $item['price'],
                        'qty' => $item['quantity'],
                        'user_id' => $user->id, 
                        'user_name' => $user->name, 
                        
                        
                    ]);
                }
    
                // Redirect or return a success message
                 return back()->with('success', 'Sale successfully recorded.');
            }
        } catch (\Exception $e) {
            // Handle the exception, you can log it or display an error message
            return back()->with('error', 'An error occurred while recording the sale.');
        }
    }
}
