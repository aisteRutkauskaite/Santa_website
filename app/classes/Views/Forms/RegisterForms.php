<?php


namespace App\Views\Forms;


use Core\Views\Form;

class RegisterForms extends Form
{
    public function __construct()
    {
        parent::__construct([
            'attr' => [
                'method' => 'POST',
            ],
            'fields' => [
                'name' => [
                    'label' => 'NAME',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_symbols_or_numbers',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your name',
                            'class' => 'input-field',
                        ]
                    ]
                ],
                'last_name' => [
                    'label' => 'LAST NAME',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_symbols_or_numbers',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your lastname',
                            'class' => 'input-field',
                        ]
                    ]
                ],
                'email' => [
                    'label' => 'EMAIL',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_email',
                        'validate_user_unique',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter email',
                            'class' => 'input-field',
                        ]
                    ]
                ],
                'password' => [
                    'label' => 'PASSWORD',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter password',
                            'class' => 'input-field',
                        ]
                    ]
                ],
                'password_repeat' => [
                    'label' => 'PASSWORD REPEAT',
                    'type' => 'text',
                    'validators' => [
                        'validate_field_not_empty',
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Repeat password',
                            'class' => 'input-field',
                        ]
                    ]
                ],
            ],
            'buttons' => [
                'send' => [
                    'title' => 'REGISTER',
                    'type' => 'submit',
                    'extra' => [
                        'attr' => [
                            'class' => 'btn',
                        ]
                    ]
                ]
            ],
            'validators' => [
                'validate_fields_match' => [
                    'password',
                    'password_repeat'
                ]
            ]
        ]
    );

    }
}