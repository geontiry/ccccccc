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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('route');
            $table->boolean('enabled')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dashboard_id')->constrained();
            $table->string('name');
            $table->string('title');
            $table->string('route');
            $table->boolean('enabled')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('module_id')->constrained();
            $table->string('name');
            $table->string('title');
            $table->string('route');
            $table->boolean('enabled')->default(false);
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
        Schema::dropIfExists('dashboards');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('menus');
    }
};
