<?php

 

return [


    'boolean' => [
        '0' => 'No',
        '1' => 'Si',
    ],

     'SINO' => [
        'NO' => 'NO',
        'SI' => 'SI',
    ],


    'estado' => [
        'NORMAL' => 'NORMAL',
        'NO NORMAL' => 'NO NORMAL',
    ],

    'pregunta' => [
        '1' => 'Practica deporte',
        '2' => 'Frecuencia',
        '3' => 'Ha tenido lesiones deportivas?',
        '4' => 'Actualmente las consume drogas?',
        '5' => 'Consume bebidas alcoholicas?',
        '6' => '  ',
    ],


    'antecedenteclinicios' => [
        'Medicos' => 'Medicos',
        'Quirúrgicos' => 'Quirúrgicos',
        'Traumáticos' => 'Traumáticos',
        'Alérgicos' => 'Alérgicos',
        'Transfusonales' => 'Transfusonales',
        'Psiquiatrícos' => 'Psiquiatrícos',
        'Hospitalizaciones' => 'Hospitalizaciones',
    ],

 
     'tipoid' => [
        'CC' => 'Cedula de Ciudadania (CC)',
        'TI' => 'Tarjeta de identidad (TI)',
        'RC' => 'Registro Civil (RC)',
        'CE' => 'Cedula de extrangeria (CE)',
    ],


    'sexo' => [
        'Masculino' => 'Masculino',
        'Femenino' => 'Femenino',
        'Otro' => 'Otro',
    ],

 

    'gs' => [
        'A+' => 'A+',
        'A-' => 'A-',
        'O+' => 'O+',
        'O-' => 'O-',
        'B+' => 'B+',
        'B-' => 'B-',
        'AB+' => 'AB+',
        'AB-' => 'AB-',
    ],

 

    'ec' => [
        'Soltero' => 'Soltero',
        'Casado' => 'Casado',
        'Union Libre' => 'Union Libre',
        'Viudo' => 'Viudo',
    ],

 

    'zona' => [
        'Urbana' => 'Urbana',
        'Rural' => 'Rural',
    ],

 

    'role' => [
        '0' => 'Usuario',
        '1' => 'Manager',
        '4' => 'Admin',
        '5' => 'Superadmin',
    ],

 

     'riesgo' => [
        '1' => 'I',
        '2' => 'II',
        '3' => 'II',
        '4' => 'IV',
        '5' => 'V',
    ],

    'factorriesgo' => [
        'Físicos' => 'Físicos',
        'Químicos' => 'Químicos',
        'Biológico' => 'Biológico',
        'Ergonómico' => 'Ergonómico',
        'Seguridad' => 'Seguridad',
        'Psicosocial' => 'Psicosocial',
        'Social' => 'Social',
    ],

    'status' => [
        '1' => 'Activo',
        '0' => 'Inactivo',
    ],

 

    'avatar' => [
        'public' => '/files/avatar/',
        'folder' => public_path() . '/files/avatar/',


        'image' => [
            'width'  => 160,
            'height' => 160,
        ]
    ],

 

    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => env('APP_ADMIN', 'admin'),
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),
];
