Mali, ali funkcionalan web shop napravljen u Laravelu 12, sa modernim dizajnom i administracijom za dodavanje ikona.

#Fukcionalnosti

-Pregled svih dostupnih ikona (naziv, opis, slika, cena, kolicina) -Dodavanje u korpu -Checkout forma sa izborom nacina placanja: 1. Karticom 2.Pouzecem -Admin panel: -Login za administratore -Dodavanje novih ikona (naziv, opis, kolicina, cena, slika, kategorija) 
-Upisivanje porudzbina u bazu

#Tehnologije

-Laravel 12 -Blade templating + Bootstrap 5 -Laravel Breeze za autentikaciju -MySQL baza

#Podesavanje lokalnog okruzenja

-1.Kloniraj repozitorijum

https://github.com/AnnaMmcc/Online-prodavnica-Ikona.git
cd Online-prodavnica-Ikona
-2.Instaliraj dependecije composer install npm install && npm run dev

-3. Kopiraj .env fajl: cp .env.example .env php artisan key:generate

-4.Pokreni migraciju php artisan migrate

-5.Pokreni aplikaciju php artisan serve

Autor: Anja Markovic
