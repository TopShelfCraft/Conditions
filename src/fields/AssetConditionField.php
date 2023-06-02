<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Asset;
use craft\elements\conditions\assets\AssetCondition;

class AssetConditionField extends ElementConditionField
{

	protected static string $conditionType = AssetCondition::class;
	protected static string $elementType = Asset::class;

}
