<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class TagsType extends BaseType
{
    protected $attributes = [
        'name' => 'TagsType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            
        ];
    }
}
