<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    |
    |
    */

    'accepted' => ':attribute кабыл алынышы керек.',
    'active_url' => ':attribute жарактуу URL эмес.',
    'after' => ':attribute :date кийинки күн болушу керек.',
    'after_or_equal' => ':attribute :date кийинки же ага барабар дата болушу керек.',
    'alpha' => ':attribute тамгаларды гана камтышы мүмкүн.',
    'alpha_dash' => ':attribute тамгаларды, сандарды, сызыктарды жана астынкы сызыктарды гана камтышы мүмкүн.',
    'alpha_num' => ':attribute тамгаларды жана сандарды гана камтышы мүмкүн.',
    'array' => ':attribute массив болушу керек.',
    'before' => ':attribute :date мурунку күн болушу керек.',
    'before_or_equal' => ':attribute :date чейинки же ага барабар күн болушу керек.',
    'between' => [
        'numeric' => ':attribute :min жана :max ортосунда болушу керек.',
        'file' => ':attribute :min жана :max килобайттын ортосунда болушу керек.',
        'string' => ':attribute :min жана :max символдорунун аралыгында болушу керек.',
        'array' => ':attribute :min жана :max элементтеринин ортосунда болушу керек.',
    ],
    'boolean' => ':attribute талаасы ооба же жок болушу керек.',
    'confirmed' => ':attribute ырастоосу дал келбейт.',
    'date' => ':attribute жарактуу дата эмес.',
    'date_equals' => ':attribute :date барабар күн болушу керек.',
    'date_format' => ':attribute :format форматына дал келбейт.',
    'different' => ':attribute жана :other ар түрдүү болушу керек.',
    'digits' => ':attribute :digits цифрадан турушу керек.',
    'digits_between' => ':attribute :min - :max цифранын арасында болушу керек.',
    'dimensions' => ':attribute жараксыз сүрөт өлчөмдөрү бар.',
    'distinct' => ':attribute талаасында кайталанма маани бар.',
    'email' => ':attribute жарактуу электрондук почта дареги болушу керек.',
    'ends_with' => ':attribute төмөнкүлөрдүн бири менен аякташы керек: :values',
    'exists' => 'Тандалган :attribute жараксыз.',
    'file' => ':attribute файл болушу керек.',
    'filled' => ':attribute талаасында маани болушу керек.',
    'gt' => [
        'numeric' => ':attribute :value дан чоңураак болушу керек.',
        'file' => ':attribute :value килобайттан чоңураак болушу керек.',
        'string' => ':attribute :value символдорунан чоңураак болушу керек.',
        'array' => ':attribute :value элементтен көбүрөөк болушу керек.',
    ],
    'gte' => [
        'numeric' => ':attribute :value дан чоңураак же барабар болушу керек.',
        'file' => ':attribute :value килобайттан чоңураак же барабар болушу керек.',
        'string' => ':attribute :value символдорунан чоңураак же барабар болушу керек.',
        'array' => ':attribute :value элементтен көбүрөөк же барабар болушу керек.',
    ],
    'image' => ':attribute сүрөт болушу керек.',
    'in' => 'Тандалган :attribute жараксыз.',
    'in_array' => ':attribute талаасы : other ичинде жок.',
    'integer' => ':attribute бүтүн сан болушу керек.',
    'ip' => ':attribute жарактуу IP дарек болушу керек.',
    'ipv4' => ':attribute жарактуу IPv4 дареги болушу керек.',
    'ipv6' => ':attribute жарактуу IPv6 дареги болушу керек.',
    'json' => ':attribute жарактуу JSON сап болушу керек.',
    'lt' => [
        'numeric' => ':attribute :value дан кичирээк болушу керек.',
        'file' => ':attribute :value килобайттан кичирээк болушу керек.',
        'string' => ':attribute :value символдорунан кичирээк болушу керек.',
        'array' => ':attribute :value элементтен азыраак болушу керек.',
    ],
    'lte' => [
        'numeric' => ':attribute :value дан кичирээк же барабар болушу керек.',
        'file' => ':attribute :value килобайттан кичирээк же барабар болушу керек.',
        'string' => ':attribute :value символдорунан кичирээк же барабар болушу керек.',
        'array' => ':attribute :value элементтен азыраак же барабар болушу керек.',
    ],
    'max' => [
        'numeric' => ':attribute :max дан чоңураак болбошу керек.',
        'file' => ':attribute :max килобайттан чоң болбошу керек.',
        'string' => ':attribute :max символдон көп болбошу керек.',
        'array' => ':attribute :max элементтен ашпашы керек.',
    ],
    'mimes' => ':attribute :values түрүндөгү файл болушу керек.',
    'mimetypes' => ':attribute :values түрүндөгү файл болушу керек.',
    'min' => [
        'numeric' => ':attribute жок дегенде :min болушу керек.',
        'file' => ':attribute жок дегенде :min килобайт болушу керек.',
        'string' => ':attribute жок дегенде :min символдон турушу керек.',
        'array' => ':attribute жок дегенде :min элемент болуш керек.',
    ],
    'not_in' => 'Тандалган :attribute жараксыз.',
    'not_regex' => ':attribute форматы жараксыз.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'password_or_username' => 'The password or username is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => ':attribute форматы жараксыз.',
    'required' => ':attribute талаасы талап кылынат.',
    'required_if' => ':attribute талаасы :other - :value болгондо талап кылынат.',
    'required_unless' => ':attribute талаасы талап кылынат, :values ичинде :other болмоюнча.',
    'required_with' => ':attribute талаасы :values бар болгондо талап кылынат.',
    'required_with_all' => ':attribute талаасы :values бар болгондо талап кылынат.',
    'required_without' => ':attribute талаасы :values жок болгондо талап кылынат.',
    'required_without_all' => ':attribute талаасы :value бири да жок болгондо талап кылынат.',
    'same' => ':attribute жана : other дал келиши керек.',
    'size' => [
        'numeric' => ':attribute :size болушу керек.',
        'file' => ':attribute :size килобайт болушу керек.',
        'string' => ':attribute :size символдон турушу керек.',
        'array' => ':attribute :size элемент камтыш керек.',
    ],
    'starts_with' => ':attribute төмөнкүлөрдүн бири менен башталышы керек: :values.',
    'string' => ':attribute сап болушу керек.',
    'timezone' => ':attribute жарактуу аймак болушу керек.',
    'unique' => ':attribute мурунтан эле алынган.',
    'uploaded' => ':attribute жүктөлбөй калды.',
    'url' => ':attribute форматы жараксыз.',
    'uuid' => ':attribute жарактуу UUID болушу керек.',

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

    'captcha' => 'Туура эмес кэпча...',
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
