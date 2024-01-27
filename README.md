<h1 style="text-align: center;">Magento 2 Module AnassTouatiCoder BackToTop</h1>
<div style="text-align: center;">
  <p>Copy field path and value, display its override values in parent scope</p>
  <img src="https://img.shields.io/badge/magento-2.2%20|%202.3%20|%202.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-module-back-to-top" target="_blank"><img src="https://img.shields.io/packagist/v/anasstouaticoder/magento2-module-back-to-top.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-module-back-to-top" target="_blank"><img src="https://poser.pugx.org/anasstouaticoder/magento2-module-back-to-top/downloads" alt="Composer Downloads" /></a>
  <a href="https://GitHub.com/Naereen/StrapDown.js/graphs/commit-activity" target="_blank"><img src="https://img.shields.io/badge/maintained%3F-yes-brightgreen.svg?style=flat-square" alt="Maintained - Yes" /></a>
  <a href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/license-MIT-blue.svg" /></a>
</div>

    ``anasstouaticoder/magento2-module-back-to-top``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [usage](#markdown-header-usage)
 - [License](#markdown-header-license)


## Main Functionalities
add back to top button in magento pages
## Installation
\* = in production please use the `--keep-generated` option

### install from composer 2

 - In magento project root directory run command `composer require anasstouaticoder/magento2-module-back-to-top`
 - Enable the module by running `php bin/magento module:enable AnassTouatiCoder_BackToTop`
 - Flush the cache by running `php bin/magento cache:flush`


### Zip file

 - Unzip the zip file in `app/code/AnassTouatiCoder`
 - Enable the module by running `php bin/magento module:enable AnassTouatiCoder_BackToTop`
 - Flush the cache by running `php bin/magento cache:flush`

## Configuration

### Type 1 : In Back Office
After installing the plugin, it is easy to activate it, login in as administrator, then navigate 
to Stores => Configuration => ATOUATI TOOLS => Back To Top =>
#### General group => Enable field select yes option
#### Display group => setup up your preferences 
- Label
- Label Color
- Background
- border color
- Position
Then save changes and clear Magento config cache

### Type 2 : Using Magento CLI

Enabling display field paths and copy path button : `bin/magento config:set 'anasstouaticoder_dev/system_config/system_path_hint 1`

Enabling copy value button: `bin/magento config:set 'anasstouaticoder_dev/system_config/system_field_value 1`

Enabling display override value of sub scopes : `bin/magento config:set 'anasstouaticoder_dev/system_config/system_override_values 1`

## Specifications

This plugin provides easy way to copy configuration field paths or its value to the clipboard. It also displays all values configured in sub scopes websites or in a modal.

For copying value and displaying sub values in modal parts, both support these field types : [text, textarea, select, and multiselect]()

## Usage

The idea behind this plugin is to make admins and developers lives much easier, instead of them searching inside the page DOM using inspect tool or in Project files, the plugin is providing them a shortcut to  path configuration and copy button to clipboard.
[See plugin wiki](https://github.com/anasstouaticoder/magento2-module-back-to-top/wiki/Project-Demo)

## License

[MIT](https://opensource.org/licenses/MIT)
