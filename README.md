# Welcome to the PHP MVC framework

## Starting an application using this framework
- Clone the repository with git clone
- Copy .env.example file to .env
- Edit database credentials in .env
- Run composer install
- Create routes, add controllers, views and models.

See below for more details.


## Model-View-Controller
The **Model** represents your data structures. Typically, your model classes will contain functions that help you retrieve, insert, and update information in your database.

The **View** is the information that is being presented to a user. A View will normally be a web page, but can be any type of "page".

The **Controller** serves as an intermediary between the model, the View, and any other resources needed to process the HTTP request and generate a web page.

## Folder Structure
- App
   - _sql
   - controllers
   - models
   - helpers
- Core
   - config
- Public
   - css
   - js
   - uploads
- Resources
   - errors
   - layout
   - home
- Routes

## URL Structure
For website the URL is give below
```
http://localhost/Core_PHP_MVC/

http://localhost/Core_PHP_MVC/user/1/        // pass id in url
```
For API the URL is given below
```
 http://localhost/Core_PHP_MVC/api/users

 http://localhost/Core_PHP_MVC/api/users/1   // get user of id 1
```

## License
[MIT](https://choosealicense.com/licenses/mit/)