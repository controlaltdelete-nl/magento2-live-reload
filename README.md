[![Control Alt Delete.nl](images/ControlAltDelete-Github.png)](https://www.controlaltdelete.nl)
[![Build Status](https://travis-ci.org/controlaltdelete-nl/magento2-live-reload.svg?branch=master)](https://travis-ci.org/controlaltdelete-nl/magento2-live-reload)

This package can be used to enable Live Reload via the script tag in Magento 2. It will check if you are in production mode or not. If you are not, there will be no output.

# Installation

Install using Composer:
````
composer require controlaltdelete/magento2-live-reload
````
Run:
````
php bin/magento module:enable ControlAltDelete_LiveReload
````
or:
````
php bin/magento setup:upgrade
````

# Usage
Make sure you are in default or development mode. You can check the current mode of your webshop by running:
````
php bin/magento deploy:mode:show
````

If you need to change the mode you can do this by running:
````
php bin/magento deploy:mode:set production
````

This can take some time. Make sure you are running `production` mode in ... production. Run developer mode only on you local/development environment.

# Dependencies
This package has no dependencies, other than `magento/framework`. Which is required by Magento by default. For the development we require `phpstan/phpstan` and `magento/marketplace-eqp` for code quality.
