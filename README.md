# gameslobby

[GitHub](http://github.com)

## Installation Instructions

The following instructions assumes that you are familiar with the necessary technologies required to carry out installation and that you have them already insalled in your machine.

Based on: 
* php 7.3.3
* Laravel ^6.0
* phpunit 7.5.9
* mysql/mariadb 10.1.38-MariaDB


### Clone the repository:
```

$ git clone git@github.com:mokgosi/gameslobby.git

```

### Install dependencies
```

$ composer update

$ npm install

```

**Create .env and app key**

```

$ cp .env.example .env
$ php artisan key:generate

``` 

**Update .env file with database name and credentials and other info**

```

APP_NAME=App Name
APP_URL=http://localhost:8000

DB_DATABASE=dbname
DB_USERNAME=username
DB_PASSWORD=password

```

**Run tests**
```

$ vendor\bin\phpunit

```

**Start your local server**
```

$ cd to-your-project-root
$ php artisan serve

```

Browse to http://localhost:8000


