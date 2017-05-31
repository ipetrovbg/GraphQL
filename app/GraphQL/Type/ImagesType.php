<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class ImagesType extends BaseType
{
    protected $attributes = [
        'name' => 'ImagesType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            
        ];
    }
}
