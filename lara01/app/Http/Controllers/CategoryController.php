<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
public function index (){
    $categories =Category::all;
    return view ('categories.index', compact(var_name: 'categories'));
}
?>