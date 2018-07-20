<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Peizhi;
use App\Models\Fris;
use App\Models\Guangs;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // View::composer(['qian.index','App\Http\ViewComposers\ViewComposers']);
        $peizhi = Peizhi::where('yong','=','1')->first();
        // dd($peizhi);
        view()->share('gg_hand',$peizhi);

        // $fris = Fris::all();
        $fris = Fris::where('jin','=','0')->get();
        view()->share('gg_fris',$fris);

        // $guangs = Guangs::all();
        $guangs = Guangs::where('jin','=','0')->get();
        view()->share('gg_guangs',$guangs);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
