<?php
/*
 * @Author: wangzhen wdsj002@126.com
 * @Date: 2025-07-22 17:33:48
 * @LastEditors: wangzhen wdsj002@126.com
 * @LastEditTime: 2025-07-22 19:14:12
 * @FilePath: \larabbs\routes\web.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@root')->name('root');
