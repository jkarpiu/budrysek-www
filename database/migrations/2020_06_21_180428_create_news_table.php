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
            $table->integer('authorID') -> nullable();
            $table->string('authorName') -> nullable();
            $table->string('title');
            $table->string('subtitle') -> nullable();
            $table->longText('content');
            $table->string('backgroundImage');
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
