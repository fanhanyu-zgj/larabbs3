<?php
/*
 * @Author: wangzhen wdsj002@126.com
 * @Date: 2025-07-31 15:36:37
 * @LastEditors: wangzhen wdsj002@126.com
 * @LastEditTime: 2025-07-31 15:37:51
 * @FilePath: \larabbs\app\Policies\UserPolicy.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user){
        return $currentUser->id===$user->id;
    }
}
