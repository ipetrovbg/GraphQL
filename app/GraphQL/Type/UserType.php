<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;
use Illuminate\Support\Facades\Auth;


class UserType extends GraphQLType
{
    protected $attributes = [
       'name' => 'User',
		   'description' => 'A user'
    ];

    public function fields()
	{
		return [
			'id' => [
				'type' => Type::nonNull(Type::string()),
				'description' => 'The id of the user'
			],
      'me' => [
        'type' => GraphQL::type('User'),
				'description' => 'The authenticated user'
      ],
			'email' => [
				'type' => Type::string(),
				'description' => 'The email of user'
			],
			'name' => [
				'type' => Type::string(),
				'description' => 'The name of user'
			],
			'news' => [
				'type' => Type::listOf(GraphQL::type('News')),
				'args' => [
                    'id' => [
                        'type'        => Type::int(),
                        'description' => 'id of the news',
                    ]
                ],
				'description' => 'The news of the user'
			]
		];
	}


	// If you want to resolve the field yourself, you can declare a method
	// with the following format resolve[FIELD_NAME]Field()
	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->email);
	}

  protected function resolveMeField($root, $args)
	{
		return Auth::user();
	}

	protected function resolveNewsField($root, $args)
	{
		if (isset($args['id'])) {
        return  $root->news->where('id', $args['id']);
    }
		return $root->news;
	}

}
