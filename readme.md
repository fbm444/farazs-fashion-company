# Fashion Project

## Setting Up Database

- This project uses a mySQL database to store the fashion products, categories, and managers
- First, ensure you have mySQL installed, if needed, instructions are below

### Install mySQL Using Brew

``` 
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
brew install mysql
brew services start mysql
mysql -u root
```

### Setting up the Tables

- Create a mySQL database
- Download the db.sql file in /database
- Run the script in command line or MySQLWorkbase in your newly created database

### Setting Environment Variables

- Using the SQL database you configured, set the .env variables appropriately

```
DATABASE_NAME = 'your_database_name'
DATABASE_USER = 'your_database_user'
DATABASE_PASSWORD = 'your_database_password'
DATABASE_PORT = 'your_database_port'
```

### Serving the Website

- The website is served through a PHP webserver; however, Apache, Nginx, or a similar serve could be used
- Using a built in PHP server :
    - Ensure PHP is installed

#### Using Brew:

```angular2html
brew install php
```

- Navigate to the project directory and run the server

```angular2html
cd fashion-project
php -S localhost:8000
```

- The website should be running on http://localhost:8000

