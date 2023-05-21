# Module Offline Payment SarrapiaTech Zinli 

    ``sarrapiatech/module-zinli``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)

## Main Functionalities
Zinli Gateway Payment - Magento Module

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/SarrapiaTech`
 - Enable the module by running `php bin/magento module:enable SarrapiaTech_Zinli`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Install the module composer by running `composer require sarrapiatech/module-zinli`
 - enable the module by running `php bin/magento module:enable SarrapiaTech_Zinli`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Zinli - payment/zinli/*


## Specifications

 - Payment Method
	- Zinli


