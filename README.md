# Titan Demo

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/pbbg-io/titan-framework.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/pbbg-io/titan-framework.svg?style=flat-square)](https://packagist.org/packages/pbbg-io/titan-framework)

## Install

### Composer Project
```bash
composer create-project pbbg-io/titan-demo -s dev
cd titan-demo
php artisan titan:install
php artisan titan:resources
yarn && yarn run production
```

### Manually
```bash
git clone https://github.com/pbbg-io/titan-demo
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

## Changelog
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Ian](https://github.com/1e4)
- [All Contributors](https://github.com/pbbg-io/titan-framework/contributors)

## Security
If you discover any security-related issues, please email ian@pbbg.io instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
