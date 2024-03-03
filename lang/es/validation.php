<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'Whoops! Something went wrong.' => 'Ups! Algo ha ido mal.',

    'accepted' => 'El dato :attribute debe ser aceptado.',
    'accepted_if' => 'El dato :attribute debe ser aceptado cuando :other tiene el valor :value.',
    'active_url' => 'El dato :attribute debe ser una URL válida.',
    'after' => 'El dato :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El dato :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El dato :attribute debe contener exclusivamente letras.',
    'alpha_dash' => 'El dato :attribute debe contener exclusivamente letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El dato :attribute debe ser alfanumérico.',
    'array' => 'El dato :attribute debe ser una lista.',
    'ascii' => 'El dato :attribute debe contener exclusivamente carácteres alfanuméricos y símbolos de 1 byte.',
    'before' => 'El dato :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El dato :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El dato :attribute debe contener entre :min y :max elementos.',
        'file' => 'El archivo :attribute debe tener un tamaño entre :min y :max kilobytes.',
        'numeric' => 'El dato :attribute debe estar entre :min y :max.',
        'string' => 'El dato :attribute debe estar entre :min y :max caracteres.',
    ],
    'boolean' => 'El dato :attribute debe ser cierto o falso.',
    'can' => 'El dato :attribute contiene un valor no autorizado.',
    'confirmed' => 'El dato :attribute no coincide con el valor confirmado.',
    'current_password' => 'La contraseña es incorrecta.',
    'date' => 'El dato :attribute debe ser una fecha válida.',
    'date_equals' => 'El dato :attribute debe ser una fecha igual a :date.',
    'date_format' => 'El dato :attribute debe tener el formato :format.',
    'decimal' => 'El dato :attribute debe tener :decimal decimales.',
    'declined' => 'El dato :attribute debe ser rechazado.',
    'declined_if' => 'El dato :attribute debe ser rechazado cuando :other vale :value.',
    'different' => 'Los datos :attribute y :other deben ser distintos.',
    'digits' => 'El dato :attribute debe tener :digits dígitos.',
    'digits_between' => 'El dato :attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'El dato :attribute tiene dimensiones de imagen inválidas.',
    'distinct' => 'El dato :attribute tiene un valor duplicado.',
    'doesnt_end_with' => 'El dato :attribute no debe terminar con los siguientes valores: :values.',
    'doesnt_start_with' => 'El dato :attribute no debe comenzar con los siguientes valores: :values.',
    'email' => 'El dato :attribute debe ser un correo electrónico válido.',
    'ends_with' => 'El dato :attribute debe terminar con uno de los siguientes valores: :values.',
    'enum' => 'El dato seleccionado :attribute es inválido.',
    'exists' => 'El dato seleccionado :attribute es inválido.',
    'extensions' => 'El dato :attribute debe tener una de las siguientes extensiones: :values.',
    'file' => 'El dato :attribute debe ser un archivo.',
    'filled' => 'El dato :attribute debe estar relleno.',
    'gt' => [
        'array' => 'El dato :attribute debe tener más de :value elementos.',
        'file' => 'El archivo :attribute debe pesar más de :value kilobytes.',
        'numeric' => 'El dato :attribute debe ser superior a :value.',
        'string' => 'El dato :attribute debe tener más de :value caracteres.',
    ],
    'gte' => [
        'array' => 'El dato :attribute debe tener como mínimo :value elementos.',
        'file' => 'El archivo :attribute debe pesar como mínimo :value kilobytes.',
        'numeric' => 'El dato :attribute debe ser igual o superior a :value.',
        'string' => 'El dato :attribute debe tener como mínimo :value characters.',
    ],
    'hex_color' => 'El dato :attribute debe ser un código de color hexadecimal válido.',
    'image' => 'El dato :attribute debe ser una imagen.',
    'in' => 'El dato seleccionado :attribute es inválido.',
    'in_array' => 'El dato :attribute debe existir en :other.',
    'integer' => 'El dato :attribute debe ser un número entero.',
    'ip' => 'El dato :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El dato :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El dato :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El dato :attribute debe ser una cadena JSON válida.',
    'lowercase' => 'El dato :attribute debe estar en minúsculas.',
    'lt' => [
        'array' => 'El dato :attribute debe tener menos de :value elementos.',
        'file' => 'El archivo :attribute debe pesar menos de :value kilobytes.',
        'numeric' => 'El dato :attribute debe ser inferior a :value.',
        'string' => 'El dato :attribute debe ser de menos de :value caracteres.',
    ],
    'lte' => [
        'array' => 'El dato :attribute field no puede tener más de :value elementos.',
        'file' => 'El archivo :attribute debe pesar como máximo :value kilobytes.',
        'numeric' => 'El dato :attribute field debe ser como máximo :value.',
        'string' => 'El dato :attribute debe ser como máximo de :value caracteres.',
    ],
    'mac_address' => 'El dato :attribute debe ser una dirección MAC válida.',
    'max' => [
        'array' => 'El dato :attribute no debe tener más de :max elementos.',
        'file' => 'El archivo :attribute no debe pesar más de :max kilobytes.',
        'numeric' => 'El dato :attribute no puede ser superior a :max.',
        'string' => 'El dato :attribute no puede ser superior a :max caracteres.',
    ],
    'max_digits' => 'El dato :attribute no puede consistir de más de :max dígitos.',
    'mimes' => 'El dato :attribute debe ser un archivo de tipo: :values.',
    'mimetypes' => 'El dato :attribute debe ser un archivo de tipo: :values.',
    'min' => [
        'array' => 'El dato :attribute debe contener al menos :min elementos.',
        'file' => 'El archivo :attribute debe pesar como mínimo :min kilobytes.',
        'numeric' => 'El dato :attribute debe ser como mínimo :min.',
        'string' => 'El dato :attribute debe tener al menos :min caracteres.',
    ],
    'min_digits' => 'El dato :attribute debe tener al menos :min dígitos.',
    'missing' => 'El dato :attribute debe estar ausente.',
    'missing_if' => 'El dato :attribute debe estar ausente cuando :other vale :value.',
    'missing_unless' => 'El dato :attribute debe estar ausente a menos que :other valga :value.',
    'missing_with' => 'El dato :attribute debe estar ausente cuando :values se ha informado.',
    'missing_with_all' => 'El dato :attribute debe estar ausente cuando todos los :values están informados.',
    'multiple_of' => 'El dato :attribute debe ser un múltiplo de :value.',
    'not_in' => 'El dato :attribute es inválido.',
    'not_regex' => 'El dato :attribute tiene un formato inválido.',
    'numeric' => 'El dato :attribute debe ser numérico.',
    'password' => [
        'letters' => 'El dato :attribute debe contener al menos una letra.',
        'mixed' => 'El dato :attribute debe contener al menos una mayúscula y una minúscula.',
        'numbers' => 'El dato :attribute debe contener al menos un número.',
        'symbols' => 'El dato :attribute debe contener al menos un símbolo.',
        'uncompromised' => 'El dato :attribute es un valor comprometido. Por favor, escoge otro :attribute.',
    ],
    'present' => 'El dato :attribute debe estar presente.',
    'present_if' => 'El dato :attribute debe estar presente cuando :other vale :value.',
    'present_unless' => 'El dato :attribute debe estar presente a menos que :other valga :value.',
    'present_with' => 'El dato :attribute debe estar presente cuando :values se ha informado.',
    'present_with_all' => 'El dato :attribute debe estar presente cuando todos los valores de :values han sido informados.',
    'prohibited' => 'El dato :attribute está prohibido.',
    'prohibited_if' => 'El dato :attribute está prohibido cuando :other vale :value.',
    'prohibited_unless' => 'El dato :attribute está prohibido a menos que :other esté en :values.',
    'prohibits' => 'El dato :attribute prohibe que :other esté presente.',
    'regex' => 'El dato :attribute tiene un formato inválido.',
    'required' => 'El dato :attribute es obligatorio.',
    'required_array_keys' => 'El dato :attribute debe contener entradas para los valores: :values.',
    'required_if' => 'El dato :attribute es obligatorio cuando :other vale :value.',
    'required_if_accepted' => 'El dato :attribute es obligatorio cuando :other se ha aceptado.',
    'required_unless' => 'El dato :attribute es obligatorio a menos que :other esté comprendido en :values.',
    'required_with' => 'El dato :attribute es obligatorio cuando alguno de los valores :values está presente.',
    'required_with_all' => 'El dato :attribute es obligatorio cuando todos los valores :values están presentes.',
    'required_without' => 'El dato :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El dato :attribute es obligatorio cuando ninguno de los valores :values están presentes.',
    'same' => 'El dato :attribute debe coincidir con :other.',
    'size' => [
        'array' => 'El dato :attribute debe contener :size elementos.',
        'file' => 'El archivo :attribute debe pesar :size kilobytes.',
        'numeric' => 'El dato :attribute debe ser de tamaño :size.',
        'string' => 'El dato :attribute debe ser de :size caracteres.',
    ],
    'starts_with' => 'El dato :attribute debe comenzar por uno de los siguientes valores: :values.',
    'string' => 'El dato :attribute debe ser una cadena de texto.',
    'timezone' => 'El dato :attribute debe ser una zona horaria válida.',
    'unique' => 'El dato :attribute ya ha sido reclamado.',
    'uploaded' => 'Ha fallado la subida del archivo :attribute.',
    'uppercase' => 'El dato :attribute debe ser en mayúsculas.',
    'url' => 'El dato :attribute debe ser una URL válida.',
    'ulid' => 'El dato :attribute debe ser un ULID válido.',
    'uuid' => 'El dato :attribute debe ser un UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
