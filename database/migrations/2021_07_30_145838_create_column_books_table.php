<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table-> String('title',100);
            $table-> String('autor',50);
            $table-> set('genre', ['Action', 'Romance', 'Politics', 'Science Fiction', 'Literary fiction', 'Mistery', 'Thriller',
                                 'Horror', 'Historical', 'Fantasy', 'Dystopian', 'Magical Realism', 'Realist Literature', 'Other'] );
            $table-> string('publication_year',4);
            $table-> set('status',['Borrowed','Available'] );
            $table-> binary('book_cover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('autor');
            $table->dropColumn('genre');
            $table->dropColumn('publication_year');
            $table->dropColumn('status');
        });
    }
}
