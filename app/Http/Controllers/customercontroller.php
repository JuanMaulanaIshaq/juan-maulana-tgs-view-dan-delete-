<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customercontroller extends Controller
{
    public function index() {
        $items = customer::all();
        return view('tampilan.customer', compact('items'));
    }

    public function delete($id) {
        customer::destroy($id);
        return redirect()->back();
    }
}
