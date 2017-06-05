<?php

namespace sisVentas\Http\Controllers;

use Illuminate\Http\Request;

use sisVentas\Http\Requests;
use sisVentas\Http\Controllers\Controller;
use sisVentas\Categoria; //Para el modelo
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\CategoriaFormRequest;
use DB;


class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listing(){
        $categorias = Categoria::all();

        return response()->json(
                $categorias->toArray()
            );
    }

    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        return view('almacen.categoria.index');

        if ($request->ajax())
        {
            $output="";
            $categorias=DB::table('categoria')->where('nombre','LIKE','%'.$request->search.'%')
            ->where('condicion','=','1')
            ->orderBy('idcategoria','desc')
            ->get();
            

            if($categorias)
            {
                foreach ($categorias as $key => $cat) {
                    $output.='<tr>'.
                             '<td>'.$cat->idcategoria.'</td>'.
                             '<td>'.$cat->nombre.'</td>'.
                             '<td>'.$cat->descripcion.'</td>'.
                             '<td> 

                            <a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a></td>'.
                             '</tr>';


                             //<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
                }
                    return Response($output);

            }else{
                return Response()->json(['no'=>'Not Found']);
            }  
        }

        //$categorias = Categoria::paginate(7);
        //return view('almacen.categoria.index',compact('categorias'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("almacen.categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaFormRequest $request)
    {

        if($request->ajax()){
            Categoria::create($request->all());
            return response()->json([
                    "mensaje" => "creado"
                ]);
            

        }


        /*$categoria=new Categoria;
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->condicion='1';
        $categoria->save();
        return Redirect::to('almacen/categoria');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("almacen.categoria.show",["categoria"=>Categoria::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("almacen.categoria.edit",["categoria"=>Categoria::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriaFormRequest $request, $id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->nombre=$request->get('nombre');
        $categoria->descripcion=$request->get('descripcion');
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);
        $categoria->condicion='0';
        $categoria->update();
        return Redirect::to('almacen/categoria');
    }
}
