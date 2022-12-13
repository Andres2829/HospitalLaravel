<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, Laboratorio  $laboratorioR)
    {
        $datos = request()->validate([
            'paciente_idL'=>[''],
          'fechaLa'=>[''],
          'edad'=>[''],
          'solicitado'=>[''],
          'biometria'=>[''],
          'hematocrito'=>[''],
          'contaje'=>[''],
          'velocidad'=>[''],
          'reticulocitos'=>[''],
          'hematozoario'=>[''],
          'grupo'=>[''],
          'coombsD'=>[''],
          'ComombsI'=>[''],
          'tp'=>[''],
          'ttp'=>[''],
          'tiempoH'=>[''],
          'tiempoC'=>[''],
          'glucosa'=>[''],
          'curva'=>[''],
          'curvaTole'=>[''], 
          'hemoglobina'=>[''],
          'urea'=>[''],
          'bun'=>[''],
          'creatinina'=>[''],
          'acido'=>[''],
          'colesterol'=>[''],
          'trigliceridos'=>[''],
          'hdl'=>[''],
          'lipidos'=>[''],
          'proteinas'=>[''],
          'albumina'=>[''],
          'globulina'=>[''],
          'bilirubinas'=>[''],
          'tgo'=>[''],
          'tgp'=>[''],
          'fosfatasa'=>[''],
          'gamma'=>[''],
          'ldh'=>[''],
          'amilasa'=>[''], 
          'lipasa'=>[''],
          'cpk'=>[''],
          'ck'=>[''],
          'troponina'=>[''],
          'sodio'=>[''],
          'calcio'=>[''],
          'calcioI'=>[''],
          'fosfato'=>[''],
          'magnesio'=>[''],
          'asto'=>[''],
          'fr'=>[''],
          'pcr'=>[''],
          'aglutinaciones'=>[''],
          'vdrl'=>[''],
          'hiv'=>[''],
          'toxoplasma'=>[''],
          'toxoplasmalg'=>[''],
          'toxoplasmalm'=>[''],
          'rubeola'=>[''],
          'rubeolalg'=>[''],
          'rubeolalm'=>[''],
          'citomegalovirus'=>[''],
          'citomegaloviruslg'=>[''],
          'citomegaloviruslm'=>[''],
          'herpes1'=>[''],
          'herpes1lg'=>[''],
          'herpes1lm'=>[''],
          'herpes2'=>[''],
          'herpes2lg'=>[''],
          'herpes2lm'=>[''],
          'hepatitisA'=>[''],
          'hepatitisAlm'=>[''],
          'hepatitisB'=>[''],
          'hepatitisC'=>[''],
          'helicobacter'=>[''],
          'mononucleosis'=>[''],
          't3'=>[''],
          't3L'=>[''],
          't4T'=>[''],
          't4L'=>[''],
          'tsh'=>[''],
          'testE'=>[''],
          'hcg'=>[''],
          'fsh'=>[''],
          'lh'=>[''],
          'prolactina'=>[''],
          'estrogenos'=>[''],
          'progesterona'=>[''],
          'testoterona'=>[''],
          'insulina'=>[''],
          'ana'=>[''],
          'dna'=>[''],
          'antifosfolípidos'=>[''],
          'antifosfolípidosLG'=>[''],
          'antifosfolípidosLM'=>[''],
          'tpo'=>[''],
          'Atiroglobulina'=>[''],
          'antiCoagulante'=>[''],
          'ccp'=>[''],
          'afp'=>[''],
          'cea'=>[''],
          'psa'=>[''],
          'psaL'=>[''],
          'ca'=>[''],
          'ca19'=>[''],
          'tiroglobulina'=>[''],
          'emo'=>[''],
          'gram'=>[''],
          'proteinuria'=>[''],
          'microalbuminuria'=>[''],
          'clearence'=>[''],
          'TestEO'=>[''],
          'coproparasitario'=>[''],
          'coproparasitarioS'=>[''],
          'sangre'=>[''],
          'polimorfonucleares'=>[''],
          'rotavirus'=>[''],
          'oxiuros'=>[''],
          'ph'=>[''],
          'antígeno'=>[''],
          'pylori'=>[''],
          'muestra'=>[''],
          'muestraE'=>[''],
          'fresco'=>[''],
          'gramm'=>[''],
          'baar'=>[''],
          'koh'=>[''],
          'cultivoA'=>[''],
          'cultivoH'=>[''],
          'papanicolao'=>[''],
          'eosinófilos'=>[''],
          'espermograma'=>[''],
          'cristalografia'=>[''],
          'otros'=>[''],
          'ottros'=>['']
          
           

        ]);

        $laboratorioR = Laboratorio::create([
            
          'paciente_idL'=>$datos["paciente_idL"],
          'fechaLa'=>$datos["fechaLa"],
          'edad'=>$datos["edad"],
          'solicitado'=>$datos["solicitado"],
          'biometria'=>$datos["biometria"],
          'hematocrito'=>$datos["hematocrito"],
          'contaje'=>$datos["contaje"],
          'velocidad'=>$datos["velocidad"],
          'reticulocitos'=>$datos["reticulocitos"],
          'hematozoario'=>$datos["hematozoario"],
          'grupo'=>$datos["grupo"],
          'coombsD'=>$datos["coombsD"],
          'ComombsI'=>$datos["ComombsI"],
          'tp'=>$datos["tp"],
          'ttp'=>$datos["ttp"],
          'tiempoH'=>$datos["tiempoH"],
          'tiempoC'=>$datos["tiempoC"],
          'glucosa'=>$datos["glucosa"],
          'curva'=>$datos["curva"],
          'curvaTole'=>$datos["curvaTole"], 
          'hemoglobina'=>$datos["hemoglobina"],
          'urea'=>$datos["urea"],
          'bun'=>$datos["bun"],
          'creatinina'=>$datos["creatinina"],
          'acido'=>$datos["acido"],
          'colesterol'=>$datos["colesterol"],
          'trigliceridos'=>$datos["trigliceridos"],
          'hdl'=>$datos["hdl"],
          'lipidos'=>$datos["lipidos"],
          'proteinas'=>$datos["proteinas"],
          'albumina'=>$datos["albumina"],
          'globulina'=>$datos["globulina"],
          'bilirubinas'=>$datos["bilirubinas"],
          'tgo'=>$datos["tgo"],
          'tgp'=>$datos["tgp"],
          'fosfatasa'=>$datos["fosfatasa"],
          'gamma'=>$datos["gamma"],
          'ldh'=>$datos["ldh"],
          'amilasa'=>$datos["amilasa"], 
          'lipasa'=>$datos["lipasa"],
          'cpk'=>$datos["cpk"],
          'ck'=>$datos["ck"],
          'troponina'=>$datos["troponina"],
          'sodio'=>$datos["sodio"],
          'calcio'=>$datos["calcio"],
          'calcioI'=>$datos["calcioI"],
          'fosfato'=>$datos["fosfato"],
          'magnesio'=>$datos["magnesio"],
          'asto'=>$datos["asto"],
          'fr'=>$datos["fr"],
          'pcr'=>$datos["pcr"],
          'aglutinaciones'=>$datos["aglutinaciones"],
          'vdrl'=>$datos["vdrl"],
          'hiv'=>$datos["hiv"],
          'toxoplasma'=>$datos["toxoplasma"],
          'toxoplasmalg'=>$datos["toxoplasmalg"],
          'toxoplasmalm'=>$datos["toxoplasmalm"],
          'rubeola'=>$datos["rubeola"],
          'rubeolalg'=>$datos["rubeolalg"],
          'rubeolalm'=>$datos["rubeolalm"],
          'citomegalovirus'=>$datos["citomegalovirus"],
          'citomegaloviruslg'=>$datos["citomegaloviruslg"],
          'citomegaloviruslm'=>$datos["citomegaloviruslm"],
          'herpes1'=>$datos["herpes1"],
          'herpes1lg'=>$datos["herpes1lg"],
          'herpes1lm'=>$datos["herpes1lm"],
          'herpes2'=>$datos["herpes2"],
          'herpes2lg'=>$datos["herpes2lg"],
          'herpes2lm'=>$datos["herpes2lm"],
          'hepatitisA'=>$datos["hepatitisA"],
          'hepatitisAlm'=>$datos["hepatitisAlm"],
          'hepatitisB'=>$datos["hepatitisB"],
          'hepatitisC'=>$datos["hepatitisC"],
          'helicobacter'=>$datos["helicobacter"],
          'mononucleosis'=>$datos["mononucleosis"],
          't3'=>$datos["t3"],
          't3L'=>$datos["t3L"],
          't4T'=>$datos["t4T"],
          't4L'=>$datos["t4L"],
          'tsh'=>$datos["tsh"],
          'testE'=>$datos["testE"],
          'hcg'=>$datos["hcg"],
          'fsh'=>$datos["fsh"],
          'lh'=>$datos["lh"],
          'prolactina'=>$datos["prolactina"],
          'estrogenos'=>$datos["estrogenos"],
          'progesterona'=>$datos["progesterona"],
          'testoterona'=>$datos["testoterona"],
          'insulina'=>$datos["insulina"],
          'ana'=>$datos["ana"],
          'dna'=>$datos["dna"],
          'antifosfolípidos'=>$datos["antifosfolípidos"],
          'antifosfolípidosLG'=>$datos["antifosfolípidosLG"],
          'antifosfolípidosLM'=>$datos["antifosfolípidosLM"],
          'tpo'=>$datos["tpo"],
          'Atiroglobulina'=>$datos["Atiroglobulina"],
          'antiCoagulante'=>$datos["antiCoagulante"],
          'ccp'=>$datos["ccp"],
          'afp'=>$datos["afp"],
          'cea'=>$datos["cea"],
          'psa'=>$datos["psa"],
          'psaL'=>$datos["psaL"],
          'ca'=>$datos["ca"],
          'ca19'=>$datos["ca19"],
          'tiroglobulina'=>$datos["tiroglobulina"],
          'emo'=>$datos["emo"],
          'gram'=>$datos["gram"],
          'proteinuria'=>$datos["proteinuria"],
          'microalbuminuria'=>$datos["microalbuminuria"],
          'clearence'=>$datos["clearence"],
          'TestEO'=>$datos["TestEO"],
          'coproparasitario'=>$datos["coproparasitario"],
          'coproparasitarioS'=>$datos["coproparasitarioS"],
          'sangre'=>$datos["sangre"],
          'polimorfonucleares'=>$datos["polimorfonucleares"],
          'rotavirus'=>$datos["rotavirus"],
          'oxiuros'=>$datos["oxiuros"],
          'ph'=>$datos["ph"],
          'antígeno'=>$datos["antígeno"],
          'pylori'=>$datos["pylori"],
          'muestra'=>$datos["muestra"],
          'muestraE'=>$datos["muestraE"],
          'fresco'=>$datos["fresco"],
          'gramm'=>$datos["gramm"],
          'baar'=>$datos["baar"],
          'koh'=>$datos["koh"],
          'cultivoA'=>$datos["cultivoA"],
          'cultivoH'=>$datos["cultivoH"],
          'papanicolao'=>$datos["papanicolao"],
          'eosinófilos'=>$datos["eosinófilos"],
          'espermograma'=>$datos["espermograma"],
          'cristalografia'=>$datos["cristalografia"],
          'otros'=>$datos["otros"],
          'ottros'=>$datos["ottros"]
          
            
            
            
        ]);
        DB::table('laboratorio')->where('idlaboratorio', $laboratorioR["idlaboratorio"])->update([
            
            'fechaLa'=>$datos["fechaLa"],
            'edad'=>$datos["edad"],
            'solicitado'=>$datos["solicitado"],
            'biometria'=>$datos["biometria"],
            'hematocrito'=>$datos["hematocrito"],
            'contaje'=>$datos["contaje"],
            'velocidad'=>$datos["velocidad"],
            'reticulocitos'=>$datos["reticulocitos"],
            'hematozoario'=>$datos["hematozoario"],
            'grupo'=>$datos["grupo"],
            'coombsD'=>$datos["coombsD"],
            'ComombsI'=>$datos["ComombsI"],
            'tp'=>$datos["tp"],
            'ttp'=>$datos["ttp"],
            'tiempoH'=>$datos["tiempoH"],
            'tiempoC'=>$datos["tiempoC"],
            'glucosa'=>$datos["glucosa"],
            'curva'=>$datos["curva"],
            'curvaTole'=>$datos["curvaTole"], 
            'hemoglobina'=>$datos["hemoglobina"],
            'urea'=>$datos["urea"],
            'bun'=>$datos["bun"],
            'creatinina'=>$datos["creatinina"],
            'acido'=>$datos["acido"],
            'colesterol'=>$datos["colesterol"],
            'trigliceridos'=>$datos["trigliceridos"],
            'hdl'=>$datos["hdl"],
            'lipidos'=>$datos["lipidos"],
            'proteinas'=>$datos["proteinas"],
            'albumina'=>$datos["albumina"],
            'globulina'=>$datos["globulina"],
            'bilirubinas'=>$datos["bilirubinas"],
            'tgo'=>$datos["tgo"],
            'tgp'=>$datos["tgp"],
            'fosfatasa'=>$datos["fosfatasa"],
            'gamma'=>$datos["gamma"],
            'ldh'=>$datos["ldh"],
            'amilasa'=>$datos["amilasa"], 
            'lipasa'=>$datos["lipasa"],
            'cpk'=>$datos["cpk"],
            'ck'=>$datos["ck"],
            'troponina'=>$datos["troponina"],
            'sodio'=>$datos["sodio"],
            'calcio'=>$datos["calcio"],
            'calcioI'=>$datos["calcioI"],
            'fosfato'=>$datos["fosfato"],
            'magnesio'=>$datos["magnesio"],
            'asto'=>$datos["asto"],
            'fr'=>$datos["fr"],
            'pcr'=>$datos["pcr"],
            'aglutinaciones'=>$datos["aglutinaciones"],
            'vdrl'=>$datos["vdrl"],
            'hiv'=>$datos["hiv"],
            'toxoplasma'=>$datos["toxoplasma"],
            'toxoplasmalg'=>$datos["toxoplasmalg"],
            'toxoplasmalm'=>$datos["toxoplasmalm"],
            'rubeola'=>$datos["rubeola"],
            'rubeolalg'=>$datos["rubeolalg"],
            'rubeolalm'=>$datos["rubeolalm"],
            'citomegalovirus'=>$datos["citomegalovirus"],
            'citomegaloviruslg'=>$datos["citomegaloviruslg"],
            'citomegaloviruslm'=>$datos["citomegaloviruslm"],
            'herpes1'=>$datos["herpes1"],
            'herpes1lg'=>$datos["herpes1lg"],
            'herpes1lm'=>$datos["herpes1lm"],
            'herpes2'=>$datos["herpes2"],
            'herpes2lg'=>$datos["herpes2lg"],
            'herpes2lm'=>$datos["herpes2lm"],
            'hepatitisA'=>$datos["hepatitisA"],
            'hepatitisAlm'=>$datos["hepatitisAlm"],
            'hepatitisB'=>$datos["hepatitisB"],
            'hepatitisC'=>$datos["hepatitisC"],
            'helicobacter'=>$datos["helicobacter"],
            'mononucleosis'=>$datos["mononucleosis"],
            't3'=>$datos["t3"],
            't3L'=>$datos["t3L"],
            't4T'=>$datos["t4T"],
            't4L'=>$datos["t4L"],
            'tsh'=>$datos["tsh"],
            'testE'=>$datos["testE"],
            'hcg'=>$datos["hcg"],
            'fsh'=>$datos["fsh"],
            'lh'=>$datos["lh"],
            'prolactina'=>$datos["prolactina"],
            'estrogenos'=>$datos["estrogenos"],
            'progesterona'=>$datos["progesterona"],
            'testoterona'=>$datos["testoterona"],
            'insulina'=>$datos["insulina"],
            'ana'=>$datos["ana"],
            'dna'=>$datos["dna"],
            'antifosfolípidos'=>$datos["antifosfolípidos"],
            'antifosfolípidosLG'=>$datos["antifosfolípidosLG"],
            'antifosfolípidosLM'=>$datos["antifosfolípidosLM"],
            'tpo'=>$datos["tpo"],
            'Atiroglobulina'=>$datos["Atiroglobulina"],
            'antiCoagulante'=>$datos["antiCoagulante"],
            'ccp'=>$datos["ccp"],
            'afp'=>$datos["afp"],
            'cea'=>$datos["cea"],
            'psa'=>$datos["psa"],
            'psaL'=>$datos["psaL"],
            'ca'=>$datos["ca"],
            'ca19'=>$datos["ca19"],
            'tiroglobulina'=>$datos["tiroglobulina"],
            'emo'=>$datos["emo"],
            'gram'=>$datos["gram"],
            'proteinuria'=>$datos["proteinuria"],
            'microalbuminuria'=>$datos["microalbuminuria"],
            'clearence'=>$datos["clearence"],
            'TestEO'=>$datos["TestEO"],
            'coproparasitario'=>$datos["coproparasitario"],
            'coproparasitarioS'=>$datos["coproparasitarioS"],
            'sangre'=>$datos["sangre"],
            'polimorfonucleares'=>$datos["polimorfonucleares"],
            'rotavirus'=>$datos["rotavirus"],
            'oxiuros'=>$datos["oxiuros"],
            'ph'=>$datos["ph"],
            'antígeno'=>$datos["antígeno"],
            'pylori'=>$datos["pylori"],
            'muestra'=>$datos["muestra"],
            'muestraE'=>$datos["muestraE"],
            'fresco'=>$datos["fresco"],
            'gramm'=>$datos["gramm"],
            'baar'=>$datos["baar"],
            'koh'=>$datos["koh"],
            'cultivoA'=>$datos["cultivoA"],
            'cultivoH'=>$datos["cultivoH"],
            'papanicolao'=>$datos["papanicolao"],
            'eosinófilos'=>$datos["eosinófilos"],
            'espermograma'=>$datos["espermograma"],
            'cristalografia'=>$datos["cristalografia"],
            'otros'=>$datos["otros"],
            'ottros'=>$datos["ottros"]
             ]);

       return redirect('Laboratorio')->with('Agregado', 'Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        //
    }
}
