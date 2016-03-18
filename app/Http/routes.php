<?php

Route::get('/', function(){

return <<<HTML
<ul>
    <li> <a href="/login/doctor">Login as doctor</a> </li>
    <li> <a href="/login/patient">Login as patient</a> </li>
    <li> <a href="/login/staff">Login as staff</a> </li>
</ul>
HTML;

});

Route::get('/login/doctor', function() {

    $credentials = [
        'nip' =>  'doc',
        'password' =>  '123456',
    ];

    if (auth('doctor')->attempt($credentials)) {
        return 'Welcome, doctor.';
    }

    return 'Gagal login.';
});

Route::get('/login/patient', function() {

    $credentials = [
        'nip' =>  'pat',
        'password' =>  '123456',
    ];

    if (auth('patient')->attempt($credentials)) {
        return 'Welcome, patient.';
    }

    return 'Gagal login.';
});

Route::get('/login/staff', function() {

    $credentials = [
        'nip' =>  'stf',
        'password' =>  '123456',
    ];

    if (auth('staff')->attempt($credentials)) {
        return 'Welcome, staff.';
    }

    return 'Gagal login.';
});
