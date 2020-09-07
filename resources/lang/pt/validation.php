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

    'accepted'             => 'O atributo: deve ser aceito.',
    'active_url'           => 'O atributo: não é um URL válido.',
    'after'                => 'O atributo: deve ser uma data após: data.',
    'after_or_equal'       => 'O atributo: deve ser uma data posterior ou igual a: data.',
    'alpha'                => 'O atributo: pode conter apenas letras.',
    'alpha_dash'           => 'O atributo: pode conter apenas letras, números e traços.',
    'alpha_num'            => 'O atributo: pode conter apenas letras e números.',
    'array'                => 'O atributo: deve ser uma matriz.',
    'before'               => 'O atributo: deve ser uma data antes de: data.',
    'before_or_equal'      => 'O atributo: deve ser uma data anterior ou igual a: data.',
    'between'              => [
        'numeric' => 'O atributo: deve estar entre: min e: max.',
        'file'    => 'O atributo: deve estar entre: min e: max kilobytes.',
        'string'  => 'O atributo: deve estar entre: min e: max caracteres.',
        'array'   => 'O atributo: deve ter entre: min e: max itens.',
    ],
    'boolean'              => 'O campo: attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do atributo: não corresponde.',
    'date'                 => 'O atributo: não é uma data válida.',
    'date_format'          => 'O atributo: não corresponde ao formato: formato.',
    'different'            => 'O: attribute e: other devem ser diferentes.',
    'digits'               => 'O atributo: deve ser: dígitos dígitos.',
    'digits_between'       => 'O atributo: deve estar entre: min e: max digits.',
    'dimensions'           => 'O atributo: possui dimensões de imagem inválidas.',
    'distinct'             => 'O campo: attribute possui um valor duplicado.',
    'email'                => 'O atributo: deve ser um endereço de e-mail válido.',
    'exists'               => 'O atributo selecionado: é inválido.',
    'file'                 => 'O atributo: deve ser um arquivo.',
    'filled'               => 'O campo: attribute é obrigatório.',
    'image'                => 'O atributo: deve ser uma imagem.',
    'in'                   => 'O atributo selecionado: é inválido.',
    'in_array'             => 'O campo: attribute não existe em: outros.',
    'integer'              => 'O atributo: deve ser um número inteiro.',
    'ip'                   => 'O atributo: deve ser um endereço IP válido.',
    'json'                 => 'O atributo: deve ser uma sequência JSON válida.',
    'max'                  => [
        'numeric' => 'O atributo: não pode ser maior que: máx.',
        'file'    => 'O atributo: não pode ser maior que: max kilobytes.',
        'string'  => 'O atributo: não pode ser maior que: max caracteres.',
        'array'   => 'O atributo: pode não ter mais que: max itens.',
    ],
    'mimes'                => 'O atributo: deve ser um arquivo do tipo:: valores.',
    'mimetypes'            => 'O atributo: deve ser um arquivo do tipo:: valores.',
    'min'                  => [
        'numeric' => 'O atributo: deve ser pelo menos: min.',
        'file'    => 'O atributo: deve ter pelo menos: kilobytes mínimos.',
        'string'  => 'O atributo: deve ter pelo menos: caracteres mínimos.',
        'array'   => 'O atributo: deve ter pelo menos: itens mínimos.',
    ],
    'not_in'               => 'O atributo selecionado: é inválido.',
    'numeric'              => 'O atributo: deve ser um número.',
    'present'              => 'O campo: attribute deve estar presente.',
    'regex'                => 'O formato do atributo é inválido.',
    'required'             => 'O campo: attribute é obrigatório.',
    'required_if'          => 'O campo: attribute é obrigatório quando: other é: valores.',
    'required_unless'      => 'O campo: attribute é obrigatório, a menos que: other esteja em: valores.',
    'required_with'        => 'O campo: attribute é obrigatório quando: values ​​estiver presente.',
    'required_with_all'    => 'O campo: attribute é obrigatório quando: values ​​estiver presente.',
    'required_without'     => 'O campo: attribute é obrigatório quando: values ​​não está presente.',
    'required_without_all' => 'O campo: attribute é obrigatório quando nenhum dos: valores estiver presente.',
    'same'                 => 'O: attribute e: outros devem corresponder.',
    'size'                 => [
        'numeric' => 'O atributo deve ser: tamanho.',
        'file'    => 'O atributo: deve ser: tamanho kilobytes.',
        'string'  => 'O atributo: deve ser: caracteres de tamanho.',
        'array'   => 'O atributo: deve conter: itens de tamanho.',
    ],
    'string'               => 'O atributo: deve ser uma sequência.',
    'timezone'             => 'O atributo: deve ser uma zona válida.',
    'unique'               => 'O atributo: já foi utilizado.',
    'uploaded'             => 'O atributo: falhou ao fazer o upload.',
    'url'                  => 'O formato do atributo é inválido.',

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
        's_latitude' => [
            'required' => 'Endereço de origem obrigatório',
        ],
        'd_latitude' => [
            'required' => 'Endereço de destino obrigatório',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
