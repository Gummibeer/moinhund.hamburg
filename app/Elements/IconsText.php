<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IconsText extends Element
{
    protected $name = 'icons_text';

    protected $required = [
        'headline',
        'icons',
        'text',
    ];

    protected $types = [
        'headline' => 'string',
        'icons' => 'array[]',
        'text' => 'string',
    ];

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        foreach($this->getOptions()['icons'] as $icon) {
            $resolver = new OptionsResolver();
            $resolver->setRequired(['icon', 'label']);
            $resolver->setAllowedTypes('icon', 'string');
            $resolver->setAllowedTypes('label', 'string');
            $resolver->resolve($icon);
        }
    }
}
