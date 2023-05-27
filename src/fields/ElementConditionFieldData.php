<?php
namespace TopShelfCraft\Conditions\fields;

use craft\base\conditions\ConditionInterface;
use craft\elements\db\ElementQueryInterface;

class ElementConditionFieldData
{

	public ?ConditionInterface $condition = null;

	public function find(): ElementQueryInterface
	{
		// TODO
	}

}
