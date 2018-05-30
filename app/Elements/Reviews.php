<?php

namespace App\Elements;

use Curlyspoon\Cms\Libs\Element;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reviews extends Element
{
    protected $name = 'reviews';

    protected $required = [
        'headline',
        'reviews',
    ];

    protected $types = [
        'headline' => 'string',
        'reviews' => 'array[]',
    ];

    public function __construct(array $options = [])
    {
        parent::__construct($options);

        foreach($this->getOptions()['reviews'] as $review) {
            $resolver = new OptionsResolver();
            $resolver->setRequired(['rating', 'text', 'author']);
            $resolver->setAllowedTypes('rating', 'int');
            $resolver->setAllowedTypes('text', 'string');
            $resolver->setAllowedTypes('author', 'string');
            $resolver->setDefault('date', null);
            $resolver->setAllowedTypes('date', ['string', 'null']);
            $resolver->setAllowedValues('rating', [1,2,3,4,5]);
            $resolver->resolve($review);
        }
    }
}
