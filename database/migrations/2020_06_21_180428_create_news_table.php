<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;

class CreateNewsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        function userID () {
            if(Auth::user() == null) {
                return 0;
            } else {
                return Auth::user()-> id;
            }
        }

        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->integer('authorID')->default(userID());
            $table->string('title');
            $table->longText('content');
            $table->string('backgroudImage');
            $table->longText('styling');
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
        Schema::dropIfExists('news');
    }


}
