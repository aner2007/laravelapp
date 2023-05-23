Upustva za pokretanje mini App
1. Poslje pokretanja aplikacija prvo treba uraditi migraciju 
2. php artisan migrate
3. Zatim uradit seeder ali ovim redosljedom
- php artisan db:seed --class=UserSeeder
- php artisan db:seed --class=AccommodationSeeder
- php artisan db:seed --class=BookingSeeder
