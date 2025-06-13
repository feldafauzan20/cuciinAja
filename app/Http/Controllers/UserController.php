<?php

namespace App\Http\Controllers;

use App\Models\ProductCatalog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {
        // Logic to retrieve user data
        $users = Auth::user(); // Get the currently authenticated user
        // dd($users); // Debugging line to check user data

        $products = ProductCatalog::all();

        // dd($products);

        // Return a view with the user data
        return view('home', compact('users', 'products'));
    }
}