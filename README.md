# Conditions

_A fieldtype for editing and storing Condition Rules._  

**A [Top Shelf Craft](https://topshelfcraft.com) creation**  
[Michael Rog](https://michaelrog.com), Proprietor


* * *


## TL;DR.

`// TODO`


## Installation

1. From your project directory, use Composer to require the plugin package:

   ```
   composer require topshelfcraft/conditions
   ```
   
    _Note: Conditions is also available for installation via the Craft CMS Plugin Store._

2. In the Control Panel, go to **Settings → Plugins** and click the **“Install”** button for Conditions.

3. There is no Step 3.


## Configuration

To customize the plugin's behavior, you can add a `conditions.php` file to your Craft config directory:

```php
<?php

return [
    'availableFieldTypes' => [
        EntryConditionField::class,
    ];
];
```


## What are the system requirements?

Craft 4.4+ and PHP 8.0+


## I found a bug.

Please open a GitHub Issue or submit a PR to the `4.x.dev` branch.


* * *

#### Contributors:

  - Plugin development: [Michael Rog](https://michaelrog.com) / @michaelrog
  - Plugin icon adapted from ["Rule" icon](https://thenounproject.com/icon/rule-4327543/) by [Kamin Ginkaew](https://thenounproject.com/ginkaew/)
