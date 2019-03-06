<?php

namespace App\Services;


use App\Category;

final class CategoriesForSidebar
{
    public function show_categories()
    {

        foreach (Category::distinct()->get(['categories', 'key']) as $category) {


            echo '<a href=" ' . route('posts-by-category', $category->key) . '">' . $category->categories . '</a> ';
        }


    }
}