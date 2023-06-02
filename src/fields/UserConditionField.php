<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\users\UserCondition;
use craft\elements\User;

class UserConditionField extends ElementConditionField
{

	protected static string $conditionType = UserCondition::class;
	protected static string $elementType = User::class;

}
