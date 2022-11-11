# Building techniques for WordPress

This package contains the building techniques (=code style) used in WordPress projects.

### About

This package provides a ruleset for PHP_CodeSniffer that extends the ruleset for [Timber](https://github.com/timber/timber),
which is composed of the [WordPress coding standard](https://github.com/WordPress/WordPress-Coding-Standards) with some added exceptions. The deviations from the WordPress coding standard are:

* Class filenames should adhere to PSR-4.
* Classnames should use StudlyCaps.
* Lines should be 100 chars long maximum (triggers warning),
* Lines should in no case exceed 120 characters (triggers error).
* Allow `/` as word delimiter in hook names.
* Allow short array syntax (`[]`).

### Prerequisites

Install [Composer](https://getcomposer.org/) to add this package to your project.

### Installing

Install the package using composer:

```shell
composer require --dev achttienvijftien/building-techniques
```

After the installation, the `phpcs` and `phpcbf` scripts are available in the `vendor/bin` folder.

We recommend also installing [phpcodesniffer-composer-installer](https://github.com/DealerDirect/phpcodesniffer-composer-installer)
to automatically register the coding standard with PHP_CodeSniffer:

```shell
composer require --dev dealerdirect/phpcodesniffer-composer-installer
```

Now, the coding standard should be available for use when running `phpcs`. You can check the installed coding standards by running:

```shell
./vendor/bin/phpcs -i
```

The list should contain `1815BuildingTechniques`.

### Usage

To run PHP_CodeSniffer with the appropriate coding standard:

```shell
./vendor/bin/phpcs --standard=1815BuildingTechniques path/to/file-or-directory
```

To fix code style violations that can be corrected automatically:

```shell
./vendor/bin/phpcbf --standard=1815BuildingTechniques path/to/file-or-directory
```

#### Adding composer scripts

Composer scripts for `phpcs` and `phpcbf` can be added to composer.json for convenience.

```json
{
    "scripts": {
        "format": "phpcbf --standard=1815BuildingTechniques --report-summary --report-source",
        "lint": "phpcs --standard=1815BuildingTechniques"
    }
}
```

#### IDE Support

Please refer to the Wiki for guides on integrating PHP_Codesniffer with IDEs like PhpStorm.
