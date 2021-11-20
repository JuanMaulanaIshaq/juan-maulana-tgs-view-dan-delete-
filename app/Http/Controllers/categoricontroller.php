<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categori;

class categoricontroller extends Controller
{
    public function index() {
        $items = categori::all();
        return view('tampilan.data', compact('items'));
    }

    public function delete($id) {
        categori::destroy($id);
        return redirect()->back();
    }
}
