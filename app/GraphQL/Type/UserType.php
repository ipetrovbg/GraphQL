<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL;

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
			'email' => [
				'type' => Type::string(),
				'description' => 'The email of user'
			],
			'name' => [
				'type' => Type::string(),
				'description' => 'The name of user'
			]
		];
	}


	// If you want to resolve the field yourself, you can declare a method
	// with the following format resolve[FIELD_NAME]Field()
	protected function resolveEmailField($root, $args)
	{
		return strtolower($root->email);
	}

}