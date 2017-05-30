# Money-Manager
Web application to manage your finances

First clone this git repository: ```git clone https://github.com/victor-michaux/Money-Manager.git```

To install laravel's dependencies, you will need to use composer : https://getcomposer.org/

Run in the project folder : ```composer install```

Copy the .env.example file and paste it in a new file that is named .env in the root directory.
You need to complete the database connection informations : 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

You also need to configure your mail driver
```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

Now you need to migrate the database to create all the tables : ```php artisan migrate```

You have to run this sql script in order to fill some data that are needed for the application good running: 
```
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'Food','2017-05-19 04:07:17','2017-05-19 04:07:17'),
	(2,'Sport','2017-05-19 04:07:24','2017-05-19 04:07:24'),
	(3,'Entertainment','2017-05-19 04:07:35','2017-05-19 04:07:35'),
	(4,'Video Game','2017-05-19 04:07:47','2017-05-19 04:07:47'),
	(5,'IT','2017-05-19 04:08:01','2017-05-19 04:08:01'),
	(6,'Clothing','2017-05-19 04:08:12','2017-05-19 04:08:12'),
	(7,'Donation','2017-05-30 13:12:15','2017-05-30 13:12:15');

INSERT INTO `operation_types` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'income','2017-05-19 04:04:17','2017-05-19 04:04:17'),
	(2,'expense','2017-05-19 04:04:24','2017-05-19 04:04:24'),
	(3,'prevision','2017-05-19 04:04:31','2017-05-19 04:04:31');
  ```
  
  API installation: ```php artisan passport:install```
  
  **You're now ready to run the application :)**
