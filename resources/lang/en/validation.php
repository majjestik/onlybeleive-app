<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Le following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Le :attribute doit être accepté.',
    'accepted_if' => 'Le :attribute doit être accepted lorsque :other est :value.',
    'active_url' => 'Le :attribute n\'est pas a valid URL.',
    'after' => 'Le :attribute doit être a date after :date.',
    'after_or_equal' => 'Le :attribute doit être a date after or equal to :date.',
    'alpha' => 'Le :attribute must only contain letters.',
    'alpha_dash' => 'Le :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'Le :attribute must only contain letters and numbers.',
    'array' => 'Le :attribute doit être an array.',
    'before' => 'Le :attribute doit être a date before :date.',
    'before_or_equal' => 'Le :attribute doit être a date before or equal to :date.',
    'between' => [
        'numeric' => 'Le :attribute doit être between :min and :max.',
        'file' => 'Le :attribute doit être between :min and :max kilobytes.',
        'string' => 'Le :attribute doit être between :min and :max characters.',
        'array' => 'Le :attribute doit avoir between :min and :max items.',
    ],
    'boolean' => 'Le :attribute field doit être true or false.',
    'confirmed' => 'Le :attribute confirmation does not match.',
    'current_password' => 'Le password est incorrect.',
    'date' => 'Le :attribute n\'est pas a valid date.',
    'date_equals' => 'Le :attribute doit être a date equal to :date.',
    'date_format' => 'Le :attribute does not match the format :format.',
    'different' => 'Le :attribute and :other doit être different.',
    'digits' => 'Le :attribute doit être :digits digits.',
    'digits_between' => 'Le :attribute doit être between :min and :max digits.',
    'dimensions' => 'Le :attribute has invalid image dimensions.',
    'distinct' => 'Le :attribute field has a duplicate value.',
    'email' => 'Le :attribute doit être a valid email address.',
    'ends_with' => 'Le :attribute must end with one of the following: :values.',
    'exists' => 'Le selected :attribute est invalid.',
    'file' => 'Le :attribute doit être a file.',
    'filled' => 'Le :attribute field doit avoir a value.',
    'gt' => [
        'numeric' => 'Le :attribute doit être supérieur à :value.',
        'file' => 'Le :attribute doit être supérieur à :value kilobytes.',
        'string' => 'Le :attribute doit être supérieur à :value characters.',
        'array' => 'Le :attribute doit avoir more than :value items.',
    ],
    'gte' => [
        'numeric' => 'Le :attribute doit être supérieur à or equal to :value.',
        'file' => 'Le :attribute doit être supérieur à or equal to :value kilobytes.',
        'string' => 'Le :attribute doit être supérieur à or equal to :value characters.',
        'array' => 'Le :attribute doit avoir :value items or more.',
    ],
    'image' => 'Le :attribute doit être an image.',
    'in' => 'Le selected :attribute est invalid.',
    'in_array' => 'Le :attribute field does not exist in :other.',
    'integer' => 'Le :attribute doit être an integer.',
    'ip' => 'Le :attribute doit être a valid IP address.',
    'ipv4' => 'Le :attribute doit être a valid IPv4 address.',
    'ipv6' => 'Le :attribute doit être a valid IPv6 address.',
    'json' => 'Le :attribute doit être a valid JSON string.',
    'lt' => [
        'numeric' => 'Le :attribute doit être less than :value.',
        'file' => 'Le :attribute doit être less than :value kilobytes.',
        'string' => 'Le :attribute doit être less than :value characters.',
        'array' => 'Le :attribute doit avoir less than :value items.',
    ],
    'lte' => [
        'numeric' => 'Le :attribute doit être less than or equal to :value.',
        'file' => 'Le :attribute doit être less than or equal to :value kilobytes.',
        'string' => 'Le :attribute doit être less than or equal to :value characters.',
        'array' => 'Le :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'Le :attribute ne doit pas être supérieur à :max.',
        'file' => 'Le :attribute ne doit pas être supérieur à :max kilobytes.',
        'string' => 'Le :attribute ne doit pas être supérieur à :max caractères.',
        'array' => 'Le :attribute must not have more than :max élements.',
    ],
    'mimes' => 'Le :attribute doit être a file of type: :values.',
    'mimetypes' => 'Le :attribute doit être a file of type: :values.',
    'min' => [
        'numeric' => 'Le :attribute doit être au moins :min.',
        'file' => 'Le :attribute doit être au moins :min kilobytes.',
        'string' => 'Le :attribute doit être au moins :min caractères.',
        'array' => 'Le :attribute doit avoir au moins :min élements.',
    ],
    'multiple_of' => 'Le :attribute doit être a multiple of :value.',
    'not_in' => 'Le selected :attribute est invalid.',
    'not_regex' => 'Le :attribute format est invalid.',
    'numeric' => 'Le :attribute du cantique doit être un chiffre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le :attribute field doit être present.',
    'regex' => 'Le :attribute format est invalid.',
    'required' => 'Le :attribute du cantique ne peut être vide.',
    'required_if' => 'Le :attribute field est required lorsque :other est :value.',
    'required_unless' => 'Le :attribute field est required unless :other est in :values.',
    'required_with' => 'Le :attribute field est required lorsque :values est present.',
    'required_with_all' => 'Le :attribute field est required lorsque :values are present.',
    'required_without' => 'Le :attribute field est required lorsque :values n\'est pas present.',
    'required_without_all' => 'Le :attribute field est required lorsque none of :values are present.',
    'prohibited' => 'Le :attribute field est prohibited.',
    'prohibited_if' => 'Le :attribute field est prohibited lorsque :other est :value.',
    'prohibited_unless' => 'Le :attribute field est prohibited unless :other est in :values.',
    'prohibits' => 'Le :attribute field prohibits :other from being present.',
    'same' => 'Le :attribute and :other must match.',
    'size' => [
        'numeric' => 'Le :attribute doit être :size.',
        'file' => 'Le :attribute doit être :size kilobytes.',
        'string' => 'Le :attribute doit être :size characters.',
        'array' => 'Le :attribute must contain :size items.',
    ],
    'starts_with' => 'Le :attribute must start with one of the following: :values.',
    'string' => 'Le :attribute du cantique doit être en lettres uniquement.',
    'timezone' => 'Le :attribute doit être a valid timezone.',
    'unique' => 'Le :attribute est déjà pris.',
    'uploaded' => 'Le :attribute failed to upload.',
    'url' => 'Le :attribute doit être a valid URL.',
    'uuid' => 'Le :attribute doit être a valid UUID.',

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
