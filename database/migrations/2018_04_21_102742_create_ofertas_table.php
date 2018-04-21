<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inde');
            $table->integer('user_id');
            $table->string('nazwa')->nullable($value = true);
            $table->string('typ')->nullable($value = true);
            $table->string('adres')->nullable($value = true);
            $table->string('wojew')->nullable($value = true);
            $table->string('region')->nullable($value = true);
            $table->string('telefon')->nullable($value = true);
            $table->string('telefon2')->nullable($value = true);
            $table->string('email')->nullable($value = true);
            $table->string('jadlonamiejscu')->nullable($value = true);
            $table->string('obowiazkowejadlo')->nullable($value = true);
            $table->string('sniadanie')->nullable($value = true);
            $table->string('obiad')->nullable($value = true);
            $table->string('kolacja')->nullable($value = true);
            $table->string('obiadokolacja')->nullable($value = true);
            $table->string('iloscmiejsc')->nullable($value = true);
            $table->string('iloscpokoi')->nullable($value = true);
            $table->string('ilosclazienek')->nullable($value = true);
            $table->string('okolica')->nullable($value = true);
            $table->string('opis')->nullable($value = true);
            $table->string('piktogram')->nullable($value = true);
            $table->string('cenamin')->nullable($value = true);
            $table->string('cenamax')->nullable($value = true);
            $table->string('dostod')->nullable($value = true);
            $table->string('dostdo')->nullable($value = true);
            $table->string('opiscen')->nullable($value = true);
            $table->string('dodatkowe')->nullable($value = true);
            $table->string('wiecej')->nullable($value = true);
            $table->string('poz_x')->nullable($value = true);
            $table->string('poz_y')->nullable($value = true);
            $table->string('aktualizacja')->nullable($value = true);
            $table->string('link')->nullable($value = true);
      
            
            
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
        Schema::dropIfExists('ofertas');
    }
}
