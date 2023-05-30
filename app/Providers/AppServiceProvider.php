<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\TeamInfo;
use App\Models\CompanyInfo;
use App\Models\HomeSlider;
use App\Models\HomeNews;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::share('name', 'Member Details'); 
        
        View::composer('frontEnd.about.aboutContent', function($view){
            $publishedTeamInfos = TeamInfo::where('publicationStatus', 1)->get();
            $view->with('publishedTeamInfos',$publishedTeamInfos);
        });
        
       View::composer('frontEnd.about.aboutContent', function($view){
           $publishedCompanyInfos = CompanyInfo::where('publicationStatus', 1)->get(); 
           $view->with('publishedCompanyInfos',$publishedCompanyInfos);
       });
       
       View::composer('frontEnd.home.homeContent',  function($view){
           $publishedHomeSliderInfos = HomeSlider::where('publicationStatus',1)->get(); 
           $view->with('publishedHomeSliderInfos',$publishedHomeSliderInfos);
       });
       
       View::composer('frontEnd.home.homeContent', function($view){
           $publishedHomeNews = HomeNews::where('publicationStatus', 1)->get();
           $view->with('publishedHomeNews',$publishedHomeNews);
       });
    }
}
