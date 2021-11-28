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

    'accepted' => 'Това :attribute трябва да бъде приет.',
    'accepted_if' => 'Това :attribute трябва да бъде приет when :other е :value.',
    'active_url' => 'Това :attribute е not валиден URL.',
    'after' => 'Това :attribute трябва да бъде a date after :date.',
    'after_or_equal' => 'Това :attribute трябва да бъде a date after or equal to :date.',
    'alpha' => 'Това :attribute трябва да съдържа само букви.',
    'alpha_dash' => 'Това :attribute трябва да съдържа само букви, numbers, dashes and underscores.',
    'alpha_num' => 'Това :attribute трябва да съдържа само букви and numbers.',
    'array' => 'Това :attribute трябва да бъде an array.',
    'before' => 'Това :attribute трябва да бъде a date before :date.',
    'before_or_equal' => 'Това :attribute трябва да бъде a date before or equal to :date.',
    'between' => [
        'numeric' => 'Това :attribute трябва да бъде между :min and :max.',
        'file' => 'Това :attribute трябва да бъде между :min and :max kilobytes.',
        'string' => 'Това :attribute трябва да бъде между :min and :max  символи.',
        'array' => 'Това :attribute must have между :min and :max единици.',
    ],
    'boolean' => 'Това :attribute поле трябва да бъде true or false.',
    'confirmed' => ':attribute потвърждаване не съвпада.',
    'current_password' => 'Невалидна парола.',
    'date' => 'Това :attribute е not валиден date.',
    'date_equals' => 'Това :attribute трябва да бъде дата равна на :date.',
    'date_format' => 'Това :attribute does not match the format :format.',
    'declined' => 'Това :attribute трябва да бъде declined.',
    'declined_if' => 'Това :attribute трябва да бъде declined when :other е :value.',
    'different' => 'Това :attribute and :other трябва да бъде different.',
    'digits' => 'Това :attribute трябва да бъде :digits digits.',
    'digits_between' => 'Това :attribute трябва да бъде между :min and :max digits.',
    'dimensions' => 'Това :attribute has невалиден размери на картината.',
    'distinct' => 'Това :attribute поле has a duplicate value.',
    'email' => 'Това :attribute трябва да бъде валиден email address.',
    'ends_with' => 'Това :attribute must end with едно от следващите: :values.',
    'exists' => 'Избраният :attribute е невалиден.',
    'file' => 'Това :attribute трябва да е файл.',
    'filled' => 'Това :attribute поле must have a value.',
    'gt' => [
        'numeric' => 'Това :attribute трябва да бъде greater than :value.',
        'file' => 'Това :attribute трябва да бъде greater than :value kilobytes.',
        'string' => 'Това :attribute трябва да бъде greater than :value  символи.',
        'array' => 'Това :attribute must have more than :value единици.',
    ],
    'gte' => [
        'numeric' => 'Това :attribute трябва да бъде greater than or equal to :value.',
        'file' => 'Това :attribute трябва да бъде greater than or equal to :value kilobytes.',
        'string' => 'Това :attribute трябва да бъде greater than or equal to :value  символи.',
        'array' => 'Това :attribute must have :value единици or more.',
    ],
    'image' => 'Това :attribute трябва да бъде an image.',
    'in' => 'The selected :attribute е невалиден.',
    'in_array' => 'Това :attribute поле does not exist in :other.',
    'integer' => 'Това :attribute трябва да бъде an integer.',
    'ip' => 'Това :attribute трябва да бъде валиден IP address.',
    'ipv4' => 'Това :attribute трябва да бъде валиден IPv4 address.',
    'ipv6' => 'Това :attribute трябва да бъде валиден IPv6 address.',
    'json' => 'Това :attribute трябва да бъде валиден JSON string.',
    'lt' => [
        'numeric' => 'Това :attribute трябва да бъде less than :value.',
        'file' => 'Това :attribute трябва да бъде less than :value kilobytes.',
        'string' => 'Това :attribute трябва да бъде less than :value  символи.',
        'array' => 'Това :attribute must have less than :value единици.',
    ],
    'lte' => [
        'numeric' => 'Това :attribute трябва да бъде less than or equal to :value.',
        'file' => 'Това :attribute трябва да бъде less than or equal to :value kilobytes.',
        'string' => 'Това :attribute трябва да бъде less than or equal to :value  символи.',
        'array' => 'Това :attribute must not have more than :value единици.',
    ],
    'max' => [
        'numeric' => 'Това :attribute must not be greater than :max.',
        'file' => 'Това :attribute must not be greater than :max kilobytes.',
        'string' => 'Това :attribute must not be greater than :max  символи.',
        'array' => 'Това :attribute must not have more than :max единици.',
    ],
    'mimes' => 'Това :attribute трябва да бъде файл от вид: :values.',
    'mimetypes' => 'Това :attribute трябва да бъде файл от вид: :values.',
    'min' => [
        'numeric' => 'Това :attribute трябва да бъде поне :min.',
        'file' => 'Това :attribute трябва да бъде поне :min kilobytes.',
        'string' => 'Това :attribute трябва да бъде поне :min  символи.',
        'array' => 'Това :attribute must have поне :min единици.',
    ],
    'multiple_of' => 'Това :attribute трябва да бъде a multiple of :value.',
    'not_in' => 'The selected :attribute е невалиден.',
    'not_regex' => 'Това :attribute format е невалиден.',
    'numeric' => 'Това :attribute трябва да бъде a number.',
    'password' => 'The password е incorrect.',
    'present' => 'Това :attribute поле трябва да бъде налично.',
    'prohibited' => 'Това :attribute поле е забранен.',
    'prohibited_if' => 'Това :attribute поле е забранен when :other е :value.',
    'prohibited_unless' => 'Това :attribute поле е забранен unless :other е in :values.',
    'prohibits' => 'Това :attribute поле забранени :other from being налично.',
    'regex' => 'Това :attribute format е невалиден.',
    'required' => 'Това :attribute поле е задължително.',
    'required_if' => 'Това :attribute поле е задължително, когато :other е :value.',
    'required_unless' => 'Това :attribute поле е задължително unless :other е in :values.',
    'required_with' => 'Това :attribute поле е задължително, когато :values е налично.',
    'required_with_all' => 'Това :attribute поле е задължително, когато :values are налично.',
    'required_without' => 'Това :attribute поле е задължително, когато :values е not налично.',
    'required_without_all' => 'Това :attribute поле е задължително, когато none of :values are налично.',
    'same' => 'Това :attribute and :other трябва да съвпадат.',
    'size' => [
        'numeric' => 'Този :attribute трябва да бъде :size.',
        'file' => 'Този :attribute трябва да бъде :size kilobytes.',
        'string' => 'Този :attribute трябва да бъде :size  символи.',
        'array' => 'Този :attribute трябва да съдържа :size единици.',
    ],
    'starts_with' => 'Това :attribute трябва да започва с едно от следващите: :values.',
    'string' => 'Това :attribute трябва да бъде низ.',
    'timezone' => 'Това :attribute трябва да бъде валиден timezone.',
    'unique' => 'Това :attribute вече е зает.',
    'uploaded' => 'Това :attribute не успя да се качи.',
    'url' => 'Това :attribute трябва да бъде валиден URL.',
    'uuid' => 'Това :attribute трябва да бъде валиден UUID.',

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
