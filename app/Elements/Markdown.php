<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;

class Markdown extends Element
{
    protected $name = 'markdown';

    protected $required = [
        'file',
    ];

    protected $types = [
        'file' => 'string',
    ];
}
