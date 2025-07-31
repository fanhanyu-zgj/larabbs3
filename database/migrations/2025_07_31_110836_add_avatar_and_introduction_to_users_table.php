<?php
/*
 * @Author: wangzhen wdsj002@126.com
 * @Date: 2025-07-31 11:08:36
 * @LastEditors: wangzhen wdsj002@126.com
 * @LastEditTime: 2025-07-31 11:09:36
 * @FilePath: \larabbs\database\migrations\2025_07_31_110836_add_avatar_and_introduction_to_users_table.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable();
            $table->string('introduction')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatcolumn: ar');
            $table->dropColumn('introduction');
        });
    }
};
