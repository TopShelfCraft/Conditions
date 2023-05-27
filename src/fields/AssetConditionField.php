<?php
namespace TopShelfCraft\Conditions\fields;

use craft\elements\Asset;
use craft\elements\conditions\assets\AssetCondition;

class AssetConditionField extends ElementConditionField
{

	public string $conditionType = AssetCondition::class;
	public ?string $elementType = Asset::class;

	/*
	 * Static
	 */

	/**
	 * @inheritdoc
	 */
	public static function displayName(): string
	{
		return "Asset Condition";
	}

}
