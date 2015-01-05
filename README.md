# Property Color

Color picker property for [Papi](https://wp-papi.github.io/) that use the Color Picker API in WordPress. Will not work for WordPress versions lower then 3.5, read more about the color picker [here](https://make.wordpress.org/core/2012/11/30/new-color-picker-in-wp-3-5/).

## Settings

WordPress color picker support custom palettes so you can change them with the palettes option. Read more about palettes [here](https://automattic.github.io/Iris/#palettes).

Example property with palettes setting:
```php
$this->property([
  'type'        => 'color',
  'title'       => 'Background color',
  'slug'        => 'background_color',
  'settings'    => [
    'palettes' => ['#000', '#fff', '#000fff']
  ]
])
```

## Installation

This property requires [Papi](https://wp-papi.github.io/) plugin.

If you're using Composer to manage WordPress, add Papi to your project's dependencies. Run:

```sh
composer require frozzare/papi-property-color
```

## License

Copyright (c) 2015 Fredrik Forsmo Licensed under the MIT license.
