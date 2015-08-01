![alt text](http://creative-punch.net/wp-content/uploads/2014/01/Angular_Laravel.jpg)


# Laravel/Angular/Foundation

This is a boilerplate for an [Angular](http://angularjs.org) application using [Laravel](http://laravel.com) as a backend API service, with [Foundation](http://foundation.zurb.com) and [Angular Foundation](http://pineconellc.github.io/angular-foundation/) thrown in. 

## Getting Started

To begin setting up the application, clone this repository 

```
git clone git@github.com:zacksmash/angular-laravel.git
```

Next, install all dependancies

```
composer install
```

```
npm install
```

```
bower install
```

Then, add a `.env` file for Laravel and configure an app key

```
cp .env.example .env && php artisan key:generate
```

After that has finished, open the .env file and enter your database credentials

Now, you can now migrate the database

```
php artisan migrate
```

Next install the dependancies for Angular in the `angular` directory

```
cd resources/assets/angular && bower install && cd ../../..
```

Finally, run `gulp` and start the server

```
gulp && php artisan serve
```

You should now have a fully functioning application on [http://localhost:8000](http://localhost:8000)

You can register a user by going to [/register](http://localhost:8000/register)

**Remember to run `gulp watch` while developing**

## Angular via Yeoman

The Angular application lives in `resources/assets/angular/app`. This is where you'll build Views, Controllers, Services and anything else Angular related. 

This project utilizes [Yeoman's Angular Generator](https://github.com/yeoman/generator-angular). **Make sure you have that installed before moving on**.

```
npm install -g yo generator-angular
```

After you've successfully installed Yeoman, you can begin using the generator from the `angular` directory.

```
cd resources/assets/angular
``` 

Now, you can do things like `yo angular:route [page-name]`, which will generate a view and controller for that page, as well as update your routes array in the app.js file.

Visit the [Yeoman Documentation](https://github.com/yeoman/generator-angular) for more info on generating Angular components.

**All asset handling is done via Gulp, so you will not need to adhere to the Grunt documentation from Yeoman.**

## ToDo

* :ballot_box_with_check: ~~Add in a sample API endpoint and retrieve data from it~~
* :ballot_box_with_check: ~~User auth, either via Laravel's built in authentication or JWT~~
* Probably a lot more...

More instructions to follow!
