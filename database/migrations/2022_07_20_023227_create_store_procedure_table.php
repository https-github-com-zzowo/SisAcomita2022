<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        $procedure = "DROP PROCEDURE IF EXISTS sum_payment;

        CREATE PROCEDURE sum_payment ( IN id_socio varchar(10)
            )
            BEGIN
	            SELECT SUM(payments.import) as total from payments WHERE partner_id = id_socio;
        END;

        ";

        DB::unprepared($procedure);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $procedure = "DROP PROCEDURE IF EXISTS sum_payment";
        Schema::dropIfExists($procedure);
    }
};
