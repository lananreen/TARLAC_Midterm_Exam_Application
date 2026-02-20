<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = [
            [
                'Title' => 'The Love Hypothesis',
                'Author' => 'Ali Hazelwood',
                'Genre' => 'Romance'
            ],
            [
                'Title' => 'It Happened One Summer',
                'Author' => 'Tessa Bailey',
                'Genre' => 'Romance'
            ],
            [
                'Title' => 'Fangirl Down',
                'Author' => 'Tessa Bailey',
                'Genre' => 'Romance'
            ]
        ];
        return view('products.index', compact('products'));
    }
}