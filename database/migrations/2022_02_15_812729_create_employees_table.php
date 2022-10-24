<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            /*Personal Details*/
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->enum('gender', ['M', 'F']);
            $table->string('dob');
            /*National Details*/
            $table->string('nationality');
            $table->string('national_id');
            $table->string('kra_pin');
            $table->string('nssf_number')->nullable();
            $table->string('nhif_number')->nullable();
            /*Background Details*/
            $table->string('marital_status');//app\Enums\Employee\MaritalStatus
            $table->string('religion');//app\Enums\Employee\Religion
            $table->string('tribe')->nullable();
            $table->string('languages');
            /*Contact Details*/
            $table->string('address');
            $table->string('code');
            $table->string('town');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('email');
            $table->string('website')->nullable();
            /*Social Details*/
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->unsignedTinyInteger('subcounty_id')->constrained();
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('emp_bankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('bank_name');
            $table->string('bank_account_no');
            $table->string('bank_account_type');
            $table->string('bank_card_name');
            $table->string('bank_card_no');
            $table->string('bank_card_expiry');
            $table->string('bank_card_ccv');
            $table->boolean('status')->default();
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('emp_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('date_from');
            $table->string('date_to');
            $table->string('level');//app\Enums\EducationLevel
            $table->string('institution');
            $table->string('address');
            $table->string('speciality');
            $table->string('award');//app\Enums\EducationAward
            $table->string('result');
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('emp_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('date_from');
            $table->string('date_to');
            $table->string('position');
            $table->string('employer');
            $table->string('address');
            $table->string('achievements');
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('emp_kinships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('full_name');
            $table->string('occupation');
            $table->string('institution');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('emp_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained();
            $table->string('document');//app\Enums\Employee\DocumentAttach
            $table->string('path');
            $table->timestamp('confirmed_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id')->constrained();
            $table->foreignId('employee_id')->nullable()->constrained();
            $table->foreignId('interview_id')->nullable()->constrained();
            $table->integer('type'); //app\Enums\Employee\RecruitmentType
            $table->integer('term')->nullable();
            $table->integer('daysvalid');
            $table->string('offerletter');
            $table->timestamp('offered_at');
            $table->timestamp('accepted_at')->nullable();
            $table->timestamp('rejected_at')->nullable();
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('recruitment_id')->constrained();
            $table->integer('staff_no');//DDDYY..S10019
            $table->timestamp('employed_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('authorized_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('agreements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_id')->constrained();
            $table->enum('type', ['Original', 'Amendment']);
            $table->string('contract');
            $table->timestamp('agreement_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('authorized_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('portals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_id')->unique()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('status')->default('Pending'); //app\Enums\Employee\PortalStatus
            $table->timestamp('generated_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamp('authorized_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_id')->constrained();
            $table->unsignedSmallInteger('location_id')->nullable()->constrained();
            $table->unsignedSmallInteger('workplan_id')->constrained();
            $table->timestamp('posted_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('authorized_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('terminations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_id')->unique()->constrained();
            $table->string('reason'); //app\Enums\Employee\TerminationReason
            $table->boolean('voluntary')->default(0);
            $table->timestamp('request_at');
            $table->timestamp('accept_at');
            $table->timestamp('reject_at');
            $table->timestamp('cleared_at');
            $table->timestamp('terminated_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('authorized_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
        Schema::dropIfExists('emp_bankings');
        Schema::dropIfExists('emp_education');
        Schema::dropIfExists('emp_experiences');
        Schema::dropIfExists('emp_kinships');
        Schema::dropIfExists('emp_documents');
        Schema::dropIfExists('employments');
        Schema::dropIfExists('agreements');
        Schema::dropIfExists('portals');
        Schema::dropIfExists('postings');
        Schema::dropIfExists('terminations');
    }
};
