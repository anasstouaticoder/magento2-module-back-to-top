<h1 style="text-align: center;">Magento 2 Module AnassTouatiCoder BackToTop</h1>
<div style="text-align: center;">
  <p>Copy field path and value, display its override values in parent scope</p>
  <img src="https://img.shields.io/badge/magento-2.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square" alt="Supported Magento Versions" />
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-module-backtotop" target="_blank"><img src="https://img.shields.io/packagist/v/anasstouaticoder/magento2-module-backtotop.svg?style=flat-square" alt="Latest Stable Version" /></a>
  <a href="https://packagist.org/packages/anasstouaticoder/magento2-module-backtotop" target="_blank"><img src="https://poser.pugx.org/anasstouaticoder/magento2-module-backtotop/downloads" alt="Composer Downloads" /></a>
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

### In Back Office
After installing the plugin, it is easy to activate it, login in as administrator, then navigate 
to Stores => Configuration => ATOUATI TOOLS => Back To Top =>
#### General group => Enable field select yes option
#### Display group => setup up your preferences 
- Label
- Label Color
- Background color
- border color
- Position
Then save changes and clear Magento config cache
## Specifications

This module provides a shortcut for customer to go back to the top of the page especially if your magento instance doesn't have sticky header or the pages are too long 

## Usage

the purpose of this module is to add back to top shortcut in Magento pages
[See plugin wiki](https://github.com/anasstouaticoder/magento2-module-back-to-top/wiki/Project-Demo)

## License

[MIT](https://opensource.org/licenses/MIT)
