<?php

return [
    'required' => 'The :attribute field is required.',
    'string' => 'The :attribute field must be a string.',
    'email' => 'The :attribute field must be a valid email address.',
    'max' => [
        'string' => 'The :attribute field must not exceed :max characters.',
    ],
    'regex' => 'The :attribute format is invalid.',
    'attributes' => [
        'name' => 'name',
        'email' => 'email',
        'phone' => 'phone',
        'message' => 'message',
        'lang' => 'lang',
    ],
    'custom' => [
        'name' => [
            'regex' => 'The name can only contain letters and spaces.',
        ],
        'phone' => [
            'regex' => 'The phone number can only contain numbers, +, -, spaces and parentheses.',
        ],
    ],
]; 