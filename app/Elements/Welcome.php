<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;

class Welcome extends Element
{
    protected $name = 'welcome';

    protected $required = [
        'background',
        'logo',
    ];

    protected $types = [
        'background' => 'string',
        'logo' => 'string',
    ];
}
