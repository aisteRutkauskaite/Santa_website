<?php


namespace App\Views\Forms\Admin;


use Core\Views\Form;

class AddForm extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'option' => [
                    'label' => 'OPTION',
                    'type' => 'select',
                    'options' => [
                        'public' => 'Public',
                        'not' => 'Not Public'
                    ],
                    'validators' => [
                        'validate_select',
                    ],
                    'value' => 'public',
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your wish',
                            'class' => 'input-field',
                        ],
                    ],
                ],
                'wish' => [
                    'label' => 'Wish',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_number_of_symbols' => [
                            'max' => 200
                        ]
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your wish',
                            'class' => 'input-field',
                        ],
                    ],
                ],
                'source' => [
                    'label' => 'Where to buy?',
                    'type' => 'text',
                    'validators' => [
                        ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter source where to buy',
                            'class' => 'input-field',
                        ],
                    ],
                ],
                'price' => [
                    'label' => 'PRICE OF WISH',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_numeric',
                        'validate_field_range' => [
                            'min' => 1,
                            'max' => 100,
                        ]
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter item\'s price',
                            'class' => 'input-field',
                        ],
                    ],
                ],
            ],

            'buttons' => [
                'send' => [
                    'title' => 'ADD',
                    'type' => 'submit',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn',
                        ],
                    ],
                ],
            ],
        ]);
    }
}