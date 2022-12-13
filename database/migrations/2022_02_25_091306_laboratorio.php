

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laboratorio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratorio', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            $table->bigIncrements('idlaboratorio');
            $table->bigInteger('paciente_idL')->unsigned();

            $table-> date('fechaLa')->nullable();
            $table-> text('edad')->nullable();
            $table-> text('solicitado')->nullable();
            $table-> text('biometria')->nullable();
            $table-> text('hematocrito')->nullable();
            $table-> text('contaje')->nullable();
            $table-> text('velocidad')->nullable();
            $table-> text('reticulocitos')->nullable();
            $table-> text('hematozoario')->nullable();
            $table-> text('grupo')->nullable();
            $table-> text('coombsD')->nullable();
            $table-> text('ComombsI')->nullable();
            $table-> text('tp')->nullable();
            $table-> text('ttp')->nullable();
            $table-> text('tiempoH')->nullable();
            $table-> text('tiempoC')->nullable();
            $table-> text('glucosa')->nullable();
            $table-> text('curva')->nullable();
            $table-> text('curvaTole')->nullable(); 
            $table-> text('hemoglobina')->nullable();
            $table-> text('urea')->nullable();
            $table-> text('bun')->nullable();
            $table-> text('creatinina')->nullable();
            $table-> text('acido')->nullable();
            $table-> text('colesterol')->nullable();
            $table-> text('trigliceridos')->nullable();
            $table-> text('hdl')->nullable();
            $table-> text('lipidos')->nullable();
            $table-> text('proteinas')->nullable();
            $table-> text('albumina')->nullable();
            $table-> text('globulina')->nullable();
            $table-> text('bilirubinas')->nullable();
            $table-> text('tgo')->nullable();
            $table-> text('tgp')->nullable();
            $table-> text('fosfatasa')->nullable();
            $table-> text('gamma')->nullable();
            $table-> text('ldh')->nullable();
            $table-> text('amilasa')->nullable(); 
            $table-> text('lipasa')->nullable();
            $table-> text('cpk')->nullable();
            $table-> text('ck')->nullable();
            $table-> text('troponina')->nullable();
            $table-> text('sodio')->nullable();
            $table-> text('calcio')->nullable();
            $table-> text('calcioI')->nullable();
            $table-> text('fosfato')->nullable();
            $table-> text('magnesio')->nullable();
            $table-> text('asto')->nullable();
            $table-> text('fr')->nullable();
            $table-> text('pcr')->nullable();
            $table-> text('aglutinaciones')->nullable();
            $table-> text('vdrl')->nullable();
            $table-> text('hiv')->nullable();
            $table-> text('toxoplasma')->nullable();
            $table-> text('toxoplasmalg')->nullable();
            $table-> text('toxoplasmalm')->nullable();
            $table-> text('rubeola')->nullable();
            $table-> text('rubeolalg')->nullable();
            $table-> text('rubeolalm')->nullable();
            $table-> text('citomegalovirus')->nullable();
            $table-> text('citomegaloviruslg')->nullable();
            $table-> text('citomegaloviruslm')->nullable();
            $table-> text('herpes1')->nullable();
            $table-> text('herpes1lg')->nullable();
            $table-> text('herpes1lm')->nullable();
            $table-> text('herpes2')->nullable();
            $table-> text('herpes2lg')->nullable();
            $table-> text('herpes2lm')->nullable();
            $table-> text('hepatitisA')->nullable();
            $table-> text('hepatitisAlm')->nullable();
            $table-> text('hepatitisB')->nullable();
            $table-> text('hepatitisC')->nullable();
            $table-> text('helicobacter')->nullable();
            $table-> text('mononucleosis')->nullable();
            $table-> text('t3')->nullable();
            $table-> text('t3L')->nullable();
            $table-> text('t4T')->nullable();
            $table-> text('t4L')->nullable();
            $table-> text('tsh')->nullable();
            $table-> text('testE')->nullable();
            $table-> text('hcg')->nullable();
            $table-> text('fsh')->nullable();
            $table-> text('lh')->nullable();
            $table-> text('prolactina')->nullable();
            $table-> text('estrogenos')->nullable();
            $table-> text('progesterona')->nullable();
            $table-> text('testoterona')->nullable();
            $table-> text('insulina')->nullable();
            $table-> text('ana')->nullable();
            $table-> text('dna')->nullable();
            $table-> text('antifosfolípidos')->nullable();
            $table-> text('antifosfolípidosLG')->nullable();
            $table-> text('antifosfolípidosLM')->nullable();
            $table-> text('tpo')->nullable();
            $table-> text('Atiroglobulina')->nullable();
            $table-> text('antiCoagulante')->nullable();
            $table-> text('ccp')->nullable();
            $table-> text('afp')->nullable();
            $table-> text('cea')->nullable();
            $table-> text('psa')->nullable();
            $table-> text('psaL')->nullable();
            $table-> text('ca')->nullable();
            $table-> text('ca19')->nullable();
            $table-> text('tiroglobulina')->nullable();
            $table-> text('emo')->nullable();
            $table-> text('gram')->nullable();
            $table-> text('proteinuria')->nullable();
            $table-> text('microalbuminuria')->nullable();
            $table-> text('clearence')->nullable();
            $table-> text('TestEO')->nullable();
            $table-> text('coproparasitario')->nullable();
            $table-> text('coproparasitarioS')->nullable();
            $table-> text('sangre')->nullable();
            $table-> text('polimorfonucleares')->nullable();
            $table-> text('rotavirus')->nullable();
            $table-> text('oxiuros')->nullable();
            $table-> text('ph')->nullable();
            $table-> text('antígeno')->nullable();
            $table-> text('pylori')->nullable();
            $table-> text('muestra')->nullable();
            $table-> text('muestraE')->nullable();
            $table-> text('fresco')->nullable();
            $table-> text('gramm')->nullable();
            $table-> text('baar')->nullable();
            $table-> text('koh')->nullable();
            $table-> text('cultivoA')->nullable();
            $table-> text('cultivoH')->nullable();
            $table-> text('papanicolao')->nullable();
            $table-> text('eosinófilos')->nullable();
            $table-> text('espermograma')->nullable();
            $table-> text('cristalografia')->nullable();
            $table-> text('otros')->nullable();
            $table-> text('ottros')->nullable();
            
            $table->foreign('paciente_idL')->references('id')->on('users')->onDelete("cascade");
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
