Contao Extension: TechnicalValueRegex
=====================================

Provides regular expressions for technical values, consisting of:
- letters (lower case / uper case / case insensitive)
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
- max. version: Contao 3.2.x


Dependency
----------

- There are no dependencies to other extensions, that have to be installed.


Usage
-----

- `form` / `dma_element_generator` ... regex will automatically be added to select list in field config
- `dca` ... using:
  - `tecValue` only accepts technical values, consisting of letters, digits and underscrores
  - `tecValueLC` only accepts technical values, consisting of lower case letters, digits and underscrores
  - `tecValueUC` only accepts technical values, consisting of upper case letters, digits and underscrores