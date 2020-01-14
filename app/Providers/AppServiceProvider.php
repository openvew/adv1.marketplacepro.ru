<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->bind('ProductWidget', function () {
			return new \App\Helpers\ProductWidget; 
        });
		$this->app->bind('LeftPanelWidget', function () {
			return new \App\Helpers\LeftPanelWidget; 
        });

        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (class_exists('\Blade')){ 
            \Blade::directive('ProductWidget', function($params) {   
			    return "<?php echo \\ProductWidget::getAll($params); ?>"; 
            });
			\Blade::directive('LeftPanelWidget', function($params) {   
			    return "<?php echo \\LeftPanelWidget::getAll($params); ?>"; 
            });
			
		}

    }
}
