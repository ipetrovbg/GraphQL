<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class GalleryType extends BaseType
{
    protected $attributes = [
        'name' => 'GalleryType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            
        ];
    }
}
