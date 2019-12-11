# Titan [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md) [![Travis](https://img.shields.io/travis/pbbg-io/titan-framework.svg?style=flat-square)]() [![Total Downloads](https://img.shields.io/packagist/dt/pbbg-io/titan-framework.svg?style=flat-square)](https://packagist.org/packages/pbbg-io/titan-framework) ![Discord](https://img.shields.io/discord/646046248931164180)

### Please see the [Website](https://titan.pbbg.io) for more in depth documentation, marketplace and more.

Titan is a framework for building a text based game such as Bootleggers, Torn, Barafranca. Think of it as a starting point for your game. By default we include

- Administration Panel
- Role/Group Management
- User Management
- Cronjob Management
- Settings Management
- Menu Management
- Extensions

You can browse our selection of extensions or just get started building something yourself. If you are wanting to have more of a base to start, you can check out our bundles which install a group of extensions at the same time, saving you some time searching for individual extensions

This repository contains a base for Titan, it contains a few modifications to a base [Laravel](https://laravel.com) install along with pulling in the actual framework, if you don't fancy building things out as extensions then you can just go ahead and write it as any other Laravel application

## Install

### Composer Project

```bash
composer create-project pbbg-io/titan -s dev
cd titan-demo
php artisan titan:install
php artisan titan:resources
yarn && yarn run production
```

### Manually

```bash
git clone https://github.com/pbbg-io/titan
cd titan-demo
composer install
cp .env.example .env
php artisan key:generate
php artisan titan:install
php artisan titan:resources
yarn
yarn run production
```

Then you can serve it with artisan

```bash
php artisan serve
```

## Usage
Write a few lines about the usage of this package.

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Credits

- [Ian](https://github.com/1e4)
- [All Contributors](https://github.com/pbbg-io/titan-framework/contributors)

## Security
If you discover any security-related issues, please email ian@pbbg.io instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
