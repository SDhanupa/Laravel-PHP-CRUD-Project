<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryNameToProductsTable extends Migration
{
    public function up()
    {
        // Update the products migration file

Schema::table('products', function (Blueprint $table) {
    $table->string('category_name')->nullable()->change();
});

    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('category_name');
        });
    }
}
