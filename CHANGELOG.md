# Conditions Plugin Changelog

The format of this file is based on ["Keep a Changelog"](http://keepachangelog.com/). This project adheres to [Semantic Versioning](http://semver.org/). Version numbers follow the pattern: `MAJOR.FEATURE.MINOR`

## 4.0.0-beta.2 - 2023-06-02

### Changed

- `ElementConditionField::$conditionType` is now static, allowing `valueType()` to provide a more specific type hint.
- `ElementConditionField::$elementType` is now static, and required, allowing `displayName()` to return a natively translated label.
- Condition fields now provide a Condition object as their value type.

### Removed

- `ElementConditionFieldData` is no longer needed, since Condition fields return an `ElementConditionInterface`-type value, without any wrapper.

## 4.0.0-beta.1 - 2023-05-27

### Added

- Initial release!
