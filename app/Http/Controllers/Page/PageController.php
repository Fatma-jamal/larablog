<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page\Page;
use App\Services\Page\PageService;

class PageController extends Controller
{
    function __construct(private PageService $service){}

    public function show(string $slug)
    {
        
        $page = $this->service->view($slug);
        if($page == null){
            return view('front.notfound');
        }
        return view('front.page.page'); 
    }

    public function add(Page $page)
    {

    }
}
