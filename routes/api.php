<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\News;

//при обращении на данный роут возвращаем новости 
Route::get('news', function () {
    $news = News::all();
    return $news;
});
