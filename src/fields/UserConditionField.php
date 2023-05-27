<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\users\UserCondition;
use craft\elements\User;

class UserConditionField extends ElementConditionField
{

	public string $conditionType = UserCondition::class;
	public ?string $elementType = User::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "User Condition";
	}

}
