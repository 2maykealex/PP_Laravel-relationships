<?php

/* 
on-to-one
*/

$this->get('one-to-one', 'OnToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OnToOneController@oneToOneInverse');
$this->get('one-to-one-insert',  'OnToOneController@oneToOneInsert');

/* 
on-to-many
*/
$this->get('one-to-many', 'OneToManyController@oneToMany');
$this->get('many-to-one', 'OneToManyController@manyToOne');
$this->get('one-to-many-two', 'OneToManyController@oneToManyTwo');
$this->get('one-to-many-insert', 'OneToManyController@oneToManyinsert');
$this->get('one-to-many-insert-two', 'OneToManyController@oneToManyinsertTwo');

/* 
has many through
*/
$this->get('has-many-through', 'OneToManyController@hasManyThrough');


/* 
Many To Many
*/
$this->get('many-to-many', 'ManyToManyController@manyToMany');
$this->get('many-to-many-inverse', 'ManyToManyController@manyToManyInverse');
$this->get('many-to-many-insert', 'ManyToManyController@manyToManyInsert');

/* 
Relacionamentos polimórficos
*/
$this->get('polymorphics', 'PolymorphicController@polymorphic');
$this->get('polymorphics-insert', 'PolymorphicController@polymorphicInsert'); 


Route::get('/', function () {
    return view('welcome');
});
