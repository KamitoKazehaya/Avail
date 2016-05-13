<?php
return array(
  // 'url' => 'контроллер/действие/параметр1/параметр2/параметр3'
  '/' => 'Main@index', // главная страница
  '/contacts' => 'MainController@contacts', // страница контактов
  '/news' => 'blog/index', // список постов блога
  '/news/:num' => 'blog/viewPost/$1', // просмотр отдельного поста, например, /blog/123
  '/news/:any/:num' => 'blog/$1/$2', // действия над постом, например, /blog/edit/123 или /blog/dеlete/123
  '/id/:any' => 'user/id/$1'
);