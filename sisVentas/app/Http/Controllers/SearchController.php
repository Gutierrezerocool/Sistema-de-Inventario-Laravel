<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    public function index(){
    	return view('search.search');
    	
    }

    public function search(Request $request){

    	if ($request->ajax())
    	{
    		$output="";
    		$categorias=DB::table('categoria')->where('nombre','LIKE','%'.$request->search.'%')->get();
    		

    		if($categorias)
    		{
    			foreach ($categorias as $key => $cat) {
    				$output.='<tr>'.
    						 '<td>'.$cat->idcategoria.'</td>'.
    						 '<td>'.$cat->nombre.'</td>'.
    						 '<td>'.$cat->descripcion.'</td>'.
    						 '</tr>';
    			}
    				return Response($output);

    		}	
    	}
    }
}
