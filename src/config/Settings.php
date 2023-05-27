<?php
namespace TopShelfCraft\Conditions\config;

use craft\config\BaseConfig;
use TopShelfCraft\Conditions\fields\AddressConditionField;
use TopShelfCraft\Conditions\fields\AssetConditionField;
use TopShelfCraft\Conditions\fields\CategoryConditionField;
use TopShelfCraft\Conditions\fields\ElementConditionField;
use TopShelfCraft\Conditions\fields\EntryConditionField;
use TopShelfCraft\Conditions\fields\TagConditionField;
use TopShelfCraft\Conditions\fields\UserConditionField;

/**
 * @author Michael Rog <michael@michaelrog.com>
 */
class Settings extends BaseConfig
{

	public array $availableFieldTypes = [
		AddressConditionField::class,
		AssetConditionField::class,
		CategoryConditionField::class,
		ElementConditionField::class,
		EntryConditionField::class,
		TagConditionField::class,
		UserConditionField::class,
	];

	public function availableFieldTypes(array $types)
	{
		$this->availableFieldTypes = $types;
	}

}
