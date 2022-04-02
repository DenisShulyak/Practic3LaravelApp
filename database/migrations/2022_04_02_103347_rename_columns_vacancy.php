<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsVacancy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancy', function (Blueprint $table) {
            $table->renameColumn('Staff', 'staff_id');
            $table->renameColumn('Firm', 'firm_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacancy', function (Blueprint $table) {
            $table->renameColumn('staff_id', 'Staff');
            $table->renameColumn('firm_id', 'Firm');
        });
    }
}
