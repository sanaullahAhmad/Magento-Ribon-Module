# Create a magento2 module for adding information in the form of a ribon in the pages of a magento shop.
# Magento 2 - Ribon Module

## Overview

Module is configurable from admin side. following information is defined in admin grid.
# Title 
# Description
# Link
# Band color
# The time interval in which band must be visible
# Pages to display (only home page/ all pages)
In admin module must allow multiple such records the condition being interval not overlap.
The ribon will display only if current date is int date range.


## Requirements

Magento Open Source (CE) Version 2.2.x

## Installation

Include the package.

```bash
$ composer require sanaullah/sanaullah-ribon
```

Enable the module.

```bash
$ php bin/magento module:enable Sanaullah_Ribon
$ php bin/magento setup:upgrade
$ php bin/magento cache:clean
```

## Usage

In the Magento admin, head to the ```Ribon Data``` menu item.
