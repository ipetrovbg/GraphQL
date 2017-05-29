<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class NewsType extends GraphQLType
{
    protected $attributes = [
        'name' => 'News',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                    'type' => Type::int(),
                    'description' => 'The id of news'
                ],
            'user_id' => [
            	'type' => Type::int(),
				'description' => 'The user id of news'
            ],
            'title' => [
            	'type' => Type::string(),
            	'description' => 'The title of news'
            ],
            'content' => [
            	'type' => Type::string(),
            	'description' => 'The content of an news'
            ],
            'author' => [
                'type' => GraphQL::type('User'),
                'description' => 'The user of an news'
            ]
        ];
    }

    protected function resolveAuthorField($root, $args)
    {
        return $root->user;
    }
}
