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
        View::share(
            'icon_menus', [
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
                'chartline'=>'fas fa-chart-line'
            // FIN iconos para menus
            ],
            //INI Colors
            'chart_colors',[
                'rgba(245,105,84,1)',
                'rgba(0,166,90,1)',
                'rgba(0,50,100,1)',
                'rgba(0,192,239,1)',

                'rgba( 51, 255, 255 ,1 )',
                'rgba( 140, 216, 126 ,1 )',
                'rgba( 175, 126, 216 ,1 )',
                'rgba( 216, 126, 161 ,1 )',

                'rgba( 126, 216, 192 ,1 )',
                'rgba( 142, 216, 126 ,1 )',
                'rgba( 216, 159, 126 ,1 )',
                'rgba( 153, 194, 118 ,1 )',

                'rgba( 118, 177, 194 ,1)',
                'rgba( 143, 118, 194 ,1)',
                'rgba( 194, 118, 150 ,1)',
                'rgba( 32, 115, 37 ,1)'
            //FIN Colors
            ]
        );
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
