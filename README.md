# Setup code quality and static analysis tools

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pen-y-fan/laravel-setup.svg?style=flat-square)](https://packagist.org/packages/pen-y-fan/laravel-setup)
[![Total Downloads](https://img.shields.io/packagist/dt/pen-y-fan/laravel-setup.svg?style=flat-square)](https://packagist.org/packages/pen-y-fan/laravel-setup)

The package is currently under development. 

The concept: 
1. Create a new laravel project as normal.
2. Require this package to automatically install code quality and static analysis tools along with basic
 configuration files.

## Installation

To be confirmed (TBC).

<!--
You can install the package via composer:

```bash
composer require pen-y-fan/laravel-setup
```
-->

## Usage

The plan is to automatically run the required script, when initially required:

1. Run a default installation of each of the static analysis and code quality tools, including helpers
2. Copy a default configuration script for each tool.
3. On Windows create a batch file.

The code quality and static analysis tools being planned are:

* PHPStan
* Easy Coding Standard (ECS)
* PHPUnit (normally already included with Laravel)
* PHP CodeSniffer (optional to ECS)

The **composer.jason** will have the following added:

```json
{
    "require-dev": {
        "phpstan/phpstan": "^0.12",
        "phpunit/phpunit": "^8.5.0",
        "squizlabs/php_codesniffer": "^3.5.3",
        "symplify/easy-coding-standard": "^7.1",
        "symplify/phpstan-extensions": "^7.1",
        "nunomaduro/larastan": "^0.5.0",
        "phpstan/phpstan-phpunit": "^0.12.2"
    },
    "scripts": {
        "checkcode": "phpcs src tests --standard=PSR12",
        "fixcode": "phpcbf src tests --standard=PSR12",
        "test": "phpunit",
        "tests": "phpunit",
        "check-cs": "ecs check src tests --ansi",
        "fix-cs": "ecs check src tests --fix --ansi",
        "phpstan": "phpstan analyse src tests --ansi --error-format symplify"
    }
}
```

### Windows batch files

On Windows OS batch files to allow scripts to be easily run from the command line. Similar to the bash alias.

#### `pu.bat`

Will run the script `composer test`, which will run all tests using phpunit

#### `cc.bat`

Win run the script `composer check-cs`, which will run easy-coding-standard, no code will be altered.

#### `fc.bat`

Win run the script `composer fix-cs`, which will run easy-coding-standard with the fix switch.

#### `ps.bat`

Win run the script `composer phpstan`, which will run static analysis using PHPStan.

#### Manually run phpcs

To run PHP CodeSniffer.
 
To check code to PSR-12 fig standard:

```bat
composer checkcode
```

To fix code to PSR-12 fig standard:

```bat
composer fixcode
```

## Testing

TBC.
<!--
```bash
composer test
```
-->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email michael.pen.y.fan@gmail.com instead of using the issue tracker.

## Credits

* [Michael Pritchard](https://github.com/pen-y-fan)
* Concept based on a this blog [5 Things I Improve when I Get to new Repository](https://www.tomasvotruba.com/blog/2019/12/23/5-things-i-improve-when-i-get-to-new-repository/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
