<?php

namespace App\Pages;

use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Page extends PageData implements Routable
{
    use PageHasContent, PageHasSlug, PageHasUrl;

    /** @var string */
    public $title;

    public function getUrl(): string
    {
        return url($this->slug);
    }
}
