install

```git clone git@github.com:cangak/laravel-simple-auth.git laravel-simple-auth

cd laravel-simple-auth
composer install
composer require laravel/ui 
php artisan ui bootstrap --auth 
npm install && npm run dev
*/ deb seed */
  $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@serah.com',
               'type'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Serah User',
               'email'=>'serah@serah.com',
               'type'=> 'serah',
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'User',
               'email'=>'user@serah.com',
               'type'=>'user',
               'password'=> bcrypt('123456'),
            ],
        ];
        */db seed */
        
php artisan db:seed --class=CreateUsersSeeder
```
cek di 

```app/Models/User.php

protected function type(): Attribute
    {
        return new Attribute(
            get:fn($value) => ["user", "admin", "serah"][$value],
        );
    }
   ```
   
    sesuaikan dengan role yang mau di buat, fungsi pengecekan
    
   auth()->user()->type
    php artisan serve
