# Simplified Flash Messaging Alert

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A simplified flash messaging for your Laravel application using Twitter [Bootstrap 4 (Alerts)][bootstrap4-alerts].

## Installation

Via Composer

``` bash
$ composer require jchegenye/myflashalert
```

## Usage

Make sure you add Bootstrap to your project. You can choose to either use BootstrapCDN provided for free (see below), download the source files [here][bootstrap4-cdn] or write your own CSS based on these classes.

``` bash
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
```
Inside your controllers, you can use any of the `HTTP Redirects` as mentioned [here][laravel-http-redirects] except `Redirecting With Flashed Session Data`. Instead replace `->with('success', 'Profile updated!')` with what this package provides as mentioned shown below.

**Example**

``` bash

    //Redirecting to named routes
    public function store()
    {
        return redirect()->route('user')->success('Successfully added!');
    }

    //Other redirects you can use
    return redirect('user/edit')->success('Successfully edited!');
    return redirect('user/delete')->warning('Delete?, continue...');
    return redirect()->back()->error('Something went wrong!');

... and much more redirects.

Methods available for usage:-

|Methods|Description|
|:------------|:------------|
|`success()`|Flash a success message|
|`error()`|Flash error message|
|`warning()`|Flash a warning message|
|`info()`|Flash information message|

```

## Credits

- [Chegenye A. Jackson][link-author]
- [All Contributors][link-contributors]

## License

Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jchegenye/myflashalert.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jchegenye/myflashalert.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jchegenye/myflashalert/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/jchegenye/myflashalert
[link-downloads]: https://packagist.org/packages/jchegenye/myflashalert
[link-travis]: https://travis-ci.org/jchegenye/myflashalert
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://jchegenye.me
[link-contributors]: https://jchegenye.me]
[link-author-email]: mailto:chegenyejackson@gmail.com

[bootstrap4-alerts]: https://getbootstrap.com/docs/4.0/components/alerts/
[bootstrap4-cdn]: https://getbootstrap.com/docs/4.0/getting-started/introduction/
[laravel-http-redirects]: https://laravel.com/docs/5.7/redirects#redirecting-with-flashed-session-data