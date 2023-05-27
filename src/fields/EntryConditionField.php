<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\entries\EntryCondition;
use craft\elements\Entry;

class EntryConditionField extends ElementConditionField
{

	public string $conditionType = EntryCondition::class;
	public ?string $elementType = Entry::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "Entry Condition";
	}

}
