<?php

namespace App\Pages;

use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Home extends PageData implements Routable
{
    use PageHasContent, PageHasSlug, PageHasUrl;

    /** @var array */
    public $range;

    /** @var array */
    public $imagesWithText;

    /** @var array */
    public $reviews;

    public function getUrl(): string
    {
        return url('/');
    }
}
