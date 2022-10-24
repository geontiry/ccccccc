<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('stacks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('valuation')->unique();//\app\Enum\Inventory\Valuation
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('tiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stack_id')->constrained();
            $table->string('name');
            $table->string('group');//\app\Enum\Inventory\Group
            $table->unique(['stack_id', 'group']);
            $table->integer('cycle_count');
            $table->integer('minimum_stock');
            $table->integer('reorder_stock');
            $table->integer('maximum_stock');
            $table->integer('minimum_order');
            $table->integer('maximum_order')->nullable();
            // $table->double('bulk_index');
            // $table->double('cost_index');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('tier_id')->constrained();
            $table->unique(['product_id', 'tier_id']);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('pr_number');
            $table->timestamp('requested_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->string('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('purchasings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->integer('quoted_price');
            $table->integer('quantity_requested');
            $table->integer('quantity_confirmed');
            $table->integer('quantity_approved');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained();
            $table->foreignId('supplier_id')->constrained();
            $table->integer('po_number');
            $table->integer('discount')->default(0);
            $table->timestamp('ordered_at');
            $table->timestamp('confirmed_at');
            $table->timestamp('approved_at');
            $table->timestamp('payment_at');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('procurement_id')->constrained();
            $table->integer('quantity');
            $table->integer('purchase_price');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('invoicings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('procurement_id')->constrained();
            $table->string('invoice_number')->nullable();
            $table->string('delivery_note_number')->nullable();
            $table->timestamp('invoice_at');
            $table->timestamp('delivery_note_at');
            $table->timestamps();
        });
        Schema::create('supplyings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoicing_id')->constrained();
            $table->foreignId('supply_id')->constrained();
            $table->integer('quantity');
            $table->string('state');//app/Enum/Inventory/SupplyStatus
            $table->timestamp('state_at');
            $table->string('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplying_id')->constrained();
            $table->foreignId('storage_id')->constrained();
            $table->string('identity')->nullable(); //app/Enum/Inventory/StockIdentifier
            $table->integer('identity_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('stockings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inventory_id')->constrained();
            $table->string('movement'); //app/Enum/Inventory/StockMovement
            $table->boolean('instock')->default(0);
            $table->string('remark')->nullable();
            $table->timestamp('movement_at')->nullable();
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('stockages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained();
            $table->timestamp('pulled_at');
            $table->timestamp('captured_at')->nullable();
            $table->timestamp('posted_at')->nullable();
            $table->timestamp('validated_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('stocklists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stockage_id')->constrained();
            $table->foreignId('storage_id')->constrained();
            $table->integer('pull_count');
            $table->integer('capture_count')->nullable();
            $table->integer('post_count')->nullable();
            $table->integer('stock_count')->nullable();
            $table->integer('variance')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stacks');
        Schema::dropIfExists('tiers');
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('storages');
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('purchasings');
        Schema::dropIfExists('procurements');
        Schema::dropIfExists('supplies');
        Schema::dropIfExists('invoicings');
        Schema::dropIfExists('supplyings');
        Schema::dropIfExists('inventories');
        Schema::dropIfExists('stockings');
        Schema::dropIfExists('stockages');
        Schema::dropIfExists('stocklists');
    }
};
