<?php
namespace TopShelfCraft\Conditions\fields;

use Craft;
use craft\base\conditions\ConditionInterface;
use craft\base\Element;
use craft\base\ElementInterface;
use craft\base\Field;
use craft\elements\conditions\ElementCondition;
use craft\elements\conditions\ElementConditionInterface;
use craft\helpers\Json;
use yii\db\Schema;

class ElementConditionField extends Field
{

	/**
	 * @var string The condition type for this field
	 * @phpstan-var class-string<ConditionInterface>|null
	 */
	protected static string $conditionType = ElementCondition::class;

	/**
	 * @var string The element type to which the condition applies
	 * @phpstan-var class-string<ElementInterface>|null
	 */
	protected static string $elementType = Element::class;

	public bool $searchable = false;

	public function getContentColumnType(): string
	{
		return Schema::TYPE_TEXT;
	}

	protected function inputHtml(mixed $value, ?ElementInterface $element = null): string
	{

		$condition = $value instanceof ElementConditionInterface
			? $value
			: $this->normalizeValue($value, $element);

		$condition->mainTag = 'div';
		$condition->name = $this->handle;
		$condition->id = $this->handle;
		return $condition->getBuilderHtml();

	}

	public function normalizeValue(mixed $value, ?ElementInterface $element = null): ElementConditionInterface
	{

		if ($value instanceof ElementConditionInterface)
		{
			return $value;
		}

		if (is_string($value))
		{
			$value = Json::decodeIfJson($value);
		}

		$condition = is_array($value)
			? Craft::$app->conditions->createCondition($value)
			: Craft::createObject(static::$conditionType);
		$condition->elementType = static::$elementType;
		$condition->sortable = true;

		return $condition;

	}

	protected function searchKeywords(mixed $value, ElementInterface $element): string
	{
		return '';
	}

	public function serializeValue(mixed $value, ?ElementInterface $element = null): ?array
	{

		$condition = $value instanceof ElementConditionInterface
			? $value
			: $this->normalizeValue($value, $element);

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
		return Craft::t('app', '{type} Condition', [
			'type' => (static::$elementType)::displayName(),
		]);
	}

	public static function valueType(): string
	{
		return implode('|', [
			static::$conditionType,
			'null'
		]);
	}

}
