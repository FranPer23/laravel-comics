<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function index()
    {
        $movies = movie::all();
        return view('home', compact('movie'));
    }
}
