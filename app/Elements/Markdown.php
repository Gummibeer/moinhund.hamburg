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
        'align' => 'string',
    ];

    protected $defaults = [
        'align' => 'left',
    ];

    protected $values = [
        'align' => ['left', 'center', 'right'],
    ];
}
