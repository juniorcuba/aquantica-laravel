<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'string' => 'El campo :attribute debe ser una cadena de texto.',
    'email' => 'El campo :attribute debe ser una dirección de correo válida.',
    'max' => [
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',
    ],
    'regex' => 'El formato del campo :attribute no es válido.',
    'attributes' => [
        'name' => 'nombre',
        'email' => 'correo electrónico',
        'phone' => 'teléfono',
        'message' => 'mensaje',
    ],
    'custom' => [
        'name' => [
            'regex' => 'El nombre solo puede contener letras y espacios.',
        ],
        'phone' => [
            'regex' => 'El teléfono solo puede contener números, +, -, espacios y paréntesis.',
        ],
    ],
]; 