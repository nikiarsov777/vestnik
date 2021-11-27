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

    'accepted' => 'Този :attribute трябва да бъде приет.',
    'accepted_if' => 'Този :attribute трябва да бъде приет when :other е :value.',
    'active_url' => 'Този :attribute е not валиден URL.',
    'after' => 'Този :attribute трябва да бъде a date after :date.',
    'after_or_equal' => 'Този :attribute трябва да бъде a date after or equal to :date.',
    'alpha' => 'Този :attribute must only contain letters.',
    'alpha_dash' => 'Този :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'Този :attribute must only contain letters and numbers.',
    'array' => 'Този :attribute трябва да бъде an array.',
    'before' => 'Този :attribute трябва да бъде a date before :date.',
    'before_or_equal' => 'Този :attribute трябва да бъде a date before or equal to :date.',
    'between' => [
        'numeric' => 'Този :attribute трябва да бъде between :min and :max.',
        'file' => 'Този :attribute трябва да бъде between :min and :max kilobytes.',
        'string' => 'Този :attribute трябва да бъде between :min and :max  символи.',
        'array' => 'Този :attribute must have between :min and :max единици.',
    ],
    'boolean' => 'Този :attribute поле трябва да бъде true or false.',
    'confirmed' => ':attribute потвърждаване не съвпада.',
    'current_password' => 'Невалидна парола.',
    'date' => 'Този :attribute е not валиден date.',
    'date_equals' => 'Този :attribute трябва да бъде a date equal to :date.',
    'date_format' => 'Този :attribute does not match the format :format.',
    'declined' => 'Този :attribute трябва да бъде declined.',
    'declined_if' => 'Този :attribute трябва да бъде declined when :other е :value.',
    'different' => 'Този :attribute and :other трябва да бъде different.',
    'digits' => 'Този :attribute трябва да бъде :digits digits.',
    'digits_between' => 'Този :attribute трябва да бъде between :min and :max digits.',
    'dimensions' => 'Този :attribute has невалиден image dimensions.',
    'distinct' => 'Този :attribute поле has a duplicate value.',
    'email' => 'Този :attribute трябва да бъде валиден email address.',
    'ends_with' => 'Този :attribute must end with едно от следващите: :values.',
    'exists' => 'Избраният :attribute е невалиден.',
    'file' => 'Този :attribute трябва да е файл.',
    'filled' => 'Този :attribute поле must have a value.',
    'gt' => [
        'numeric' => 'Този :attribute трябва да бъде greater than :value.',
        'file' => 'Този :attribute трябва да бъде greater than :value kilobytes.',
        'string' => 'Този :attribute трябва да бъде greater than :value  символи.',
        'array' => 'Този :attribute must have more than :value единици.',
    ],
    'gte' => [
        'numeric' => 'Този :attribute трябва да бъде greater than or equal to :value.',
        'file' => 'Този :attribute трябва да бъде greater than or equal to :value kilobytes.',
        'string' => 'Този :attribute трябва да бъде greater than or equal to :value  символи.',
        'array' => 'Този :attribute must have :value единици or more.',
    ],
    'image' => 'Този :attribute трябва да бъде an image.',
    'in' => 'The selected :attribute е невалиден.',
    'in_array' => 'Този :attribute поле does not exist in :other.',
    'integer' => 'Този :attribute трябва да бъде an integer.',
    'ip' => 'Този :attribute трябва да бъде валиден IP address.',
    'ipv4' => 'Този :attribute трябва да бъде валиден IPv4 address.',
    'ipv6' => 'Този :attribute трябва да бъде валиден IPv6 address.',
    'json' => 'Този :attribute трябва да бъде валиден JSON string.',
    'lt' => [
        'numeric' => 'Този :attribute трябва да бъде less than :value.',
        'file' => 'Този :attribute трябва да бъде less than :value kilobytes.',
        'string' => 'Този :attribute трябва да бъде less than :value  символи.',
        'array' => 'Този :attribute must have less than :value единици.',
    ],
    'lte' => [
        'numeric' => 'Този :attribute трябва да бъде less than or equal to :value.',
        'file' => 'Този :attribute трябва да бъде less than or equal to :value kilobytes.',
        'string' => 'Този :attribute трябва да бъде less than or equal to :value  символи.',
        'array' => 'Този :attribute must not have more than :value единици.',
    ],
    'max' => [
        'numeric' => 'Този :attribute must not be greater than :max.',
        'file' => 'Този :attribute must not be greater than :max kilobytes.',
        'string' => 'Този :attribute must not be greater than :max  символи.',
        'array' => 'Този :attribute must not have more than :max единици.',
    ],
    'mimes' => 'Този :attribute трябва да бъде файл от вид: :values.',
    'mimetypes' => 'Този :attribute трябва да бъде файл от вид: :values.',
    'min' => [
        'numeric' => 'Този :attribute трябва да бъде поне :min.',
        'file' => 'Този :attribute трябва да бъде поне :min kilobytes.',
        'string' => 'Този :attribute трябва да бъде поне :min  символи.',
        'array' => 'Този :attribute must have поне :min единици.',
    ],
    'multiple_of' => 'Този :attribute трябва да бъде a multiple of :value.',
    'not_in' => 'The selected :attribute е невалиден.',
    'not_regex' => 'Този :attribute format е невалиден.',
    'numeric' => 'Този :attribute трябва да бъде a number.',
    'password' => 'The password е incorrect.',
    'present' => 'Този :attribute поле трябва да бъде налично.',
    'prohibited' => 'Този :attribute поле е забранен.',
    'prohibited_if' => 'Този :attribute поле е забранен when :other е :value.',
    'prohibited_unless' => 'Този :attribute поле е забранен unless :other е in :values.',
    'prohibited' => 'Този :attribute поле забранени :other from being налично.',
    'regex' => 'Този :attribute format е невалиден.',
    'required' => 'Този :attribute поле е required.',
    'required_if' => 'Този :attribute поле е задължително, когато :other е :value.',
    'required_unless' => 'Този :attribute поле е required unless :other е in :values.',
    'required_with' => 'Този :attribute поле е задължително, когато :values е налично.',
    'required_with_all' => 'Този :attribute поле е задължително, когато :values are налично.',
    'required_without' => 'Този :attribute поле е задължително, когато :values е not налично.',
    'required_without_all' => 'Този :attribute поле е задължително, когато none of :values are налично.',
    'same' => 'Този :attribute and :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Този :attribute трябва да бъде :size.',
        'file' => 'Този :attribute трябва да бъде :size kilobytes.',
        'string' => 'Този :attribute трябва да бъде :size  символи.',
        'array' => 'Този :attribute must contain :size единици.',
    ],
    'starts_with' => 'Този :attribute трябва да започва с едно от следващите: :values.',
    'string' => 'Този :attribute трябва да бъде a string.',
    'timezone' => 'Този :attribute трябва да бъде валиден timezone.',
    'unique' => 'Този :attribute вече е зает.',
    'uploaded' => 'Този :attribute не успя да се качи.',
    'url' => 'Този :attribute трябва да бъде валиден URL.',
    'uuid' => 'Този :attribute трябва да бъде валиден UUID.',

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
