<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('insert into courses values (null, \'Chinese\',\'2024-06-01\',\'2024-09-30\',datetime(), datetime());');
        DB::statement('insert into courses values (null, \'English\',\'2024-06-01\',\'2024-09-30\',datetime(), datetime());');
        DB::statement('insert into courses values (null, \'French\',\'2024-06-01\',\'2024-09-30\',datetime(), datetime());');
        DB::statement('insert into courses values (null, \'Japanese\',\'2024-06-01\',\'2024-09-30\',datetime(), datetime());');
        DB::statement('insert into courses values (null, \'Spainsh\',\'2024-06-01\',\'2024-09-30\',datetime(), datetime());');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('delete from courses;');
    }
};
