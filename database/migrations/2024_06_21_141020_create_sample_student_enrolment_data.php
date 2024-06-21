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
        DB::statement('insert into student_enrolment values (null, 1, 1, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 1, 2, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 1, 3, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 1, 4, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 1, 5, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 2, 1, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 3, 1, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 4, 1, datetime(), datetime());');
        DB::statement('insert into student_enrolment values (null, 5, 1, datetime(), datetime());');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('delete from student_enrolment ;');
    }
};
