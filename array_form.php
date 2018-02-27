<?php

$incarcare = [

    'soferi'=> [
        'name'=>'soferi',
        'type'=> 'choice',
        'init_data'=> [
            's001'=>'Ion Popescu',
            's002'=>'Dan Manea',
            's003'=>'Alin Ionescu',
            's004'=>'Dan Pop',
            's005'=>'Victor Duta',
            's006'=>'Mihai Danescu',
            's007'=>'Vlad Petre',
            's008'=>'Sorin Popa',
        ],
        'multiple'=>true,
        'expanded'=>true,
        'data'=>[],
        'required'=>1,
    ],

    'numar_inmatriculare'=> [
        'name'=>'numar_inmatriculare',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'marca'=> [
        'name'=>'marca',
        'type'=> 'choice',
        'init_data'=> [
            'volvo'=>'volvo',
            'man'=>'manu',
            'mercedes'=>'mercedes',
            'renault'=>'renault',
            'iveco'=>'iveco',
        ],
        'multiple'=>false,
        'expanded'=>false,
        'data'=>[],
        'required'=>1,
    ],

    'an_fabricatie'=> [
        'name'=>'an_fabricatie',
        'type'=> 'choice',
        'init_data'=> [
            '2007'=>'2007',
            '2008'=>'2008',
            '2009'=>'2009',
            '2010'=>'2010',
            '2011'=>'2011',
            '2012'=>'2012',
            '2013'=>'2013',
            '2014'=>'2014',
            '2015'=>'2015',
            '2016'=>'2016',
        ],
        'multiple'=>false,
        'expanded'=>false,
        'data'=>[],
        'required'=>1,
    ],

    'marfa'=> [
        'name'=>'marfa',
        'type'=> 'choice',
        'init_data'=> [
            'gpl'=>'gpl',
            'benzina'=>'benzina',
        ],
        'multiple'=>false,
        'expanded'=>true,
        'data'=>[],
        'required'=>1,
    ],

    'rafinarie'=> [
        'name'=>'rafinarie',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'aviz_incarcare'=> [
        'name'=>'aviz_incarcare',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'cantitate'=> [
        'name'=>'cantitate',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'densitate'=> [
        'name'=>'densitate',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'data'=> [
        'name'=>'data',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
    ],

    'comentariu'=> [
        'name'=>'comentariu',
        'type'=>'textarea',
        'init_data'=>'',
        'required'=>0,
    ]

];