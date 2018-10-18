<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 08/10/18
 * Time: 12:05
 */
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/item/add/',['GET','POST']], // action, url, HTTP method
        ['delete', '/item/delete/{id}',['GET','POST']], // action, url, HTTP method
        ['edit', '/item/edit/{id}',['GET','POST']], // action, url, HTTP method

    ],
    'category' => [ // Controller
        ['index', '/categories', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ['add', '/cat/add',['GET','POST']], // action, url, HTTP method
        ['delete', '/cat/delete/{id}',['GET','POST']], // action, url, HTTP method
    ],
];