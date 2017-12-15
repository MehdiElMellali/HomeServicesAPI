<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Review;
class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->string('rating')->default(Review::UNAPPROVED);
            $table->text('comment');
            $table->string('approved')->default(Review::UNRATING);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
