<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_pre-header',
        'title' => 'Pre-Header',
        'fields' => array (
            array (
                'key' => 'field_58cefef08eec8',
                'label' => 'Show Pre-Header',
                'name' => 'ph_show',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_58ceff068eec9',
                'label' => 'Background Image',
                'name' => 'ph_img',
                'type' => 'image',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cefef08eec8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_58cf01d01fde5',
                'label' => 'Countdown date',
                'name' => 'ph_countdown',
                'type' => 'date_picker',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cefef08eec8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'date_format' => 'yy-mm-dd',
                'display_format' => 'dd/mm/yy',
                'first_day' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '27',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
