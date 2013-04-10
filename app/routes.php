<?php

Route::get('/', 'DocsController@ShowDocs');
Route::get('/{chapter?}', 'DocsController@ShowDocs');
Route::get('/docs/', 'DocsController@ShowDocs');
Route::get('/docs/{chapter?}', 'DocsController@ShowDocs');