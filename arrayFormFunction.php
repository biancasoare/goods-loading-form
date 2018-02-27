<?php

$incarcare = [

    'soferi'=> [
        'name'=>'soferi',
        'type'=> 'checkbox',
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
        'label' => 'Soferi:',
    ],

    'numar_inmatriculare'=> [
        'name'=>'numar_inmatriculare',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Numar inmatriculare:',
        'value' => '',
    ],

    'marca'=> [
        'name'=>'marca',
        'type'=> 'select',
        'init_data'=> [
            'volvo'=>'Volvo',
            'manu'=>'Manu',
            'mercedes'=>'Mercedes',
            'renault'=>'Renault',
            'iveco'=>'Iveco',
        ],
        'multiple'=>false,
        'expanded'=>false,
        'data'=>[],
        'required'=>1,
        'label' => 'Marca:',
    ],

    'an_fabricatie'=> [
        'name'=>'an_fabricatie',
        'type'=> 'select',
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
        'label' => 'An fabricatie:',
    ],

    'marfa'=> [
        'name'=>'marfa',
        'type'=> 'radio',
        'init_data'=> [
            'gpl'=>'gpl',
            'benzina'=>'benzina',
        ],
        'multiple'=>false,
        'expanded'=>true,
        'data'=>[],
        'required'=>1,
        'label' => 'Marfa:',
    ],

    'rafinarie'=> [
        'name'=>'rafinarie',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Rafinarie:',
        'value' => '',
    ],

    'aviz_incarcare'=> [
        'name'=>'aviz_incarcare',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Aviz incarcare:',
        'value' => '',
    ],

    'cantitate'=> [
        'name'=>'cantitate',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Cantitate:',
        'value' => '',
    ],

    'densitate'=> [
        'name'=>'densitate',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Densitate:',
        'value' => '',
    ],

    'data'=> [
        'name'=>'data',
        'type'=>'text',
        'init_data'=>'',
        'required'=>1,
        'label' => 'Data:',
        'value' => '',
    ],

    'comentariu'=> [
        'name'=>'comentariu',
        'type'=>'textarea',
        'init_data'=>'',
        'required'=>0,
        'label' => 'Comentariu:',
        'value' => '',
    ]

];