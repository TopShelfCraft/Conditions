<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\tags\TagCondition;
use craft\elements\Tag;

class TagConditionField extends ElementConditionField
{

	protected static string $conditionType = TagCondition::class;
	protected static string $elementType = Tag::class;

}
