<?php

// app/Http/Controllers/LocaleController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function switch($locale)
    {
        if (in_array($locale, ['en', 'es'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}