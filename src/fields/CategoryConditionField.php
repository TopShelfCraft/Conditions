<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Category;
use craft\elements\conditions\categories\CategoryCondition;

class CategoryConditionField extends ElementConditionField
{

	public string $conditionType = CategoryCondition::class;
	public ?string $elementType = Category::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "Category Condition";
	}

}
