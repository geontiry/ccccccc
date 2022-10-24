<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //app\Enums\Career\CareerRole
            $table->boolean('create')->default(0);
            $table->boolean('read')->default(0);
            $table->boolean('update')->default(0);
            $table->boolean('delete')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('careers', function (Blueprint $table) { //position
            $table->id();
            $table->foreignId('directorate_id')->constrained();
            $table->foreignId('reporting_id')->constrained('careers');
            $table->foreignId('role_id')->constrained();
            $table->string('position');
            $table->string('skill'); //app\Enums\Career\CareerSkill
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('duties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained();
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('model'); //762
            $table->integer('weekhours'); //40
            $table->integer('leavedays'); //2, 3
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('workplans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resource_id')->constrained();
            $table->string('shift'); //app\Enums\Career\CareerShift
            $table->string('period'); //6.30-1.30 PM, 8.30-3.30 PM, 11.30-6.30 PM
            $table->string('break'); //9.30-10 AM, 11.30-12 PM, 2.30-3 PM
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained();
            $table->foreignId('resource_id')->constrained();
            $table->string('time'); //app\Enums\Career\CareerTime
            $table->string('base'); //app\Enums\Career\CareerBase
            $table->string('contract'); //app\Enums\Career\CareerContract
            $table->string('period'); //app\Enums\Career\CareerPeriod
            $table->string('hours'); //app\Enums\Career\CareerHours
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('remunerations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->integer('category');  //app\Enums\Career\Remuneration
            $table->decimal('amount');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->string('name'); //app\Enums\Career\Remuneration
            $table->string('details');
            $table->timestamps();
        });
        Schema::create('rights', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')->constrained();
            $table->morphs('rightable');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->unsignedSmallInteger('location_id')->nullable()->constrained();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('education');//app\Enums\Employee\EducationLevel
            $table->string('speciality')->nullable();
            $table->string('experience')->nullable();
            $table->string('description');
            $table->timestamp('posted_at');
            $table->timestamp('closed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('vacancy_id')->constrained();
            $table->text('summary');
            $table->string('resume');
            $table->timestamp('applied_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained();
            $table->integer('quote_salary');
            $table->integer('result');
            $table->string('status');
            $table->timestamp('interview_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('careers');
        Schema::dropIfExists('duties');
        Schema::dropIfExists('skills');
        Schema::dropIfExists('resources');
        Schema::dropIfExists('workplans');
        Schema::dropIfExists('positions');
        Schema::dropIfExists('remunerations');
        Schema::dropIfExists('allowances');
        Schema::dropIfExists('benefits');
        Schema::dropIfExists('rights');
        Schema::dropIfExists('vacancies');
        Schema::dropIfExists('applications');
        Schema::dropIfExists('interviews');
        Schema::dropIfExists('recruitments');
    }
};
