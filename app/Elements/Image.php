<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;

class Image extends Element
{
    protected $name = 'image';

    protected $required = [
        'image',
    ];

    protected $types = [
        'image' => 'string',
        'position' => 'string',
        'ratio' => 'string',
    ];

    protected $defaults = [
        'position' => 'center',
        'ratio' => '26by9',
    ];

    protected $values = [
        'position' => ['top', 'center', 'bottom'],
        'ratio' => ['16by9', '21by9', '26by9'],
    ];

    protected $normalizers = [
        'image' => 'url',
    ];
}
