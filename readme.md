# laravelZohoCrm

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require dayscript/laravelzohocrm
```
0) execute command php artisan vendor:publish

## Usage
1) In the enviroment file set:

ZOHOCRM_CLIENT_ID=
ZOHOCRM_CLIENT_SECRET=
ZOHOCRM_REDIRECT_URI=
ZOHOCRM_ACCESS_TYPE=offline
ZOHOCRM_ACCOUNTS_URL=https://accounts.zoho.com
ZOHOCRM_PERSISTENCE_HANDLER_CLASS=ZohoOAuthPersistenceHandler
ZOHOCRM_CLIENT_EMAIL=

ZOHOCRM_GRANT_TOKEN={grant_token}
generate grant_token https://accounts.zoho.com/developerconsole and minimun scopes ZohoCRM.modules.all,aaaserver.profile.all,ZohoCRM.settings.all,ZohoCRM.users.all,ZohoCRM.org.all

ZOHOCRM_TOKEN_PERSISTENCE_PATH
Set path absolute rute example
ZOHOCRM_TOKEN_PERSISTENCE_PATH=/home/user/name_project/storage/app/zoho

2) Create file zcrm_oauthtokens.txt in the path of declarated in ZOHOCRM_TOKEN_PERSISTENCE_PATH variable

3) Run URL /zoho/login, this generate the first token and save refresh in the file zcrm_oauthtokens.txt



## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Dayscript][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dayscript/laravelzohocrm.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dayscript/laravelzohocrm.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dayscript/laravelzohocrm/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/dayscript/laravelzohocrm
[link-downloads]: https://packagist.org/packages/dayscript/laravelzohocrm
[link-travis]: https://travis-ci.org/dayscript/laravelzohocrm
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/dayscript
[link-contributors]: ../../contributors]
