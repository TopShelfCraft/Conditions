<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\entries\EntryCondition;
use craft\elements\Entry;

class EntryConditionField extends ElementConditionField
{

	protected static string $conditionType = EntryCondition::class;
	protected static string $elementType = Entry::class;

}
