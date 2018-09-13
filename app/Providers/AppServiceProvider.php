<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // INI iconos para menus
        View::share('icon_menus', [
            'sistema'=>'fas fa-wrench',
            'poas'=>'fas fa-th',
            'mlogicos'=>'fab fa-delicious',
            'mproblemas'=>'far fa-newspaper',
            'institucions'=>'fas fa-building',
            'refres'=>'fas fa-redo',
            'back'=>'fas fa-chevron-left',
            'create'=>'fas fa-plus',
            'direcciones'=>'fas fa-warehouse',
            'pdeterminantes'=>'fas fa-list-ul',
            'pcausaefectos'=>'fab fa-flipboard',
            'mobjetivos'=>'fas fa-cubes',
            'presupuestaria'=>'fab fa-monero',
            'mproductos'=>'fab fa-patreon',
            'psupuestos'=>'fab fa-slack-hash',
            'pverificadors'=>'fas fa-check',
            'pindicadors'=>'fas fa-info-circle',
            'mactividads'=>'fas fa-th-list',
            'afrecuencias'=>'fas fa-circle-notch',
            'aestados'=>'fas fa-tag',
            'responsables'=>'far fa-address-card',
            'editar'=>'fas fa-edit',
            'nuevo'=>'fas fa-plus',
            'mostrar'=>'fas fa-info',
            'btn_ctr'=>'fas fa-bullseye',
            'crud'=>'fas fa-align-justify',
            'tline'=>'fas fa-history',
            'matrices'=>'fas fa-table',
            'info'=>'fas fa-info',

            'user'=>'fas fa-user',
            'userplus'=>'fas fa-user-plus',
            'profile'=>'fas fa-id-card',
            'rol'=>'far fa-id-badge',

            'alert'=>'fas fa-bell',
            'task'=>'fas fa-tasks',
            'messege'=>'fas fa-comments',
            'loginout'=>'fas fa-external-link-alt',
            'logdb'=>'fas fa-database',
            'setting'=>'fas fa-sliders-h',
            'selectopt'=>'fas fa-list-alt',
            'tma'=>'fas fa-boxes',

            'chartpie'=>'fas fa-chart-pie',
            'chartbar'=>'fas fa-chart-bar',
            'chartarea'=>'fas fa-chart-area',
            'chartline'=>'fas fa-chart-line',


        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
