<?php
namespace TopShelfCraft\Conditions\fields;

use Craft;
use craft\base\conditions\ConditionInterface;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\elements\conditions\ElementCondition;
use craft\helpers\Json;
use yii\db\Schema;

class ElementConditionField extends Field
{

	/**
	 * @var string The condition type for this field
	 * @phpstan-var class-string<ConditionInterface>|null
	 */
	public string $conditionType = ElementCondition::class;

	/**
	 * @var string|null The element type to which the condition applies
	 * @phpstan-var class-string<ElementInterface>|null
	 */
	public ?string $elementType = null;

	public bool $searchable = false;

	public function getContentColumnType(): string
	{
		return Schema::TYPE_TEXT;
	}

	public function getElementConditionRuleType(): ?string
	{
		// TODO
		return null;
	}

	protected function inputHtml(mixed $value, ?ElementInterface $element = null): string
	{

		$condition = $value instanceof ElementConditionFieldData
			? $value->condition
			: $this->normalizeValue($value, $element)->condition;

		$condition->mainTag = 'div';
		$condition->name = $this->handle;
		$condition->id = $this->handle;
		return $condition->getBuilderHtml();

	}

	public function normalizeValue(mixed $value, ?ElementInterface $element = null): ElementConditionFieldData
	{

		if ($value instanceof ElementConditionFieldData)
		{
			return $value;
		}

		$fieldData = new ElementConditionFieldData();

		if (is_string($value))
		{
			$value = Json::decodeIfJson($value);
		}

		$condition = is_array($value)
			? Craft::$app->conditions->createCondition($value)
			: Craft::createObject($this->conditionType);
		$condition->elementType = $this->elementType;
		$condition->sortable = true;

		$fieldData->condition = $condition;

		return $fieldData;

	}

	protected function searchKeywords(mixed $value, ElementInterface $element): string
	{
		return '';
	}

	public function serializeValue(mixed $value, ?ElementInterface $element = null): ?array
	{

		$condition = $value instanceof ElementConditionFieldData
			? $value->condition
			: $this->normalizeValue($value, $element)->condition;

		if (empty($condition->getConditionRules()))
		{
			return null;
		}

		return $condition->getConfig();

	}

	/*
	 * Static
	 */

	public static function displayName(): string
	{
		return "Element Condition";
	}

	public static function valueType(): string
	{
		return ElementConditionFieldData::class .'|null';
	}

}
