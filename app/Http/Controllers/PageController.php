<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page(Request $request)
    {
        $page = Page::where('slug',$request->slug)->first();
        $page->args = json_decode($page->args);
        return $page;
    }
}
