Сделано на laravel+vue и amocrm sdk

В директории выполнить скрипты

composer install

npm install

npm run dev

cp -a .env.example .en

php artisan key:generate

Я запускал на локальном сервере laravel

php artisan serve

и доступ по нему будет по localhost:8000

После нажатия на Подключить Амо, у меня интеграция имеет статут private https://imgur.com/a/hgadpZu, и возможно не будет работать.
Если так, то нужно заменить в config\amo.php значения и в resources\js\pages\Home.vue client_id и redirect_url.


Далее у меня идет редикт на мой старый сайт и после него, требуется заменить выделенную часть https://imgur.com/a/lR4DGiX, на localhost:8000/amo, и перейти по ссылке


Для ускорения разработки, я оставил сохранение данных в localstorage, но их требуется хранить в базе у пользователя.
