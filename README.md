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

### Configuration In Back Office

To configure the Back To Top module:

Log in to the Magento admin panel.
Navigate to Stores > Configuration > AnassTouatiCoder > Back To Top.
#### General group => Enable: Toggle to enable or disable the "Back to Top" button globally.
#### Display group => setup up your preferences

- Label: Set the text label displayed on the button.
- Label Color: Choose a color for the button label.
- Background Color: Choose a background color for the button.
- Hover Background Color: Choose a background color for the button when hovered over.
- Border Color: Set the border color for the button.
- SVG Image: Upload an SVG image to use instead of the text label.
- Image SVG Size: Set the size of the SVG image, by default it is 32 x 32.
- Position: Select the position of the button on the page.

#### Target Pages Group
- Target Pages: Choose whether to enable the button on all pages or specific pages.

Then save changes and clear Magento config cache
## Specifications

This module provides a shortcut for customer to go back to the top of the page especially if your magento instance doesn't have sticky header or the pages are too long 

## Usage

the purpose of this module is to add back to top shortcut in Magento pages
[See plugin wiki](https://github.com/anasstouaticoder/magento2-module-back-to-top/wiki/Project-Demo)

## Usage
For any issues, suggestions, or contributions, feel free to reach out:

Author: Anass TOUATI
Email: anass1touati@gmail.com

## License

[MIT](https://opensource.org/licenses/MIT)
