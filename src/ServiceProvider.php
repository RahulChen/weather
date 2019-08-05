<?php

/**
 * @Description: [Description]
 * @Author: Rahul
 * @Date:   2019-08-05 11:15:58
 * @Last Modified by:   Rahul
 * @Last Modified time: 2019-08-05 11:16:25
 * @email: 469813291@qq.com
 */
namespace RahulChen\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}