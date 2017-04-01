<?php

if(function_exists("register_field_group"))
{
    register_field_group(array (
        'id' => 'acf_homepage-content',
        'title' => 'Homepage Content',
        'fields' => array (
            array (
                'key' => 'field_58cee5b44c8de',
                'label' => 'Happietaria',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58cee5f04c8df',
                'label' => 'Title',
                'name' => 'happie_title',
                'type' => 'text',
                'required' => 1,
                'default_value' => 'Happietaria',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'html',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cee6294c8e0',
                'label' => 'Body',
                'name' => 'happie_body',
                'type' => 'wysiwyg',
                'required' => 1,
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'yes',
            ),
            array (
                'key' => 'field_58cee6544c8e1',
                'label' => 'Call to Action',
                'name' => 'happie_cta',
                'type' => 'text',
                'required' => 1,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cee6794c8e2',
                'label' => 'Call to Action link',
                'name' => 'happie_cta_url',
                'type' => 'page_link',
                'required' => 1,
                'post_type' => array (
                    0 => 'all',
                ),
                'allow_null' => 0,
                'multiple' => 0,
            ),
            array (
                'key' => 'field_58cef160ff11a',
                'label' => 'Afbeelding',
                'name' => 'happie_img',
                'type' => 'image',
                'required' => 1,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_58ceec48c1915',
                'label' => 'Helpen',
                'name' => '',
                'type' => 'tab',
            ),
            array (
                'key' => 'field_58ceec76c1916',
                'label' => 'Title',
                'name' => 'help_title',
                'type' => 'text',
                'required' => 1,
                'default_value' => 'Helpen',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef1a1ff11b',
                'label' => 'Afbeelding',
                'name' => 'help_img',
                'type' => 'image',
                'required' => 1,
                'save_format' => 'object',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
            array (
                'key' => 'field_58cef6f217286',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'message' => '<hr />',
            ),
            array (
                'key' => 'field_58cef413829f8',
                'label' => 'Show Section 1',
                'name' => 'help_1_show',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 1,
            ),
            array (
                'key' => 'field_58cef3f2829f7',
                'label' => 'Section 1 - Title',
                'name' => 'help_1_title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef413829f8',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef43b829f9',
                'label' => 'Section 1 - body',
                'name' => 'help_1_body',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef413829f8',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'formatting' => 'none',
            ),
            array (
                'key' => 'field_58cef488829fa',
                'label' => 'Section 1 - Call to Action',
                'name' => 'help_1_cta',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef413829f8',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef4a5829fb',
                'label' => 'Section 1 - Call to Action Link',
                'name' => 'help_1_url',
                'type' => 'page_link',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef413829f8',
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
            array (
                'key' => 'field_58cef6a5f5644',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'message' => '<hr />',
            ),
            array (
                'key' => 'field_58cef51307401',
                'label' => 'Show Section 2',
                'name' => 'help_2_show',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_58cef53307402',
                'label' => 'Section 2 - Title',
                'name' => 'help_2_title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef51307401',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef55407403',
                'label' => 'Section 2 - body',
                'name' => 'help_2_body',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef51307401',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'formatting' => 'none',
            ),
            array (
                'key' => 'field_58cef56e07404',
                'label' => 'Section 2 - Call to Action',
                'name' => 'help_2_cta',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef51307401',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef59407405',
                'label' => 'Section 2 - Call to Action Link',
                'name' => 'help_2_url',
                'type' => 'page_link',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef51307401',
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
            array (
                'key' => 'field_58cef6dc17285',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'message' => '<hr />',
            ),
            array (
                'key' => 'field_58cef5d307407',
                'label' => 'Show Section 3',
                'name' => 'help_3_show',
                'type' => 'true_false',
                'message' => '',
                'default_value' => 0,
            ),
            array (
                'key' => 'field_58cef5e607408',
                'label' => 'Section 3 - Title',
                'name' => 'help_3_title',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef5d307407',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef5fb07409',
                'label' => 'Section 3- body',
                'name' => 'help_3_body',
                'type' => 'textarea',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef5d307407',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                    'allorany' => 'all',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'formatting' => 'none',
            ),
            array (
                'key' => 'field_58cef60a0740a',
                'label' => 'Section 3 - Call to Action',
                'name' => 'help_3_cta',
                'type' => 'text',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef5d307407',
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
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58cef61c0740b',
                'label' => 'Section 3 - Call to Action Link',
                'name' => 'help_3_url',
                'type' => 'page_link',
                'required' => 1,
                'conditional_logic' => array (
                    'status' => 1,
                    'rules' => array (
                        array (
                            'field' => 'field_58cef5d307407',
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
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
                3 => 'comments',
            ),
        ),
        'menu_order' => 0,
    ));
}
