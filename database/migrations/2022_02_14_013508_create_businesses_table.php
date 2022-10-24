<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        /* --- TABLE - BUSINESS --- */
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->tinyInteger('code')->unsigned();
            $table->string('name')->unique();
            $table->string('domain')->unique();
            $table->string('brand');
            $table->text('description');
            $table->string('logo');
            $table->string('slogan');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - SITE --- */
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained('businesses');
            $table->tinyInteger('code')->unsigned();
            $table->string('name', 50)->unique();
            $table->string('domain')->unique();
            $table->text('description');
            // $table->string('status', 20)->default('Development');//Development, Production, Maintenance,
            $table->boolean('enabled');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - PAGE --- */
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained('sites');
            $table->string('url');
            $table->string('title');
            $table->string('descriprion');
            $table->string('keywords');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('operations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained('sites');
            $table->enum('mode', ['Office', 'Online']);
            $table->string('day');
            $table->timestamp('open_at')->nullable();
            $table->timestamp('close_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained('sites');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('businesses');
        Schema::dropIfExists('sites');
        Schema::dropIfExists('pages');
        Schema::dropIfExists('operations');
        Schema::dropIfExists('contacts');
    }
};
