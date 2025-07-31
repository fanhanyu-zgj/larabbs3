<?php
/*
 * @Author: wangzhen wdsj002@126.com
 * @Date: 2025-07-22 17:33:48
 * @LastEditors: wangzhen wdsj002@126.com
 * @LastEditTime: 2025-07-31 15:41:44
 * @FilePath: \larabbs\app\Providers\AuthServiceProvider.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::guessPolicyNamesUsing(function($modelClass){
            return 'App\Policies\\'.class_basename($modelClass).'Policy';
        });
    }
}
