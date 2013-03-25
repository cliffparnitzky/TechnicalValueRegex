Contao Extension: TechnicalValueRegex
=====================================

Provides a regex that only allows technical values, consisting of:
- lower case letters
- underscrores
- digits

No `blank`, special char or something else.


Installation
------------

The extension is not published in contao extension repository.
Install it manually.


Tracker
-------

https://github.com/cliffparnitzky/TechnicalValueRegex/issues


Compatibility
-------------

- min. version: Contao 2.6.2
- max. version: Contao 3.0.x


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Usage
-----

- `form` / `dma_element_generator` ... regex will automatically be added to select list in field config
- `dca` ... using `technicalValue` only accepts technical values, consisting of lower case letters, digits and underscrores