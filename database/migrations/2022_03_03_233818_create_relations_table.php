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
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->morphs('subscribeable'); //Subscriber, User, Visitor
            $table->foreignId('site_id')->constrained();
            $table->timestamp('subscribed_at');
            $table->timestamp('unsubscribed_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->morphs('reviewable'); //Product, Order
            $table->integer('rating');
            $table->integer('recommend');
            $table->integer('summary');
            $table->integer('description');
            $table->boolean('verified_at');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->morphs('interestable'); //Visitor, User
            $table->string('subject'); //Shopping, Testimonial, Suggestion, Inquiry, Partnership, Complaint, Other
            $table->string('department'); //General, Sales, Care, Technical, Management
            $table->text('message');
            $table->boolean('resolved_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('messages', function (Blueprint $table) {//file
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('messageable'); //Product, Order, Account,  **Service,
            $table->string('title')->nullable();
            $table->text('message')->nullable();
            $table->boolean('read_at')->nullable();
            $table->boolean('closed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('replies', function (Blueprint $table) {//file
            $table->id();
            $table->morphs('replyable'); //Interest, Message
            $table->text('reply');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //Customer Group, Staff Group, Support Group, Sales Group, Finance Group
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->morphs('chatable'); //Visitor, User
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->morphs('chatable'); //Visitor, User
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('chats', function (Blueprint $table) {//file
            $table->id();
            // $table->foreignId('chat_id')->constrained();
            // $table->foreignId('member_id')->constrained();//is_typing
            // $table->foreignId('tagging_id')->nullable()->constrained('conversations');
            $table->text('message');
            $table->timestamp('sent_at')->useCurrent();
            $table->timestamp('delivered_at');
            $table->timestamp('read_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('subscriptions');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('replies');
        Schema::dropIfExists('interests');
    }
};
