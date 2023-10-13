<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function index()
    {
       //Truy vấn dữ liệu
       $categories = Category::all();
       //Đổ ra view
       return view('categories.index', compact('categories'));
    }
}
