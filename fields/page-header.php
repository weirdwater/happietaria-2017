<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_page-header',
        'title' => 'Page Content Header',
        'fields' => array (
            array (
                'key' => 'field_58c858596fbb4',
                'label' => 'Page Header',
                'name' => '',
                'type' => 'message',
                'message' => 'Each page has a page header. It displays the featured image of a post or page. What is optional is content displayed in the page header. It will appear as a box in the header.',
            ),
            array (
                'key' => 'field_58ca6cf7046b8',
                'label' => 'Show header',
                'name' => 'show_page_header',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 1,
            ),
            array (
                'key' => 'field_58c856fab45bc',
                'label' => 'Show content',
                'name' => 'page_header_show_content',
                'type' => 'true_false',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58ca6cf7046b8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_58c858c66fbb5',
                'label' => 'Featured Image',
                'name' => 'page_header_image',
                'type' => 'image',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58c856fab45bc',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'save_format' => 'object',
                'preview_size' => 'full',
                'library' => 'all',
            ),
            array (
                'key' => 'field_58c856d9b45bb',
                'label' => 'Title',
                'name' => 'page_header_title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58c856fab45bc',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58c8577db45bd',
                'label' => 'Body',
                'name' => 'page_header_body',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58c856fab45bc',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'formatting' => 'br',
            ),
            array (
                'key' => 'field_58c85795b45be',
                'label' => 'Call-To-Action Label',
                'name' => 'page_header_cta',
                'type' => 'text',
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58c856fab45bc',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58c857beb45bf',
                'label' => 'Call-To-Action Link',
                'name' => 'page_header_cta_url',
                'type' => 'page_link',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58c856fab45bc',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'post_type' => array (
                    0 => 'all',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            )
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
