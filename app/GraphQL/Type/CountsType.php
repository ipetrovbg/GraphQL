<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CountsType extends BaseType
{
    protected $attributes = [
        'name' => 'CountsType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            
        ];
    }
}
