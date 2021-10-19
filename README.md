##Setup Instructions


Install dependencies
```
composer install
``` 

Copy .env file  for configurations

```
cp .env.example .env
```

Generate app key
```
php artisan key:generate
```

Database migration and seed data
```
php artisan migrate:fresh --seed
```

Run the local test server

```
php artisan serve
```

API access

```
**_~~localhost:8000/api/v1/runner/{runnerId}/form-data~~_**
```

Run API test

```
php artisan test
