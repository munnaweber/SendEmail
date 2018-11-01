<?php 

namespace Email\Send;

use Illuminate\Support\ServiceProvider;

class SendMailServiceProvider extends ServiceProvider{

	public function boot(){
		$this->loadRoutesFrom(__DIR__."/routes/web.php");
		$this->loadViewsFrom(__DIR__."/views", "send");
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		
		$this->publishes([
	        __DIR__.'/assets' => public_path('public'),
	    ], 'send');
	    $this->publishes([
        __DIR__.'/database/migrations/' => database_path('migrations')
    ], 'send');
	}

	public function register(){

	}

}
