[![Latest Version on Packagist](http://img.shields.io/packagist/v/cliffparnitzky/technical-value-regex.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/technical-value-regex)
[![Installations via composer per month](http://img.shields.io/packagist/dm/cliffparnitzky/technical-value-regex.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/technical-value-regex)
[![Installations via composer total](http://img.shields.io/packagist/dt/cliffparnitzky/technical-value-regex.svg?style=flat)](https://packagist.org/packages/cliffparnitzky/technical-value-regex)

Contao Extension: TechnicalValueRegex
=====================================

Provides regular expressions for technical values, consisting of:
- letters (lower case / uper case / case insensitive)
- underscrores
- digits

No `blank`, special char or something else.


Installation
------------

Install the extension via composer: [cliffparnitzky/technical-value-regex](https://packagist.org/packages/cliffparnitzky/technical-value-regex).

If you prefer to install it manually, download the latest release here: https://github.com/cliffparnitzky/technical-value-regex/releases


Tracker
-------

https://github.com/cliffparnitzky/TechnicalValueRegex/issues


Compatibility
-------------

- min. Contao version: >= 2.6.2
- max. Contao version: <  3.6.0


Dependency
----------

There are no dependencies to other extensions, that have to be installed.


Usage
-----

- `form` / `dma_element_generator` ... regex will automatically be added to select list in field config
- `dca` ... using:
  - `tecValue` only accepts technical values, consisting of letters, digits and underscrores
  - `tecValueLC` only accepts technical values, consisting of lower case letters, digits and underscrores
  - `tecValueUC` only accepts technical values, consisting of upper case letters, digits and underscrores