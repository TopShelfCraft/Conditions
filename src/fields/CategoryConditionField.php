<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Category;
use craft\elements\conditions\categories\CategoryCondition;

class CategoryConditionField extends ElementConditionField
{

	protected static string $conditionType = CategoryCondition::class;
	protected static string $elementType = Category::class;

}
