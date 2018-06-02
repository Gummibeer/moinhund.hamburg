<?php

namespace App\Elements;

use Curlyspoon\Cms\Contracts\NormalizerManager;
use Curlyspoon\Cms\Libs\Element;
use Symfony\Component\OptionsResolver\OptionsResolver;

class IconsText extends Element
{
    protected $name = 'icons_text';

    protected $required = [
        'headline',
        'icons',
        'text_1',
        'text_2',
    ];

    protected $types = [
        'headline' => 'string',
        'icons' => 'array[]',
        'text_1' => 'string',
        'text_2' => 'string',
    ];

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        foreach($this->options['icons'] as $i => $icon) {
            $resolver = new OptionsResolver();
            $resolver->setRequired(['icon', 'adjective', 'label']);
            $resolver->setAllowedTypes('icon', 'string');
            $resolver->setNormalizer('icon', app(NormalizerManager::class)->normalizer('url'));
            $resolver->setAllowedTypes('adjective', 'string');
            $resolver->setAllowedTypes('label', 'string');
            $this->options['icons'][$i] = $resolver->resolve($icon);
        }
    }
}
