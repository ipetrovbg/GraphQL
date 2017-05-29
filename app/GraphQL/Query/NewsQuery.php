<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\News;

class NewsQuery extends Query
{
    protected $attributes = [
        'name' => 'NewsQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('News'));
    }

    public function args()
    {
         return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'user_id' => ['name' => 'user_id', 'type' => Type::int()],
            'title' => ['name' => 'title', 'type' => Type::string()],
            'content' => ['name' => 'content', 'type' => Type::string()],
            'user' => ['name' => 'user', 'type' => GraphQL::type('User')]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return News::all();
    }
}
