<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;

class ImageText extends Element
{
    protected $name = 'image_text';

    protected $required = [
        'direction',
        'image',
        'icons',
        'headline',
        'text',
    ];

    protected $types = [
        'direction' => 'string',
        'image' => 'string',
        'position' => 'string',
        'icons' => 'string',
        'headline' => 'string',
        'text' => 'string',
    ];

    protected $defaults = [
        'position' => 'center',
    ];

    protected $values = [
        'direction' => ['ltr', 'rtl'],
        'position' => ['top', 'center', 'bottom'],
    ];

    protected $normalizers = [
        'image' => 'url',
    ];
}
