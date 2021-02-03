<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Werk extends Model
{
    protected $fillable = ['title', 'blog', 'imageUrl', 'url', 'taal'];
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('werks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->mediumText('blog');
            $table->string('imageUrl');
            $table->string('url');
            $table->string('taal');
        });
    }
    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('werken');
    }
}
