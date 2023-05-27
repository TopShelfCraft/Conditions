<?php
namespace TopShelfCraft\Conditions;

use Craft;
use craft\controllers\ConditionsController;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use TopShelfCraft\base\Plugin;
use TopShelfCraft\Conditions\config\Settings;
use yii\base\Event;

/**
 * @author Michael Rog <michael@michaelrog.com>
 *
 * @method Settings getSettings()
 */
class Conditions extends Plugin
{

	public ?string $changelogUrl = "https://raw.githubusercontent.com/TopShelfCraft/Conditions/4.x/CHANGELOG.md";
	public bool $hasCpSection = false;
	public bool $hasCpSettings = false;
	public string $schemaVersion = "4.0.0.0";

	public function init(): void
	{

		parent::init();
		Craft::setAlias('@TopShelfCraft/Conditions', __DIR__);

		Event::on(
			Fields::class,
			Fields::EVENT_REGISTER_FIELD_TYPES,
			function(RegisterComponentTypesEvent $event) {
				$event->types = [
					...$event->types,
					...$this->getSettings()->availableFieldTypes,
				];
			}
		);

		/*
		 * Module::createController() tries to load controllers using three sequential strategies:
		 * Check `controllerMap` -> Try to resolve the controller from a module -> Check Craft's controller namespace
		 * The presence of our `conditions` module will block Craft's `ConditionsController` from being located,
		 * so we need to make sure the native controller gets resolved earlier, in the `controllerMap` check.
		 */
		Craft::$app->controllerMap['conditions'] = ConditionsController::class;

	}

	protected function createSettingsModel(): Settings
	{
		return Settings::create();
	}

}
