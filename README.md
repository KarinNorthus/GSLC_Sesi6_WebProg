## Nama - NIM : Karin Northus - 2440062086
## Notes :
- Sebuah website bernama "Foodie" yang menampilkan menu makanan, terdiri dari gambar, deskripsi makanan, harga dan tipe makanan (main-course, appetizer atau dessert)
- Bagian pertama website menampilkan carousel menggunakan BootStrap, terdiri dari 3 slide yang menjelaskan 3 tipe makanan yaitu maincourse, appetizer dan dessert.
- Kemudian dilanjutkan dengan menu/data makanan yang ada
- Data makanan diambil dari database, di mana database menggunakan migration dan data di masukkan menggunakan seeder.
- Data makanan diambil melalui table "items"
- Terdapat 1 Controller disini yaitu ItemController, yang terdiri dari function index di mana mengambil data makanan dari database dan mengirimnya ke view (home.blade.php) dengan mengirimkan parameter berupa array data makanan dari database
- Pada file "web.php" routing dilakukan ketika menggunakan '/home'. Di mana akan memanggil ItemController dan merujuk pada function index
- @include digunakan pada file 'template.blade.php', di mana meng-include file 'header.blade.php' yang berisi navbar
- @extends digunakan pada file 'home.blade.php' yang meng-extends file 'template.blade.php'
- @yields digunakan pada file 'template.blade.php'
- @section digunakan pada file 'home.blade.php'
- @foreach digunakan pada file 'home.blade.php' yang digunakan untuk mengambil dan menampilkan semua data makanan dari database
- @if digunakan pada file 'home.blade.php' yang digunakan sebagai pembeda dari 3 tipe makanan yang ada dan dibedakan berdasarkan warna
- Menggunakan framework CSS yaitu bootstrap
## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# GSLC_Session5_WebProg" 
