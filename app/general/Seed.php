<?php 

namespace App\General;

use App\General\DbClass;
use Illuminate\Database\Schema\Blueprint;
use App\General\Schema;

class Seed extends DbClass {

	public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

	}

	public function down() {

        Schema::dropIfExists('users');

	}

}