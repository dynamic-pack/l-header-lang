<?php
namespace DynamicPack\LHeaderLang;

use DynamicPack\LHeaderLang\Middleware\LHeaderLangMiddleware;
use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {

    }

    /**
     * @return void
     */
    public function register()
    {
        $this->app['router']->aliasMiddleware('header-lang', LHeaderLangMiddleware::class);
    }
}
