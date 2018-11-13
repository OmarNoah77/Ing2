<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\admisiones;
use Excel;

class importadmisionesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

 		return view('admin.subirexceladmisiones.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function importexceladmisiones(Request $request)
    {

        if($request->hasFile('import_file')){
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function($reader) {})->get();

            if(!empty($data) && $data->count()){

                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)){
                        foreach ($value as $v) {        
                            $insert[] = 
                            [
                                'tipo_documentoentidad' => $v['tipo_documentoentidad'],
                                'numerodocumentoentidad' => $v['numerodocumentoentidad'],
                                'tipodocumentocliente' => $v['tipodocumentocliente'],
                                'numerodocumentocleinte' => $v['numerodocumentocleinte'],
                                'primerapellido' => $v['primerapellido'],
                                'segundoapellido' => $v['segundoapellido'],
								'primernombre' => $v['primernombre'],
                                'segundonombre' => $v['segundonombre'],
                                'fechacita' => $v['fechacita'],
                                'horacita' => $v['horacita'],
                                'tiposervicio' => $v['tiposervicio'],
                                'examen' => $v['examen'],
                                'enfasis' => $v['enfasis'],
                                'profesional' => $v['profesional'],
                                'fechaadmision' => $v['fechaadmision'],
                                'estadoproceso' => $v['estadoproceso']
                            ];
                        }
                    }
                }

                
                if(!empty($insert)){
                    admisiones::insert($insert);
                    return back()->with('success','Insert Record successfully.');
                }

            }

        }

        return back()->with('error','Please Check your file, Something is wrong there.');
    }

}
