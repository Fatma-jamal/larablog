<?php

namespace App\Services\Page;

use App\Models\Page\Page;

class PageService {

    public function view(string $slug) : ?Page
    {

        return null;
    }

    public function update(string $slug, Page $page) : ?Page
    {

        return null;
    }

    public function detete(string $slug) : bool
    {

        return false;
    }

    public function create(Page $page) : Page
    {

        return $page;
    }
}