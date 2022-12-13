<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Obtetra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('obtetra', function (Blueprint $table) {
          
          
          $table->engine="InnoDB";
          $table->bigIncrements('id');

          $table->bigInteger('idObtetra')->unsigned();



          $table-> text('q139_nacionalidad')->nullable();
          $table-> date('trip-start1')->nullable();
          $table-> text('q138_autoidentificacion138')->nullable();
          $table-> text('q42_sabeLeer')->nullable();
          $table-> text('q43_alfabetizacionE')->nullable();
          $table-> text('q45_viveSola')->nullable();
          $table-> text('q47_establecimientoDel')->nullable();
          $table-> text('q48_establecimientoDel48')->nullable();
          $table-> text('q14_name14')->nullable();
          $table-> text('q16_name16')->nullable();
          $table-> text('q17_name17')->nullable();
          $table-> text('q50_ultimoEmbarazo')->nullable();
          $table-> text('q51_embarazosMultiples')->nullable();
          $table-> text('q52_gestasPrevias')->nullable();
          $table-> text('q53_embMolar')->nullable();
          $table-> text('q54_embEctopico')->nullable();
          $table-> text('q55_abortos')->nullable();
          $table-> text('q56_partos')->nullable();
          $table-> text('q57_vaginales')->nullable();
          $table-> text('q58_cesareas')->nullable();
          $table-> text('q59_nacidosVivos')->nullable();
          $table-> text('q60_nacidosMuertos')->nullable();
          $table-> text('q61_viven')->nullable();
          $table-> text('q62_muertos1ra')->nullable();
          $table-> text('q63_despues1ra')->nullable();
          $table-> date('trip-start2')->nullable();
          $table-> text('q68_escribaUna')->nullable();
          $table-> text('q69_embarazoPlanificado')->nullable();
          $table-> text('q70_name70')->nullable();
          $table-> text('q74_pesoInicial')->nullable();
          $table-> text('q75_tallacm')->nullable();
          $table-> date('trip-start22')->nullable();
          $table-> date('trip-start3')->nullable();
          $table-> text('q78_name78')->nullable();
          $table-> text('q79_name79')->nullable();
          $table-> text('q80_fumaAct')->nullable();
          $table-> text('q80_fumaAct2')->nullable();
          $table-> text('q80_fumaAct3')->nullable();
          $table-> text('q81_fumaPas1')->nullable();
          $table-> text('q81_fumaPas2')->nullable();
          $table-> text('q81_fumaPas3')->nullable();
          $table-> text('q82_drogas1')->nullable();
          $table-> text('q82_drogas2')->nullable();
          $table-> text('q82_drogas3')->nullable();
          $table-> text('q83_alcohol1')->nullable();
          $table-> text('q83_alcohol2')->nullable();
          $table-> text('q83_alcohol3')->nullable();
          $table-> text('q84_violencia1')->nullable();
          $table-> text('q84_violencia2')->nullable();
          $table-> text('q84_violencia3')->nullable();
           $table-> text('q85_name85')->nullable();
           $table-> text('q86_antitetanicaVigente')->nullable();
           $table-> text('q88_1ra')->nullable();
           $table-> text('q89_2da')->nullable();
           $table-> text('q90_exNormal')->nullable();
           $table-> text('q90_exNormal2')->nullable();
           $table-> text('q91_cervix1')->nullable();
           $table-> text('q91_cervix2')->nullable();
           $table-> text('q91_cervix3')->nullable();
           $table-> text('q92_grupo')->nullable();
           $table-> text('q93_rh')->nullable();
           $table-> text('q94_inmuniz')->nullable();
           $table-> text('q95_name951')->nullable();
           $table-> text('q97_name972')->nullable();
           $table-> text('q98_tarvEn')->nullable();
           $table-> text('q99_gt2099')->nullable();
           $table-> text('q100_pruebaResutl')->nullable();
           $table-> text('q101_tarvEn101')->nullable();
           $table-> text('q103_escribaUna103')->nullable();
           $table-> text('q104_fefolatosIndicados')->nullable();
           $table-> text('q104_fefolatosIndicados2')->nullable();
           $table-> text('q105_hbgt20semGdl')->nullable();

           $table-> text('q106_escribaUna106')->nullable();
           $table-> text('q107_name107')->nullable();
           $table-> text('q108_name108')->nullable();
           $table-> text('q109_bacteriuriaSem')->nullable();
            $table-> text('q109_bacteriuriaSem2')->nullable();
            $table-> text('q110_glucemiaEn')->nullable();
            $table-> text('q110_glucemiaEn2')->nullable();
            $table-> text('q111_escribaUna111')->nullable();
            $table-> text('q112_prevencionPreeclampsia1')->nullable();
            $table-> text('q112_prevencionPreeclampsia2')->nullable();
            $table-> text('q112_prevencionPreeclampsia3')->nullable();
            $table-> text('q113_estreptococoB113')->nullable();
            $table-> text('q114_educacionPrenatalsesiones')->nullable();
            $table-> text('q115_planDe')->nullable();
            $table-> text('q116_consejeriaLactancia')->nullable();
            $table-> text('q118_pruebaNo')->nullable();
            $table-> text('q119_lt20')->nullable();
            $table-> text('q120_gt20')->nullable();
            $table-> text('q121_pruebaNo121')->nullable();
            $table-> text('q122_pruebaTreponemica')->nullable();
            $table-> text('q123_semanas')->nullable();
            $table-> text('q125_semanas125')->nullable();
            $table-> text('q124_pruebaTreponemica124')->nullable();
            $table-> text('q126_tratamiento')->nullable();
            $table-> text('q127_semanas127')->nullable();
            $table-> text('q128_semanas128')->nullable();


            $table-> text('q129_tratamiento129')->nullable();
            $table-> text('q130_ttoDe')->nullable();
            $table-> text('q131_ttoDe131')->nullable();
            $table-> date('trip-start55')->nullable();
            //  $table-> date('trip-start12')->nullable();

            //  $table-> text('a')->nullable();
            //  $table-> text('b')->nullable();
            //  $table-> text('c')->nullable();
            //  $table-> text('d')->nullable();
            //  $table-> text('f')->nullable();
            //  $table-> text('g')->nullable();
            //  $table-> text('h')->nullable();
            //  $table-> text('i')->nullable();
            //  $table-> text('j')->nullable();
            //  $table-> text('k')->nullable();
            //  $table-> text('l')->nullable();
            //  $table-> text('m')->nullable();
            //  $table-> text('n')->nullable();
            //  $table-> text('o')->nullable();
            //  $table-> text('p')->nullable();
            //  $table-> text('q')->nullable();
            //  $table-> text('111')->nullable();
            //  $table-> date('trip-start65')->nullable();
            //  $table-> date('trip-start66')->nullable();
            //  $table-> text('1')->nullable();
            //  $table-> text('2')->nullable();


            //  $table-> text('3')->nullable();
            //  $table-> text('4')->nullable();
            //  $table-> text('5')->nullable();
            //  $table-> text('6')->nullable();
            //   $table-> text('7')->nullable();
            //   $table-> text('8')->nullable();
            //   $table-> text('9')->nullable();
            //   $table-> text('10')->nullable();
            //   $table-> text('11')->nullable();
            //   $table-> text('12')->nullable();
            //   $table-> text('13')->nullable();
            //   $table-> text('14')->nullable();
            //   $table-> text('15')->nullable();
            //   $table-> text('16')->nullable();
            //   $table-> text('17')->nullable();
            //   $table-> text('18')->nullable();

            //   $table-> date('trip-start67')->nullable();
            //   $table-> date('trip-start688')->nullable();

              
            //   $table-> text('a1')->nullable();
            //   $table-> text('a2')->nullable();
            //   $table-> text('a3')->nullable();
            //   $table-> text('a4')->nullable();
            //   $table-> text('a5')->nullable();
            //   $table-> text('a6')->nullable();
            //   $table-> text('a7')->nullable();
            //   $table-> text('a8')->nullable();
            //   $table-> text('a9')->nullable();


              
            //  $table-> text('a10')->nullable();
            //  $table-> text('a11')->nullable();
            //  $table-> text('a12')->nullable();
            //  $table-> text('a13')->nullable();
            //   $table-> text('a14')->nullable();
            //   $table-> text('a15')->nullable();
            //   $table-> text('a16')->nullable();
            //   $table-> text('a17')->nullable();

            //   $table-> date('trip-start68')->nullable();
            //   $table-> date('trip-start69')->nullable();
              
            //   $table-> text('b1')->nullable();
            //   $table-> text('b2')->nullable();
            //   $table-> text('b3')->nullable();
            //   $table-> text('b4')->nullable();
            //   $table-> text('b5')->nullable();
            //   $table-> text('b6')->nullable();
            //   $table-> text('b7')->nullable();
            //   $table-> text('b8')->nullable();
            //   $table-> text('b9')->nullable();
            //   $table-> text('b10')->nullable();
            //   $table-> text('b11')->nullable();
            //   $table-> text('b12')->nullable();
            //   $table-> text('b13')->nullable();
            //   $table-> text('b14')->nullable();
            //   $table-> text('b15')->nullable();
            //   $table-> text('b16')->nullable();


              
  


              
            //  $table-> text('b17')->nullable();
            //  $table-> date('trip-start70')->nullable();
            //  $table-> date('trip-start71')->nullable();


            //  $table-> text('c1')->nullable();
            //   $table-> text('c2')->nullable();
            //   $table-> text('c3')->nullable();
            //   $table-> text('c4')->nullable();
            //   $table-> text('c5')->nullable();
            //   $table-> text('c6')->nullable();
            //   $table-> text('c7')->nullable();
            //   $table-> text('c8')->nullable();
            //   $table-> text('c9')->nullable();
            //   $table-> text('c10')->nullable();
            //   $table-> text('c11')->nullable();
            //   $table-> text('c12')->nullable();
            //   $table-> text('c13')->nullable();
            //   $table-> text('c14')->nullable();
            //   $table-> text('c15')->nullable();
            //   $table-> text('c16')->nullable();
            //   $table-> text('c17')->nullable();
              
            //   $table-> date('trip-start73')->nullable();
              
          $table->foreign('idObtetra')->references('id')->on('users')->onDelete("cascade");

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
        //
    }
}
