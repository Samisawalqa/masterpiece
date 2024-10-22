<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldImagesTable extends Migration
{
    public function up()
    {
        Schema::create('field_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_name');
            $table->foreignId('field_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('field_images');
    }
}
