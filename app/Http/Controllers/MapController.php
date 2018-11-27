<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class MapController extends Controller
{
    public function show(Request $request)
    {
		header('Content-Type: application/json');
		$lang = \Config::get('app.locale'); 
		$respuesta = new \stdClass;
		$code=strtolower($request->code);
		$nombre=$code."_".$lang;
		$respuesta->nombre=$nombre;
		$nomcom="data/".$lang."/".$nombre.".json";
		$respuesta->nombrecompleto=$nomcom;
		$data = Storage::disk('local')->get($nomcom);
		$respuesta->data=$data;
		$products = json_decode($data, true);
		function esimg($needle, $haystack)
		{
		    return strpos($haystack, $needle) !== false;
		}
		$pais=$products['pais']['title'];
		$data1=$products['pais']['data']['data'];
		$respuesta->titulo=$pais;
		$respuesta->contenido='<table class="table table-sm table-striped" style="font:12px; width:100%;">';
		 $respuesta->contenido.='<tbody>';
		 //return \Response::json($nomcom,200);
		foreach ($data1 as $clave=>$valor){
		    $respuesta->contenido.= '<tr>';
		    $respuesta->contenido.= '<td>'.$clave.'</td>';
		    $respuesta->contenido.= '<td>'.$valor.'</td>';
		    $respuesta->contenido.= '</tr>';
		}
		$respuesta->contenido.= '</tbody>';
		$respuesta->contenido.= '</table>';
		 $data2=$products['pais']['comm']['data'];
		$respuesta->contenido.= '<table class="table table-sm table-striped" style="font:12px; width:100%;">';
		$respuesta->contenido.= '<thead><tr><th colspan="2">'.$products['pais']['comm']['title'].'</th></tr></thead>';
		$respuesta->contenido.= '<tbody>';
		foreach ($data2 as $clave=>$valor){
		    
		    $respuesta->contenido.= '<tr>';
		    $respuesta->contenido.= '<td>'.$clave.'</td>';
		    if (esimg('.jpg', $valor)) {
		        $respuesta->contenido.= '<td><img class="imagen-tabla" src="'.$valor.'" ></td>';
		    }else{
		    $respuesta->contenido.= '<td>'.$valor.'</td>';
		    }
		    $respuesta->contenido.= '</tr>';
		}
		$respuesta->contenido.= '</tbody>';
		$respuesta->contenido.= '</table>';
		 $data3=$products['pais']['safety']['data'];
		$respuesta->contenido.= '<table class="table table-sm table-striped" style="font:12px; width:100%;">';
		$respuesta->contenido.= '<thead><tr><th colspan="2">'.$products['pais']['safety']['title'].'</th></tr></thead>';
		$respuesta->contenido.= '<tbody>';
		foreach ($data3 as $clave=>$valor){
		    $respuesta->contenido.= '<tr>';
		    $respuesta->contenido.= '<td>'.$clave.'</td>';
		    if (esimg('.jpg', $valor)) {
		        $respuesta->contenido.= '<td><img class="imagen-tabla" src="'.$valor.'" ></td>';
		    }else{
		        $respuesta->contenido.= '<td>'.$valor.'</td>';
		    }
		    $respuesta->contenido.= '</tr>';
		    $respuesta->contenido.= '</tr>';
		}
		$respuesta->contenido.= '</tbody>';
		$respuesta->contenido.= '</table>';
		
		echo json_encode($respuesta, JSON_FORCE_OBJECT);
		//print_r($data1); 
    } 
}
