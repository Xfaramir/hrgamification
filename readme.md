<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
# Herramienta de Gestion de Contenidos CMS para Recursos Humanos
See demo here:

 http://hrgamification.co/


This packages use (no need to install):

* [Composer](https://getcomposer.org/)
* [Laravel](http://laravel.com/)
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE). You can see and AdminLTE theme preview at: http://almsaeedstudio.com/preview/
* [Pratt](http://blacktie.co/demo/pratt/). Pratt Landing Page
* [Acacha/user](https://github.com/acacha/user): providing boosted Laravel Users. This could be optional through configuration.
* [acacha/helpers](https://github.com/acacha/helpers) : Extra helpers for Laravel provided by acacha.
* [creativeorange/gravatar](https://github.com/creativeorange/gravatar): Gravatar support for user's profile images. This could be optional through configuration.
* [league/flysystem](https://github.com/thephpleague/flysystem) : Filesystem support.
* [acacha/forms](https://github.com/acacha/forms) : Javascript Form objects implementation.
* [acacha/llum](https://github.com/acacha/llum). Easy Laravel packages installation (and other tasks). Used to modify config/app.php file without using stubs (so you changes to this file would be respected)
* [thephpleague/skeleton](https://github.com/thephpleague/skeleton). This package use/has been adapted to use the phpleague skeleton.
* Acacha llum requires GNU sed. on MAC OS install GNU sed with:

## Laravel 5.5

This package now use new Laravel 5.5 feature Package Auto Discover. 

## Laravel 5.4

Use 4.1.23 version of this package!

### Laravel 5.4 manual installation

Follow the typical Laravel package installation steps:

<pre>
 Git clone https://github.com/xfaramir/hrgamification
</pre>

<pre>
 composer update"
</pre> 
 

<pre>
 php artisan migrate -seed"
</pre> 

<pre>
 php artisan key:generate

## First steps, database creation, migrations and login

Once package installed you have to follow the usual steps of any laravel project to Login to the admin interface:

- Create a database. I recommend the use of laravel Homestead (MYSQL)
- Create/check .env file and configure database access (database name, password, etc)

## Credits

- [Universidad INCCA de Colombia]


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
