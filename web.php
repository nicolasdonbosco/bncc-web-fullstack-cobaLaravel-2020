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



Route::get('/', function()
{
    return '<h1>BNCCBook</h1>
    <h3>Sosial Media Komunitas Komputer Binus Bandung</h3>
    Belajar dan Berbagi dengan sesama
    <h3>Benefit Join di BNCCBook</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama tech enthusiast</li>
        <li>Sharing knowledge dari para pengajar</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h3>Cara bergabung ke BNCCBook</h3>
    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar di Form <a href=/register>Sign Up</a></li>
        <li>Selesai</li>
    </ol>';
});

Route::get('/register', function()
{
    return '<h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>

    <form action="hello.html">
        <label for="firstname">First Name:</label><br><br>
        <input type="text" id="firstname" name="firstname">
        
        <br><br>

        <label for="lastname">Last Name:</label><br><br>
        <input type="text" id="lastname" name="lastname">

        <br><br>

        Gender
        <br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="Nationality">Nationality:</label><br><br>
        <select name="Nationality" id="Nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Other">Other</option>
        </select>

        <br><br>

        Language Spoken:
        <br><br>
        
        <input type="checkbox" id="Indonesia" name="Language" value="Indonesia">
        <label for="Indonesia">Bahasa Indonesia</label><br>

        <input type="checkbox" id="English" name="Language" value="English">
        <label for="Indonesia">English</label><br>

        <input type="checkbox" id="Other" name="Language" value="Other">
        <label for="Other">Other</label><br><br>

        Bio :
        <br><br>
        <textarea id="Bio" name="Bio" rows="10" cols="40"></textarea>
        <br>
        <input type="submit" value="Sign Up">

    </form>';
});