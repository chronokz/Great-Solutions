<?php

function wp_test_customize_register( $wp_customize ) {
    // $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    // $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    // $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    
    
    // Добавляем секцию настроек в общий список секций
 $wp_customize->add_section('wp_test_customize_section', array(
      'title'    => 'Заголовок секции',
      'description' => 'Тут мои личные настройки темы',
      'priority' => 1000, // в конец списка наверняка
  ));
  
  // Добавляем настройку и её дефолтное значение
  $wp_customize->add_setting('wp_test_theme_options[text_test]', array(
      'default'        => 'Значение поля по умолчанию',
      'capability'     => 'edit_theme_options',
      'type'           => 'option',
  ));
  
  // Добавляем текстовое поле
  $wp_customize->add_control('themename_text_test', array(
    'label'      => 'Текстовое поле',
    'section'    => 'wp_test_customize_section',
    'settings'   => 'wp_test_theme_options[text_test]',
  ));
}
add_action( 'customize_register', 'wp_test_customize_register' );
