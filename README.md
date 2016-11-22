# Xataface Sakila Demo

This is a simple [Xataface](http://xataface.com) application built on the [Sakila demo database](https://dev.mysql.com/doc/sakila/en/sakila-introduction.html).

DISCLAIMER:  This demo contains very little customization.  It was created to demonstrate the use of the [cn1-xataface](https://github.com/shannah/cn1-xataface) library for Codename One.

## License

* Xataface licensed under GPL
* This demo licensed under Apache 2.0
* Sakila Database is copyright Oracle

## Installation


~~~~
$ clone https://github.com/shannah/sakila
$ cd sakila
$ ant
$ mysql -u root -e "CREATE DATABASE sakila" -p
$ mysql -u root -p sakila < install.sql
$ mysql -u root -e "CREATE USER sakila@localhost identified by 'password'; GRANT ALL PRIVILEGES ON sakila.* to sakila@localhost;" -p
~~~~

This will create a database named sakila and a user named sakila on the MySQL database.  If you want to change the name of the database and user
you can just change the commands above accordingly, and modify the conf.db.ini file to match.

## Usage

Point browser to the sakila directory:  http://example.com/sakila/

Login using username "ADMIN", password "password".



