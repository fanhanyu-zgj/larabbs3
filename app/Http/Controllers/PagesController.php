<?php
/*
 * @Author: wangzhen wdsj002@126.com
 * @Date: 2025-07-22 19:11:52
 * @LastEditors: wangzhen wdsj002@126.com
 * @LastEditTime: 2025-07-22 19:12:17
 * @FilePath: \larabbs\app\Http\Controllers\PagesController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root(){
        return view('pages.root');
    }
}
