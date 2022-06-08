<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_tab_recap' => [[], ['_controller' => 'App\\Controller\\ClientController::index'], [], [['text', '/colab/recap']], [], [], []],
    'app_add_fd' => [[], ['_controller' => 'App\\Controller\\ClientController::add_fd'], [], [['text', '/colab/add_fd']], [], [], []],
    'app_view_allfiles_byuser' => [[], ['_controller' => 'App\\Controller\\ClientController::view_files_all'], [], [['text', '/colab/files']], [], [], []],
    'app_view_fd' => [[], ['_controller' => 'App\\Controller\\FdController::View_client'], [], [['text', '/admin/view_fd']], [], [], []],
    'app_del_fd' => [['id'], ['_controller' => 'App\\Controller\\FdController::Dell_fd'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/del_fd']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/admin/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_newclient' => [[], ['_controller' => 'App\\Controller\\SecurityController::add_client'], [], [['text', '/colab/addclient']], [], [], []],
    'app_view_client' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_client'], [], [['text', '/colab/client']], [], [], []],
    'app_view_clientall' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_clientall'], [], [['text', '/admin/client']], [], [], []],
    'app_view_users' => [[], ['_controller' => 'App\\Controller\\SecurityController::View_userall'], [], [['text', '/admin/users']], [], [], []],
    'app_view_file_filtre' => [[], ['_controller' => 'App\\Controller\\SecurityController::view_files_filtre'], [], [['text', '/admin/searche']], [], [], []],
    'app_view_allfiles' => [[], ['_controller' => 'App\\Controller\\SecurityController::view_files_all'], [], [['text', '/admin/files']], [], [], []],
    'app_view_files' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::view_files'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/files']], [], [], []],
    'app_add_file' => [[], ['_controller' => 'App\\Controller\\SecurityController::add_file'], [], [['text', '/add_file']], [], [], []],
    'app_view_pdf' => [['name'], ['_controller' => 'App\\Controller\\SecurityController::view_pdf'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/viewpdf']], [], [], []],
    'app_delete_file' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::suppfile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete_file']], [], [], []],
    'app_edit_client' => [['id'], ['_controller' => 'App\\Controller\\SecurityController::edit_client'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editclient']], [], [], []],
    'app_tuestconnecter' => [[], ['_controller' => 'App\\Controller\\TuestconnecterController::index'], [], [['text', '/tuestconnecter']], [], [], []],
];
