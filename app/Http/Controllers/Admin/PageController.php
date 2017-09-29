<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return Page::all(['id','name','slug']);
    }
    public function edit($id){
        $page =  Page::find($id);
        $page->args = json_decode($page->args);
        return $page;

    }
    public function update(Request $request,Page $page){
    $args = [];

        foreach ($request->args as $item){
            $args[$item['name']] = $item['value'];
        }
         $request->merge(['args'=>json_encode($args)]);
        $page =   $page->update($request->all());


    }
}
