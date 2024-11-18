<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); 
            $table->enum('service_type', ['general', 'post-renovation', 'office'])->comment('Тип услуги: general - генеральная, post-renovation - после ремонта, office - офис'); 
            $table->dateTime('date_time');
            $table->string('address'); 
            $table->enum('status', ['new', 'confirmed', 'rejected'])->default('new')->comment('Статус заявки: new - новая, confirmed - подтверждена, rejected - отклонена');
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
        Schema::dropIfExists('applications');
    }
};
