<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

Route::resource('studio', 'StudioController');
Route::get('studio/{studio}/delete', 'StudioController@destroy');

Route::resource('booking', 'BookingController');
Route::get('booking/{booking}/delete', 'BookingController@destroy');
Route::get('booking/{id}/getData', 'BookingController@getData');

Route::resource('kalender', 'KalenderController');

Route::resource('user', 'UserController');
Route::get('user/{user}/delete', 'UserController@destroy');

Route::resource('bobot', 'BobotController');

Route::resource('perhitungan', 'PerhitunganController');


Route::get('dbobot', function() {
    DB::table('bobot')->insert([
        [
            'kelengkapan_alat'  => '0.242',
            'kualitas_alat'     => '0.242',
            'kualitas_ruangan'  => '0.242',
            'harga'             => '0.123',
            'pelayanan'         => '0.070',
            'fasilitas'         => '0.039',
            'waktu_operasional' => '0.021',
            'suasana_studio'    => '0.021',
            'created_at'        => '2021-01-06 10:10:15',
            'updated_at'        => '2021-01-06 10:10:15'
        ],
    ]);
});

Route::get('duser', function() {
    DB::table('users')->insert([
        [
            'name'          => 'alfis',
            'no_identitas'  => '32010230203020',
            'telefon'       => '0812-3328-3223',
            'email'         => 'alfis@admin.com',
            'password'      => '1234567890',
            'level'         => 'admin',
            'izin'          => '0',
            'created_at'    => '2021-06-16 13:50:55',
            'updated_at'    => '2021-06-16 13:50:55',
        ],
        [
            'name'          => 'operator alzena studio',
            'no_identitas'  => '320339393939394',
            'telefon'       => '0812-3322-3232',
            'email'         => 'alzena@studio.com',
            'password'      => '1234567890',
            'level'         => 'operator',
            'izin'          => '0',
            'created_at'    => '2021-06-16 13:53:41',
            'updated_at'    => '2021-06-16 13:53:41',
        ],
        [
            'name'          => 'operator studio legend',
            'no_identitas'  => '32023232323223',
            'telefon'       => '0812-3329-2332',
            'email'         => 'legend@studio.com',
            'password'      => '1234567890',
            'level'         => 'operator',
            'izin'          => '0',
            'created_at'    => '2021-06-16 13:54:36',
            'updated_at'    => '2021-06-16 13:54:36',
        ],
        [  
            'name'          => 'operator fariz studio',
            'no_identitas'  => '32009093232232',
            'telefon'       => '0822-3221-2321',
            'email'         => 'fariz@studio.com',
            'password'      => '1234567890',
            'level'         => 'operator',
            'izin'          => '0',   
            'created_at'    => '2021-06-16 13:58:28',
            'updated_at'    => '2021-06-16 13:58:28',
        ],
        [  
            'name'          => 'operator studio 86',
            'no_identitas'  => '32030493920323',
            'telefon'       => '0812-3323-2123',
            'email'         => '86@studio.com',
            'password'      => '1234567890',
            'level'         => 'operator',
            'izin'          => '0',
            'created_at'    => '2021-06-16 14:00:13',
            'updated_at'    => '2021-06-16 14:00:13',
        ],
        [
            'name'          => 'operator woodstock studio',
            'no_identitas'  => '3203909232320',
            'telefon'       => '0812-3232-1232',
            'email'         => 'woodstock@studio.com',
            'password'      => '1234567890',
            'level'         => 'operator',
            'izin'          => '0',
            'created_at'    => '2021-06-16 14:01:24',
            'updated_at'    => '2021-06-16 14:01:24',
        ],
    ]);
});

Route::get('dstudio', function() {
    DB::table('studio')->insert([
        [
            'nama_studio'    =>'alzena studio',
            'telefon'        =>'Gg. Asem Pamulang',
            'jumlah_ruangan' =>'0822-6117-2107',
            'fasilitas'      =>'2',
            'harga'          =>'2',
            'buka'           =>'60,000',
            'tutup'          =>'10:00:00',
            'id_users'       =>'00:00:00',
            'alamat'         =>'9',
            'created_at'     =>'2021-06-16 15:12:51',
            'updated_at'     =>'2021-06-16 15:12:51',
        ],
        [         
            'nama_studio'    =>'studio legend',
            'telefon'        =>'Pd. Ranji Ciputat',
            'jumlah_ruangan' =>'0819-0630-2657',
            'fasilitas'      =>'2',
            'harga'          =>'2',
            'buka'           =>'45,000',
            'tutup'          =>'10:00:00',
            'id_users'       =>'23:59:00',
            'alamat'         =>'10',
            'created_at'     =>'2021-06-16 15:17:24',
            'updated_at'     =>'2021-06-16 15:17:24',
        ],
        [
            'nama_studio'    =>'fariz studio music',
            'telefon'        =>'Pisangan, Ciputat',
            'jumlah_ruangan' =>'0897-9647-495_',
            'fasilitas'      =>'2',
            'harga'          =>'2',
            'buka'           =>'35,000',
            'tutup'          =>'08:00:00',
            'id_users'       =>'23:00:00',
            'alamat'         =>'11',
            'created_at'     =>'2021-06-16 15:20:02',
            'updated_at'     =>'2021-06-16 15:20:02',
        ],
        [
            'nama_studio'    =>'studio music 86',
            'telefon'        =>'Cirendeu, Ciputat',
            'jumlah_ruangan' =>'0217-5057-97__',
            'fasilitas'      =>'2',
            'harga'          =>'1',
            'buka'           =>'50,000',
            'tutup'          =>'10:00:00',
            'id_users'       =>'23:00:00',
            'alamat'         =>'12',
            'created_at'     =>'2021-06-16 15:22:03',
            'updated_at'     =>'2021-06-16 15:22:03',
        ],
        [
            'nama_studio'    =>'woodstock studio',
            'telefon'        =>'Benda baru, Pamulang',
            'jumlah_ruangan' =>'0813-1765-9330',
            'fasilitas'      =>'2',
            'harga'          =>'1',
            'buka'           =>'65,000',
            'tutup'          =>'10:00:00',
            'id_users'       =>'23:59:00',
            'alamat'         =>'13',
            'created_at'     =>'2021-06-16 15:24:23',
            'updated_at'     =>'2021-06-16 15:24:23',
        ],
    ]);
});        

Route::get('dkonversi', function() {
    DB::table('konversi')->insert([
        [
            'id_studio'         =>'7',
            'kelengkapan_alat'  =>'4',
            'kualitas_alat'     =>'5',
            'kualitas_ruangan'  =>'4',
            'harga'             =>'5',
            'pelayanan'         =>'5',
            'fasilitas'         =>'2',
            'waktu_operasional' =>'6',
            'suasana_studio'    =>'4',
            'created_at'        =>'2021-06-16 15:12:51',
            'updated_at'        =>'2021-06-16 15:12:51',
        ],
        [
            'id_studio'         =>'8',
            'kelengkapan_alat'  =>'4',
            'kualitas_alat'     =>'3',
            'kualitas_ruangan'  =>'3',
            'harga'             =>'6',
            'pelayanan'         =>'3',
            'fasilitas'         =>'2',
            'waktu_operasional' =>'6',
            'suasana_studio'    =>'3',
            'created_at'        =>'2021-06-16 15:17:24',
            'updated_at'        =>'2021-06-16 15:17:24',
        ],
        [
            'id_studio'         =>'9',
            'kelengkapan_alat'  =>'3',
            'kualitas_alat'     =>'3',
            'kualitas_ruangan'  =>'3',
            'harga'             =>'6',
            'pelayanan'         =>'5',
            'fasilitas'         =>'2',
            'waktu_operasional' =>'6',
            'suasana_studio'    =>'3',
            'created_at'        =>'2021-06-16 15:20:02',
            'updated_at'        =>'2021-06-16 15:20:02',
        ],
        [
            'id_studio'         =>'10',
            'kelengkapan_alat'  =>'4',
            'kualitas_alat'     =>'4',
            'kualitas_ruangan'  =>'4',
            'harga'             =>'6',
            'pelayanan'         =>'4',
            'fasilitas'         =>'1',
            'waktu_operasional' =>'6',
            'suasana_studio'    =>'4',
            'created_at'        =>'2021-06-16 15:22:03',
            'updated_at'        =>'2021-06-16 15:22:03',
        ],
        [
            'id_studio'         =>'11',
            'kelengkapan_alat'  =>'4',
            'kualitas_alat'     =>'4',
            'kualitas_ruangan'  =>'4',
            'harga'             =>'5',
            'pelayanan'         =>'3',
            'fasilitas'         =>'1',
            'waktu_operasional' =>'6',
            'suasana_studio'    =>'4',
            'created_at'        =>'2021-06-16 15:24:23',
            'updated_at'        =>'2021-06-16 15:24:23',
        ],
    ]);
});        


