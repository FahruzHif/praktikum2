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

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/mahasiswa', 'mahasiswa');
Route::view('/dataku', 'dataku', [
	'nama' => ['Muhammad Fahruz Hifzurrahman','Mukhamad Badrud Tamam','Murni Astuti',],
	'alamat' => ['Kendal','Rembang','Magelang'],
	'nim' => ['3.34.19.3.17','3.34.19.3.18','3.34.19.3.19'],
	'semester' => '4',
	'ajaran' => '2021'
]);

Route::get('/dataku/{nim}', function ($nim) {
	if ($nim=="3.34.19.3.17") {
		echo "NIM = 3.34.19.3.17<br>";
		echo "Nama = Muhammad Fahruz Hifzurrahman<br>";
		echo "Alamat = Kendal";
	}
	elseif ($nim=="3.34.19.3.18") {
		echo "NIM = 3.34.19.3.18<br>";
		echo "Nama = Mukhamad Badrud Tamam<br>";
		echo "Alamat = Rembang";
	}
	elseif ($nim=="3.34.19.3.19") {
		echo "NIM = 3.34.19.3.19<br>";
		echo "Nama = Murni Astuti<br>";
		echo "Alamat = Magelang";
	}
	else{
		echo "NIM = $nim<br>";
		echo "Belum terdaftar sebagai mahasiswa";
	}
})->where('id', '[0-9][.]+');

Route::prefix('/admin')->group(function () {
	Route::get('/mahasiswa', function() {
		echo "<h1>Daftar Mahasiswa</h1>";
	});
	Route::get('/dosen', function() {
		echo "<h1>Daftar Dosen</h1>";
	});
	Route::get('/karyawan', function() {
		echo "<h1>Daftar Karyawan</h1>";
	});
});
