<?php 
namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    public function boot()
    {
        View::composer('*', function($view){
            $val = 'bar';
            $view->with('foo', $val);
        });
    }

    public function register()
    {
        //
    }
}
