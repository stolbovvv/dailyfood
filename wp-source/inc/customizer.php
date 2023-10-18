<?php
function dailyfood_customize_register( $dailyfood_customize ){
	/**
	* Site properties.
	*/
		// City question popup.
	
	$dailyfood_customize->add_setting(
		'city_question_popup_title',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		'city_question_popup_title_control',
		array(
			'type' => 'text',
			'label' => 'Заголовок для окна геолокации',
			'section' => 'title_tagline',
			'settings' => 'city_question_popup_title'
		)
	);
	
		// Callback btn.
	
	$dailyfood_customize->add_setting(
		'callback_btn_text',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		'callback_btn_text_control',
		array(
			'type' => 'text',
			'label' => 'Текст кнопки заказа звонка',
			'section' => 'title_tagline',
			'settings' => 'callback_btn_text'
		)
	);
	
		// Phone.
	
	$dailyfood_customize->add_setting(
		'site_phone',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		'site_phone_control',
		array(
			'type' => 'text',
			'label' => 'Номер телефона',
			'section' => 'title_tagline',
			'settings' => 'site_phone'
		)
	);
	
		// E-mail.
	
	$dailyfood_customize->add_setting(
		'site_email',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		'site_email_control',
		array(
			'type' => 'text',
			'label' => 'E-mail',
			'section' => 'title_tagline',
			'settings' => 'site_email'
		)
	);
	
		// Copyright.
	
	$dailyfood_customize->add_setting(
		'site_copyright',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		'site_copyright_control',
		array(
			'type' => 'text',
			'label' => 'Копирайт',
			'section' => 'title_tagline',
			'settings' => 'site_copyright'
		)
	);
	
	/**
	* Social section.
	*/
		
	$dailyfood_customize->add_section(
		'site_contact_section',
		array(
			'title' => 'Соц. сети',
			'capability' => 'edit_theme_options',
			'description' => ''
		)
	);
	
	// Instagram link.
	
	$dailyfood_customize->add_setting(
		'instagram_link',
		array(
			'default' => '',
			'type' => 'option'
		)
	);

	$dailyfood_customize->add_control(
		'instagram_link_control',
		array(
			'type' => 'text',
			'label' => 'Instagram',
			'section' => 'site_contact_section',
			'settings' => 'instagram_link'
		)
	);
	
	// VK link.
	
	$dailyfood_customize->add_setting(
		'vk_link',
		array(
			'default' => '',
			'type' => 'option'
		)
	);

	$dailyfood_customize->add_control(
		'vk_link_control',
		array(
			'type' => 'text',
			'label' => 'VK',
			'section' => 'site_contact_section',
			'settings' => 'vk_link'
		)
	);
	
	$dailyfood_customize->add_setting(
		'instagram_img',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		new WP_Customize_Image_Control(
			$dailyfood_customize,
			'instagram_img_control',
			array(
				'label' => 'Изображение иконки Instagram',
				'section' => 'site_contact_section',
				'settings' => 'instagram_img'
			)
		)
	);
	
	$dailyfood_customize->add_setting(
		'vk_img',
		array(
			'default' => '',
			'type' => 'option'
		)
	);
	
	$dailyfood_customize->add_control(
		new WP_Customize_Image_Control(
			$dailyfood_customize,
			'vk_img_control',
			array(
				'label' => 'Изображение иконки VK',
				'section' => 'site_contact_section',
				'settings' => 'vk_img'
			)
		)
	);
}

add_action( 'customize_register', 'dailyfood_customize_register' );

add_action( 'after_setup_theme', 'parislife_setup_logo' );

function parislife_setup_logo() {
    add_theme_support( 'custom-logo', array(
        'width' => 77,
        'height' => 63,
        'flex-width' => true,
        'flex-height' => true,
        'header-text' => array('site-title', 'site-description')
    ));
}
?>