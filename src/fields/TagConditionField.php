<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\conditions\tags\TagCondition;
use craft\elements\Tag;

class TagConditionField extends ElementConditionField
{

	public string $conditionType = TagCondition::class;
	public ?string $elementType = Tag::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "Tag Condition";
	}

}
