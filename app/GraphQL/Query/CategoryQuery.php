<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Category;

class CategoryQuery extends Query
{
    protected $attributes = [
        'name' => 'category',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Category'));
    }

    public function args()
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
          ]
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {

              if(isset($args['id']))
              {
                  return Category::where('id' , $args['id'])->get();
              }
              else if(isset($args['title']))
              {
                  return Category::where('title', 'like', '%' . $args['title'] . '%')->get();
              }
              else
              {
                  return Category::all();
              }
    }
}
