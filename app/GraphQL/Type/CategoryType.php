<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

class CategoryType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Category',
        'description' => 'Category type'
    ];

    public function fields()
    {
        return [
          'id' => [
            'name' => 'id',
            'type' =>  Type::int()
          ],
          'title' => [
            'name' => 'title',
            'type' =>  Type::string()
          ],
          'description' => [
            'name' => 'description',
            'type' =>  Type::string()
          ],
          'created_at' => [
            'name' => 'created_at',
            'type' =>  Type::string()
          ],
          'updated_at' => [
            'name' => 'updated_at',
            'type' =>  Type::string()
          ],
          'news' => [
            'type' => Type::listOf(GraphQL::type('News')),
            'description' => 'The id of news',
            'args' => [
                'limit' => [
                    'type'        => Type::int(),
                    'description' => 'The limit of the news',
                ]
            ],
          ]
        ];
    }

    protected function resolveNewsField($root, $args)
    {
      if (isset($args['id'])) {
          return  $root->news()->where('id', $args['id'])->get();
      } else if( isset($args['limit']) ) {
        return $root->news()->limit($args['limit'])->get();
      } else {
          return $root->news()->limit(50)->get();
      }

    }
}
