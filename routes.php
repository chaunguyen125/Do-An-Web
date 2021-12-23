<?php
// include_once './classes/Route.php';
// include_once './controllers/my-playlist.php';
// include_once '../do-an/controllers/episode-list.php';
Route::set('index.php', function() {
    Index::CreateView('home');
});
Route::set('home', function() {
    Index::CreateView('home');
});
Route::set('episode-list', function() {
    EpisodeList::CreateView('episode-list');
});
Route::set('error', function() {
    Error::CreateView('error');
});
Route::set('login', function() {
    Login::CreateView('login');
});
Route::set('my-playlist', function() {
    MyPlaylist::CreateView('my-playlist');
});
Route::set('register', function() {
    Register::CreateView('register');
});
?>