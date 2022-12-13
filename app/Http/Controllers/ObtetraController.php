<?php

namespace App\Http\Controllers;

use App\Models\Obtetra;
use Illuminate\Http\Request;
use App\Models\Pacientes;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ObtetraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){ /* autenticacion*/

            return redirect('Inicio');/* retornadndo inicio*/


        }

        $paciente = DB::select('select * from users where rol = "Paciente"');
        return view('modulos.ObtetraIndex')->with('pacientes', $paciente);

    }

    public function index2(Pacientes $id)
    {
        if(auth()->user()->rol != 'Administrador' && auth()->user()->rol != 'Secretaria' && auth()->user()->rol != 'Doctor'){

            return redirect('Inicio');

        }

        $paciente = Pacientes::find($id->id);
        

        return view('modulos.Obtetra')->with('paciente', $paciente);
        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Obtetra  $obtetraR)
    {
        $datos = request()->validate([


            'idObtetra'=>[''],
          'q139_nacionalidad'=>[''],
          'trip-start1'=>[''],
          'q138_autoidentificacion138'=>[''],
          'q42_sabeLeer'=>[''],
          'q43_alfabetizacionE'=>[''],
          'q45_viveSola'=>[''],
          'q47_establecimientoDel'=>[''],
          'q48_establecimientoDel48'=>[''],
          'q14_name14'=>[''],
          'q16_name16'=>[''],
          'q17_name17'=>[''],
          'q50_ultimoEmbarazo'=>[''],
          'q51_embarazosMultiples'=>[''],
          'q52_gestasPrevias'=>[''],
          'q53_embMolar'=>[''],
          'q54_embEctopico'=>[''],
          'q55_abortos'=>[''],
          'q56_partos'=>[''],
          'q57_vaginales'=>[''],
          'q58_cesareas'=>[''],
          'q59_nacidosVivos'=>[''],
          'q60_nacidosMuertos'=>[''],
          'q61_viven'=>[''],
          'q62_muertos1ra'=>[''],
          'q63_despues1ra'=>[''],
          'trip-start2'=>[''],
          'q68_escribaUna'=>[''],
          'q69_embarazoPlanificado'=>[''],
          'q70_name70'=>[''],
          'q74_pesoInicial'=>[''],
          'q75_tallacm'=>[''],
          'trip-start22'=>[''],
          'trip-start3'=>[''],
          'q78_name78'=>[''],
          'q79_name79'=>[''],
          'q80_fumaAct'=>[''],
          'q80_fumaAct2'=>[''],
          'q80_fumaAct3'=>[''],
          'q81_fumaPas1'=>[''],
          'q81_fumaPas2'=>[''],
          'q81_fumaPas3'=>[''],
          'q82_drogas1'=>[''],
          'q82_drogas2'=>[''],
          'q82_drogas3'=>[''],
          'q83_alcohol1'=>[''],
          'q83_alcohol2'=>[''],
          'q83_alcohol3'=>[''],
          'q84_violencia1'=>[''],
          'q84_violencia2'=>[''],
          'q84_violencia3'=>[''],
           'q85_name85'=>[''],
           'q86_antitetanicaVigente'=>[''],
           'q88_1ra'=>[''],
           'q89_2da'=>[''],
           'q90_exNormal'=>[''],
           'q90_exNormal2'=>[''],
           'q91_cervix1'=>[''],
           'q91_cervix2'=>[''],
           'q91_cervix3'=>[''],
           'q92_grupo'=>[''],
           'q93_rh'=>[''],
           'q94_inmuniz'=>[''],
           'q95_name951'=>[''],
           'q97_name972'=>[''],
           'q98_tarvEn'=>[''],
           'q99_gt2099'=>[''],
           'q100_pruebaResutl'=>[''],
           'q101_tarvEn101'=>[''],
           'q103_escribaUna103'=>[''],
           'q104_fefolatosIndicados'=>[''],
           'q104_fefolatosIndicados2'=>[''],
           'q105_hbgt20semGdl'=>[''],

           'q106_escribaUna106'=>[''],
           'q107_name107'=>[''],
           'q108_name108'=>[''],
           'q109_bacteriuriaSem'=>[''],
            'q109_bacteriuriaSem2'=>[''],
            'q110_glucemiaEn'=>[''],
            'q110_glucemiaEn2'=>[''],
            'q111_escribaUna111'=>[''],
            'q112_prevencionPreeclampsia1'=>[''],
            'q112_prevencionPreeclampsia2'=>[''],
            'q112_prevencionPreeclampsia3'=>[''],
            'q113_estreptococoB113'=>[''],
            'q114_educacionPrenatalsesiones'=>[''],
            'q115_planDe'=>[''],
            'q116_consejeriaLactancia'=>[''],
            'q118_pruebaNo'=>[''],
            'q119_lt20'=>[''],
            'q120_gt20'=>[''],
            'q121_pruebaNo121'=>[''],
            'q122_pruebaTreponemica'=>[''],
            'q123_semanas'=>[''],
            'q125_semanas125'=>[''],
            'q124_pruebaTreponemica124'=>[''],
            'q126_tratamiento'=>[''],
            'q127_semanas127'=>[''],
            'q128_semanas128'=>[''],


            'q129_tratamiento129'=>[''],
            'q130_ttoDe'=>[''],
            'q131_ttoDe131'=>[''],
            'trip-start55'=>['']
            //  'trip-start12'=>[''],

            //  'a'=>[''],
            //  'b'=>[''],
            //  'c'=>[''],
            //  'd'=>[''],
            //  'f'=>[''],
            //  'g'=>[''],
            //  'h'=>[''],
            //  'i'=>[''],
            //  'j'=>[''],
            //  'k'=>[''],
            //  'l'=>[''],
            //  'm'=>[''],
            //  'n'=>[''],
            //  'o'=>[''],
            //  'p'=>[''],
            //  'q'=>[''],
            // 'qq'=>[''],
            //  'trip-start65'=>[''],
            //  'trip-start66'=>[''],
          
            //  '2'=>[''],


            //  '3'=>[''],
            //  '4'=>[''],
            //  '5'=>[''],
            //  '6'=>[''],
            //   '7'=>[''],
            //   '8'=>[''],
            //   '9'=>[''],
            //   '10'=>[''],
            //   '11'=>[''],
            //   '12'=>[''],
            //   '13'=>[''],
            //   '14'=>[''],
            //   '15'=>[''],
            //   're'=>[''],
            //  'er'=>[''],
            //   '18'=>[''],

            //   'trip-start67'=>[''],
            //   'trip-start688'=>[''],

              
            //   'a1'=>[''],
            //   'a2'=>[''],
            //   'a3'=>[''],
            //   'a4'=>[''],
            //   'a5'=>[''],
            //   'a6'=>[''],
            //   'a7'=>[''],
            //   'a8'=>[''],
            //   'a9'=>[''],


              
            //  'a10'=>[''],
            //  'a11'=>[''],
            //  'a12'=>[''],
            //  'a13'=>[''],
            //   'a14'=>[''],
            //   'a15'=>[''],
            //   'a16'=>[''],
            //   'a17'=>[''],

            //   'trip-start68'=>[''],
            //   'trip-start69'=>[''],
              
            //   'b1'=>[''],
            //   'b2'=>[''],
            //   'b3'=>[''],
            //   'b4'=>[''],
            //   'b5'=>[''],
            //   'b6'=>[''],
            //   'b7'=>[''],
            //   'b8'=>[''],
            //   'b9'=>[''],
            //   'b10'=>[''],
            //   'b11'=>[''],
            //   'b12'=>[''],
            //   'b13'=>[''],
            //   'b14'=>[''],
            //   'b15'=>[''],
            //   'b16'=>[''],


              
  


              
            //  'b17'=>[''],
            //  'trip-start70'=>[''],
            //  'trip-start71'=>[''],


            //  'c1'=>[''],
            //   'c2'=>[''],
            //   'c3'=>[''],
            //   'c4'=>[''],
            //   'c5'=>[''],
            //   'c6'=>[''],
            //   'c7'=>[''],
            //   'c8'=>[''],
            //   'c9'=>[''],
            //   'c10'=>[''],
            //   'c11'=>[''],
            //   'c12'=>[''],
            //   'c13'=>[''],
            //   'c14'=>[''],
            //   'c15'=>[''],
            //   'c16'=>[''],
            //   'c17'=>[''],
            //   'trip-start73'=>['']
           

        ]);

        $obtetraR = Obtetra::create([

            'idObtetra'=>$datos['idObtetra'],
          'q139_nacionalidad'=>$datos['q139_nacionalidad'],
          'trip-start1'=>$datos['trip-start1'],
          'q138_autoidentificacion138'=>$datos['q138_autoidentificacion138'],
          'q42_sabeLeer'=>$datos['q42_sabeLeer'],
          'q43_alfabetizacionE'=>$datos['q43_alfabetizacionE'],
          'q45_viveSola'=>$datos['q45_viveSola'],
          'q47_establecimientoDel'=>$datos['q47_establecimientoDel'],
          'q48_establecimientoDel48'=>$datos['q48_establecimientoDel48'],
          'q14_name14'=>$datos['q14_name14'],
          'q16_name16'=>$datos['q16_name16'],
          'q17_name17'=>$datos['q17_name17'],
          'q50_ultimoEmbarazo'=>$datos['q50_ultimoEmbarazo'],
          'q51_embarazosMultiples'=>$datos['q51_embarazosMultiples'],
          'q52_gestasPrevias'=>$datos['q52_gestasPrevias'],
          'q53_embMolar'=>$datos['q53_embMolar'],
          'q54_embEctopico'=>$datos['q54_embEctopico'],
          'q55_abortos'=>$datos['q55_abortos'],
          'q56_partos'=>$datos['q56_partos'],
          'q57_vaginales'=>$datos['q57_vaginales'],
          'q58_cesareas'=>$datos['q58_cesareas'],
          'q59_nacidosVivos'=>$datos['q59_nacidosVivos'],
          'q60_nacidosMuertos'=>$datos['q60_nacidosMuertos'],
          'q61_viven'=>$datos['q61_viven'],
          'q62_muertos1ra'=>$datos['q62_muertos1ra'],
          'q63_despues1ra'=>$datos['q63_despues1ra'],
          'trip-start2'=>$datos['trip-start2'],
          'q68_escribaUna'=>$datos['q68_escribaUna'],
          'q69_embarazoPlanificado'=>$datos['q69_embarazoPlanificado'],
          'q70_name70'=>$datos['q70_name70'],
          'q74_pesoInicial'=>$datos['q74_pesoInicial'],
          'q75_tallacm'=>$datos['q75_tallacm'],
          'trip-start22'=>$datos['trip-start22'],
          'trip-start3'=>$datos['trip-start3'],
          'q78_name78'=>$datos['q78_name78'],
          'q79_name79'=>$datos['q79_name79'],
          'q80_fumaAct'=>$datos['q80_fumaAct'],
          'q80_fumaAct2'=>$datos['q80_fumaAct2'],
          'q80_fumaAct3'=>$datos['q80_fumaAct3'],
          'q81_fumaPas1'=>$datos['q81_fumaPas1'],
          'q81_fumaPas2'=>$datos['q81_fumaPas2'],
          'q81_fumaPas3'=>$datos['q81_fumaPas3'],
          'q82_drogas1'=>$datos['q82_drogas1'],
          'q82_drogas2'=>$datos['q82_drogas2'],
          'q82_drogas3'=>$datos['q82_drogas3'],
          'q83_alcohol1'=>$datos['q83_alcohol1'],
          'q83_alcohol2'=>$datos['q83_alcohol2'],
          'q83_alcohol3'=>$datos['q83_alcohol3'],
          'q84_violencia1'=>$datos['q84_violencia1'],
          'q84_violencia2'=>$datos['q84_violencia2'],
          'q84_violencia3'=>$datos['q84_violencia3'],
           'q85_name85'=>$datos['q85_name85'],
           'q86_antitetanicaVigente'=>$datos['q86_antitetanicaVigente'],
           'q88_1ra'=>$datos['q88_1ra'],
           'q89_2da'=>$datos['q89_2da'],
           'q90_exNormal'=>$datos['q90_exNormal'],
           'q90_exNormal2'=>$datos['q90_exNormal2'],
           'q91_cervix1'=>$datos['q91_cervix1'],
           'q91_cervix2'=>$datos['q91_cervix2'],
           'q91_cervix3'=>$datos['q91_cervix3'],
           'q92_grupo'=>$datos['q92_grupo'],
           'q93_rh'=>$datos['q93_rh'],
           'q94_inmuniz'=>$datos['q94_inmuniz'],
           'q95_name951'=>$datos['q95_name951'],
           'q97_name972'=>$datos['q97_name972'],
           'q98_tarvEn'=>$datos['q98_tarvEn'],
           'q99_gt2099'=>$datos['q99_gt2099'],
           'q100_pruebaResutl'=>$datos['q100_pruebaResutl'],
           'q101_tarvEn101'=>$datos['q101_tarvEn101'],
           'q103_escribaUna103'=>$datos['q103_escribaUna103'],
           'q104_fefolatosIndicados'=>$datos['q104_fefolatosIndicados'],
           'q104_fefolatosIndicados2'=>$datos['q104_fefolatosIndicados2'],
           'q105_hbgt20semGdl'=>$datos['q105_hbgt20semGdl'],

           'q106_escribaUna106'=>$datos['q106_escribaUna106'],
           'q107_name107'=>$datos['q107_name107'],
           'q108_name108'=>$datos['q108_name108'],
           'q109_bacteriuriaSem'=>$datos['q109_bacteriuriaSem'],
            'q109_bacteriuriaSem2'=>$datos['q109_bacteriuriaSem2'],
            'q110_glucemiaEn'=>$datos['q110_glucemiaEn'],
            'q110_glucemiaEn2'=>$datos['q110_glucemiaEn2'],
            'q111_escribaUna111'=>$datos['q111_escribaUna111'],
            'q112_prevencionPreeclampsia1'=>$datos['q112_prevencionPreeclampsia1'],
            'q112_prevencionPreeclampsia2'=>$datos['q112_prevencionPreeclampsia2'],
            'q112_prevencionPreeclampsia3'=>$datos['q112_prevencionPreeclampsia3'],
            'q113_estreptococoB113'=>$datos['q113_estreptococoB113'],
            'q114_educacionPrenatalsesiones'=>$datos['q114_educacionPrenatalsesiones'],
            'q115_planDe'=>$datos['q115_planDe'],
            'q116_consejeriaLactancia'=>$datos['q116_consejeriaLactancia'],
            'q118_pruebaNo'=>$datos['q118_pruebaNo'],
            'q119_lt20'=>$datos['q119_lt20'],
            'q120_gt20'=>$datos['q120_gt20'],
            'q121_pruebaNo121'=>$datos['q121_pruebaNo121'],
            'q122_pruebaTreponemica'=>$datos['q122_pruebaTreponemica'],
            'q123_semanas'=>$datos['q123_semanas'],
            'q125_semanas125'=>$datos['q125_semanas125'],
            'q124_pruebaTreponemica124'=>$datos['q124_pruebaTreponemica124'],
            'q126_tratamiento'=>$datos['q126_tratamiento'],
            'q127_semanas127'=>$datos['q127_semanas127'],
            'q128_semanas128'=>$datos['q128_semanas128'],


            'q129_tratamiento129'=>$datos['q129_tratamiento129'],
            'q130_ttoDe'=>$datos['q130_ttoDe'],
            'q131_ttoDe131'=>$datos['q131_ttoDe131'],
            'trip-start55'=>$datos['trip-start55']
            //  'trip-start12'=>$datos['trip-start12'],

            //  'a'=>$datos['a'],
            //  'b'=>$datos['b'],
            //  'c'=>$datos['c'],
            //  'd'=>$datos['d'],
            //  'f'=>$datos['f'],
            //  'g'=>$datos['g'],
            //  'h'=>$datos['h'],
            //  'i'=>$datos['i'],
            //  'j'=>$datos['j'],
            //  'k'=>$datos['k'],
            //  'l'=>$datos['l'],
            //  'm'=>$datos['m'],
            //  'n'=>$datos['n'],
            //  'o'=>$datos['o'],
            //  'p'=>$datos['p'],
            //  'q'=>$datos['q'],
            // 'qq'=>$datos['qq'],
            //  'trip-start65'=>$datos['trip-start65'],
            //  'trip-start66'=>$datos['trip-start66'],
            // //  '1'=>$datos['1'],
            //  '2'=>$datos['2'],


            //  '3'=>$datos['3'],
            //  '4'=>$datos['4'],
            //  '5'=>$datos['5'],
            //  '6'=>$datos['6'],
            //   '7'=>$datos['7'],
            //   '8'=>$datos['8'],
            //   '9'=>$datos['9'],
            //   '10'=>$datos['10'],
            //   '11'=>$datos['11'],
            //   '12'=>$datos['12'],
            //   '13'=>$datos['13'],
            //   '14'=>$datos['14'],
            //   '15'=>$datos['15'],
            //   're'=>$datos['re'],
            //   'er'=>$datos['er'],
            //   '18'=>$datos['18'],

            //   'trip-start67'=>$datos['trip-start67'],
            //   'trip-start688'=>$datos['trip-start688'],

              
            //   'a1'=>$datos['a1'],
            //   'a2'=>$datos['a2'],
            //   'a3'=>$datos['a3'],
            //   'a4'=>$datos['a4'],
            //   'a5'=>$datos['a5'],
            //   'a6'=>$datos['a6'],
            //   'a7'=>$datos['a7'],
            //   'a8'=>$datos['a8'],
            //   'a9'=>$datos['a9'],


              
            //  'a10'=>$datos['a10'],
            //  'a11'=>$datos['a11'],
            //  'a12'=>$datos['a12'],
            //  'a13'=>$datos['a13'],
            //   'a14'=>$datos['a14'],
            //   'a15'=>$datos['a15'],
            //   'a16'=>$datos['a16'],
            //   'a17'=>$datos['a17'],

            //   'trip-start68'=>$datos['trip-start68'],
            //   'trip-start69'=>$datos['trip-start69'],
              
            //   'b1'=>$datos['b1'],
            //   'b2'=>$datos['b2'],
            //   'b3'=>$datos['b3'],
            //   'b4'=>$datos['b4'],
            //   'b5'=>$datos['b5'],
            //   'b6'=>$datos['b6'],
            //   'b7'=>$datos['b7'],
            //   'b8'=>$datos['b8'],
            //   'b9'=>$datos['b9'],
            //   'b10'=>$datos['b10'],
            //   'b11'=>$datos['b11'],
            //   'b12'=>$datos['b12'],
            //   'b13'=>$datos['b13'],
            //   'b14'=>$datos['b14'],
            //   'b15'=>$datos['b15'],
            //   'b16'=>$datos['b16'],


              
  


              
            //  'b17'=>$datos['b17'],
            //  'trip-start70'=>$datos['trip-start70'],
            //  'trip-start71'=>$datos['trip-start71'],


            //  'c1'=>$datos['c1'],
            //   'c2'=>$datos['c2'],
            //   'c3'=>$datos['c3'],
            //   'c4'=>$datos['c4'],
            //   'c5'=>$datos['c5'],
            //   'c6'=>$datos['c6'],
            //   'c7'=>$datos['c7'],
            //   'c8'=>$datos['c8'],
            //   'c9'=>$datos['c9'],
            //   'c10'=>$datos['c10'],
            //   'c11'=>$datos['c11'],
            //   'c12'=>$datos['c12'],
            //   'c13'=>$datos['c13'],
            //   'c14'=>$datos['c14'],
            //   'c15'=>$datos['c15'],
            //   'c16'=>$datos['c16'],
            //   'c17'=>$datos['c17'],
            //   'trip-start73'=>$datos['trip-start73']
        ]);

        DB::table('obtetra')->where('id', $obtetraR["id"])->update([
            
            'q139_nacionalidad'=>$datos['q139_nacionalidad'],
          'trip-start1'=>$datos['trip-start1'],
          'q138_autoidentificacion138'=>$datos['q138_autoidentificacion138'],
          'q42_sabeLeer'=>$datos['q42_sabeLeer'],
          'q43_alfabetizacionE'=>$datos['q43_alfabetizacionE'],
          'q45_viveSola'=>$datos['q45_viveSola'],
          'q47_establecimientoDel'=>$datos['q47_establecimientoDel'],
          'q48_establecimientoDel48'=>$datos['q48_establecimientoDel48'],
          'q14_name14'=>$datos['q14_name14'],
          'q16_name16'=>$datos['q16_name16'],
          'q17_name17'=>$datos['q17_name17'],
          'q50_ultimoEmbarazo'=>$datos['q50_ultimoEmbarazo'],
          'q51_embarazosMultiples'=>$datos['q51_embarazosMultiples'],
          'q52_gestasPrevias'=>$datos['q52_gestasPrevias'],
          'q53_embMolar'=>$datos['q53_embMolar'],
          'q54_embEctopico'=>$datos['q54_embEctopico'],
          'q55_abortos'=>$datos['q55_abortos'],
          'q56_partos'=>$datos['q56_partos'],
          'q57_vaginales'=>$datos['q57_vaginales'],
          'q58_cesareas'=>$datos['q58_cesareas'],
          'q59_nacidosVivos'=>$datos['q59_nacidosVivos'],
          'q60_nacidosMuertos'=>$datos['q60_nacidosMuertos'],
          'q61_viven'=>$datos['q61_viven'],
          'q62_muertos1ra'=>$datos['q62_muertos1ra'],
          'q63_despues1ra'=>$datos['q63_despues1ra'],
          'trip-start2'=>$datos['trip-start2'],
          'q68_escribaUna'=>$datos['q68_escribaUna'],
          'q69_embarazoPlanificado'=>$datos['q69_embarazoPlanificado'],
          'q70_name70'=>$datos['q70_name70'],
          'q74_pesoInicial'=>$datos['q74_pesoInicial'],
          'q75_tallacm'=>$datos['q75_tallacm'],
          'trip-start22'=>$datos['trip-start22'],
          'trip-start3'=>$datos['trip-start3'],
          'q78_name78'=>$datos['q78_name78'],
          'q79_name79'=>$datos['q79_name79'],
          'q80_fumaAct'=>$datos['q80_fumaAct'],
          'q80_fumaAct2'=>$datos['q80_fumaAct2'],
          'q80_fumaAct3'=>$datos['q80_fumaAct3'],
          'q81_fumaPas1'=>$datos['q81_fumaPas1'],
          'q81_fumaPas2'=>$datos['q81_fumaPas2'],
          'q81_fumaPas3'=>$datos['q81_fumaPas3'],
          'q82_drogas1'=>$datos['q82_drogas1'],
          'q82_drogas2'=>$datos['q82_drogas2'],
          'q82_drogas3'=>$datos['q82_drogas3'],
          'q83_alcohol1'=>$datos['q83_alcohol1'],
          'q83_alcohol2'=>$datos['q83_alcohol2'],
          'q83_alcohol3'=>$datos['q83_alcohol3'],
          'q84_violencia1'=>$datos['q84_violencia1'],
          'q84_violencia2'=>$datos['q84_violencia2'],
          'q84_violencia3'=>$datos['q84_violencia3'],
           'q85_name85'=>$datos['q85_name85'],
           'q86_antitetanicaVigente'=>$datos['q86_antitetanicaVigente'],
           'q88_1ra'=>$datos['q88_1ra'],
           'q89_2da'=>$datos['q89_2da'],
           'q90_exNormal'=>$datos['q90_exNormal'],
           'q90_exNormal2'=>$datos['q90_exNormal2'],
           'q91_cervix1'=>$datos['q91_cervix1'],
           'q91_cervix2'=>$datos['q91_cervix2'],
           'q91_cervix3'=>$datos['q91_cervix3'],
           'q92_grupo'=>$datos['q92_grupo'],
           'q93_rh'=>$datos['q93_rh'],
           'q94_inmuniz'=>$datos['q94_inmuniz'],
           'q95_name951'=>$datos['q95_name951'],
           'q97_name972'=>$datos['q97_name972'],
           'q98_tarvEn'=>$datos['q98_tarvEn'],
           'q99_gt2099'=>$datos['q99_gt2099'],
           'q100_pruebaResutl'=>$datos['q100_pruebaResutl'],
           'q101_tarvEn101'=>$datos['q101_tarvEn101'],
           'q103_escribaUna103'=>$datos['q103_escribaUna103'],
           'q104_fefolatosIndicados'=>$datos['q104_fefolatosIndicados'],
           'q104_fefolatosIndicados2'=>$datos['q104_fefolatosIndicados2'],
           'q105_hbgt20semGdl'=>$datos['q105_hbgt20semGdl'],

           'q106_escribaUna106'=>$datos['q106_escribaUna106'],
           'q107_name107'=>$datos['q107_name107'],
           'q108_name108'=>$datos['q108_name108'],
           'q109_bacteriuriaSem'=>$datos['q109_bacteriuriaSem'],
            'q109_bacteriuriaSem2'=>$datos['q109_bacteriuriaSem2'],
            'q110_glucemiaEn'=>$datos['q110_glucemiaEn'],
            'q110_glucemiaEn2'=>$datos['q110_glucemiaEn2'],
            'q111_escribaUna111'=>$datos['q111_escribaUna111'],
            'q112_prevencionPreeclampsia1'=>$datos['q112_prevencionPreeclampsia1'],
            'q112_prevencionPreeclampsia2'=>$datos['q112_prevencionPreeclampsia2'],
            'q112_prevencionPreeclampsia3'=>$datos['q112_prevencionPreeclampsia3'],
            'q113_estreptococoB113'=>$datos['q113_estreptococoB113'],
            'q114_educacionPrenatalsesiones'=>$datos['q114_educacionPrenatalsesiones'],
            'q115_planDe'=>$datos['q115_planDe'],
            'q116_consejeriaLactancia'=>$datos['q116_consejeriaLactancia'],
            'q118_pruebaNo'=>$datos['q118_pruebaNo'],
            'q119_lt20'=>$datos['q119_lt20'],
            'q120_gt20'=>$datos['q120_gt20'],
            'q121_pruebaNo121'=>$datos['q121_pruebaNo121'],
            'q122_pruebaTreponemica'=>$datos['q122_pruebaTreponemica'],
            'q123_semanas'=>$datos['q123_semanas'],
            'q125_semanas125'=>$datos['q125_semanas125'],
            'q124_pruebaTreponemica124'=>$datos['q124_pruebaTreponemica124'],
            'q126_tratamiento'=>$datos['q126_tratamiento'],
            'q127_semanas127'=>$datos['q127_semanas127'],
            'q128_semanas128'=>$datos['q128_semanas128'],


            'q129_tratamiento129'=>$datos['q129_tratamiento129'],
            'q130_ttoDe'=>$datos['q130_ttoDe'],
            'q131_ttoDe131'=>$datos['q131_ttoDe131'],
            'trip-start55'=>$datos['trip-start55']
             /* 'trip-start12'=>$datos['trip-start12'],

             'a'=>$datos['a'],
             'b'=>$datos['b'],
             'c'=>$datos['c'],
             'd'=>$datos['d'],
             'f'=>$datos['f'],
             'g'=>$datos['g'],
             'h'=>$datos['h'],
             'i'=>$datos['i'],
             'j'=>$datos['j'],
             'k'=>$datos['k'],
             'l'=>$datos['l'],
             'm'=>$datos['m'],
             'n'=>$datos['n'],
             'o'=>$datos['o'],
             'p'=>$datos['p'],
             'q'=>$datos['q'],
            'qq'=>$datos['qq'],
             'trip-start65'=>$datos['trip-start65'],
             'trip-start66'=>$datos['trip-start66'],
           
             '2'=>$datos['2'],


             '3'=>$datos['3'],
             '4'=>$datos['4'],
             '5'=>$datos['5'],
             '6'=>$datos['6'],
              '7'=>$datos['7'],
              '8'=>$datos['8'],
              '9'=>$datos['9'],
              '10'=>$datos['10'],
              '11'=>$datos['11'],
              '12'=>$datos['12'],
              '13'=>$datos['13'],
              '14'=>$datos['14'],
              '15'=>$datos['15'],
              're'=>$datos['re'],
              'er'=>$datos['er'],
              '18'=>$datos['18'],

              'trip-start67'=>$datos['trip-start67'],
              'trip-start688'=>$datos['trip-start688'],

              
              'a1'=>$datos['a1'],
              'a2'=>$datos['a2'],
              'a3'=>$datos['a3'],
              'a4'=>$datos['a4'],
              'a5'=>$datos['a5'],
              'a6'=>$datos['a6'],
              'a7'=>$datos['a7'],
              'a8'=>$datos['a8'],
              'a9'=>$datos['a9'],


              
             'a10'=>$datos['a10'],
             'a11'=>$datos['a11'],
             'a12'=>$datos['a12'],
             'a13'=>$datos['a13'],
              'a14'=>$datos['a14'],
              'a15'=>$datos['a15'],
              'a16'=>$datos['a16'],
              'a17'=>$datos['a17'],

              'trip-start68'=>$datos['trip-start68'],
              'trip-start69'=>$datos['trip-start69'],
              
              'b1'=>$datos['b1'],
              'b2'=>$datos['b2'],
              'b3'=>$datos['b3'],
              'b4'=>$datos['b4'],
              'b5'=>$datos['b5'],
              'b6'=>$datos['b6'],
              'b7'=>$datos['b7'],
              'b8'=>$datos['b8'],
              'b9'=>$datos['b9'],
              'b10'=>$datos['b10'],
              'b11'=>$datos['b11'],
              'b12'=>$datos['b12'],
              'b13'=>$datos['b13'],
              'b14'=>$datos['b14'],
              'b15'=>$datos['b15'],
              'b16'=>$datos['b16'],


              
  


              
             'b17'=>$datos['b17'],
             'trip-start70'=>$datos['trip-start70'],
             'trip-start71'=>$datos['trip-start71'],


             'c1'=>$datos['c1'],
              'c2'=>$datos['c2'],
              'c3'=>$datos['c3'],
              'c4'=>$datos['c4'],
              'c5'=>$datos['c5'],
              'c6'=>$datos['c6'],
              'c7'=>$datos['c7'],
              'c8'=>$datos['c8'],
              'c9'=>$datos['c9'],
              'c10'=>$datos['c10'],
              'c11'=>$datos['c11'],
              'c12'=>$datos['c12'],
              'c13'=>$datos['c13'],
              'c14'=>$datos['c14'],
              'c15'=>$datos['c15'],
              'c16'=>$datos['c16'],
              'c17'=>$datos['c17'],
              'trip-start73'=>$datos['trip-start73'] */
             ]);


        return redirect('ObtetraIndex')->with('Agregado', 'Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obtetra  $obtetra
     * @return \Illuminate\Http\Response
     */
    public function show(Obtetra $obtetra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obtetra  $obtetra
     * @return \Illuminate\Http\Response
     */
    public function edit(Obtetra $obtetra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obtetra  $obtetra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obtetra $obtetra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obtetra  $obtetra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obtetra $obtetra)
    {
        //
    }
}
