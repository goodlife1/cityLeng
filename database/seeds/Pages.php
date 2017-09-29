<?php

use Illuminate\Database\Seeder;

class Pages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new \App\Page();
        $home_args=json_encode([
            'paymant'=>'<h3 class="head-sl1">this content</h3><p>Content</p>',
            'quality'=>'<h3 class="head-sl1">this content</h3><p>Content</p>',
            'time'=>'<h3 class="head-sl1">this content</h3><p>Content</p>',
        ]);
        $page->name = 'Home';
        $page->meta = ' ';
        $page->slug = '/';
        $page->content = '';
        $page->args = $home_args;
        $page->save();
    }
}
