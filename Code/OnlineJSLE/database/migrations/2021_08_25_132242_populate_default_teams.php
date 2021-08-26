<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class PopulateDefaultTeams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('teams')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => "Admin Users Team",
                'personal_team' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'name' => "Study Users Team",
                'personal_team' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'name' => "Audit Users Team",
                'personal_team' => false,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
