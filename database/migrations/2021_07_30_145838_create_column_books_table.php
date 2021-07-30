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
            $table-> String('BookTitle',100);
            $table-> String('Autor',50);
            $table-> set('Genre', ['Action', 'Romance', 'Science Fiction', 'Literary fiction', 'Mistery', 'Thriller',
                                 'Horror', 'Historical', 'Fantasy', 'Dystopian', 'Magical Realism', 'Realist Literature'] );
            $table-> date('PublicationYear',4);
            $table-> set('Status',['Borrowed','Available'] );
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
