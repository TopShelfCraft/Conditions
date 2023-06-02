<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Address;
use craft\elements\conditions\addresses\AddressCondition;

class AddressConditionField extends ElementConditionField
{

	protected static string $conditionType = AddressCondition::class;
	protected static string $elementType = Address::class;

}
