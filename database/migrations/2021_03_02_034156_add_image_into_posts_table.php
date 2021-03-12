<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageIntoPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->string('image', 255)->after('slug') ->nullable();
            
        //     });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->dropColumn('image');
            
        //     });
        
        Schema::table('barang', function (Blueprint $table) {
            $table->dropColumn('image');
            
            });
    }
}
