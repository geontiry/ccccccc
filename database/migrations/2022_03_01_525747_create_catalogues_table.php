<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration { 
    public function up()
    {
        /* -- TABLE - CATALOGUE -- */
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->string('name');//category, division, listing
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();
        });

        /* --- TABLE - CATEGORY--- */
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained();
            $table->foreignId('catalogue_id')->constrained();
            $table->foreignId('parent_id')->nullable()->constrained('categories');
            $table->string('name')->unique();
            $table->string('slug')->unique()->nullable();
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - BRAND -- */
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - PRODUCT -- */
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->bigInteger('code')->unique()->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->string('model_type');  //app/Enums/Product/ModelType
            $table->string('model_number');
            $table->string('warranty');
            $table->string('warranty_period');
            $table->string('datasheet')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('catalogued_at');
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - IMAGE -- */
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->morphs('imageable');
            $table->string('path');
            $table->string('size')->nullable();
            $table->string('extension')->nullable();
            $table->integer('dimension')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - FEATURE -- */
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained();
            $table->string('name');
            $table->string('unit');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - VARIANT -- */
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('feature_id')->constrained();
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - SPEC -- */
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('feature_id')->constrained();//Enforces Uniqueness
            $table->foreignId('variant_id')->constrained();
            $table->unique(['product_id', 'feature_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        /* -- TABLE - PACKAGE -- */
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('value');
            $table->string('unit'); //app\Enum\Product\ProductUnit
            $table->string('pack'); //app\Enum\Product\ProductPack
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('weight');
            $table->boolean('std');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->string('item');
            $table->integer('number');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('compliments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('compliment_id')->constrained('products');
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('divisions');
        Schema::dropIfExists('listings');
        Schema::dropIfExists('catalogues');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('products');
        Schema::dropIfExists('images');
        Schema::dropIfExists('features');
        Schema::dropIfExists('variants');
        Schema::dropIfExists('specs');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('compliments');
    }
};
