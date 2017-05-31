<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CommentsType extends BaseType
{
    protected $attributes = [
        'name' => 'CommentsType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            
        ];
    }
}
