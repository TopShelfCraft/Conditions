<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Address;
use craft\elements\conditions\addresses\AddressCondition;

class AddressConditionField extends ElementConditionField
{

	public string $conditionType = AddressCondition::class;
	public ?string $elementType = Address::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "Address Condition";
	}

}
