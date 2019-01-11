
<?php




Route::group([
    'prefix' => 'admin'
], function() {
  Route::view('/dashboard','backend.partials.dashboard');
    // ...
});





















 ?>
