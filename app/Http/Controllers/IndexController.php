<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class IndexController extends Controller
{
	public function indexView()
	{
		/* $results = DB::table("productos")
			->join('categorias', 'productos.id_categoria', '=', 'categorias.id')
			->where("categorias.id_categoria_padre", "=", 2)
			->pluck('productos.id')
			->toArray();

		return view('index', [
			'notebooks' => Producto::whereIn("id", $results)->take(8)->get()
		]); */

		$category = Categoria::where('nombre', 'Notebook')->first();

		if ($category != null) {
			$subcategory = $category->hijas;
			$all = array($category->id);
			foreach ($subcategory as $sub) {
				array_push($all, $sub->id);
			}
			$notebooks = Producto::whereIn('id_categoria', $all)->inRandomOrder()->take(8)->get();
			return view('index', compact('notebooks'));
		} else {
			$notebooks = [];
			return view('index', compact('notebooks'));
		}
	}

	public function productosVista(Request $req)
	{
		if (isset($req['search'])) {
			$productos = Producto::where('nombre', 'like', '%' . $req['search'] . '%')->paginate(9);
		} else {
			$productos = Producto::paginate(9);
		}
		return view('productos', compact('productos'));
	}

	public function productosPorCategoria($nombre)
	{
		$nombre = str_replace("+", " ", $nombre);
		$subcategoria = Categoria::where('nombre', $nombre)->get()->first();
		if ($subcategoria->id_categoria_padre == null) {
			$category = Categoria::where('nombre', $subcategoria->nombre)->first();
			$subcategory = $category->hijas;
			$all = array($category->id);
			foreach ($subcategory as $sub) {
				array_push($all, $sub->id);
			}
			$productos = Producto::whereIn('id_categoria', $all)->paginate(9);
		} else {
			$productos = Producto::Where('id_categoria', "=", $subcategoria->id)->paginate(9);
		}

		return view('productos', compact('productos'));
	}

	public function productoDetail($nombre)
	{
		$nombre = str_replace("+", " ", $nombre);
		$producto = Producto::where('nombre', $nombre)->with('fotos')->first();

		$productoCategoria = $producto->categoria->padre()->first()->hijas()->get();
		$id = [];
		foreach ($productoCategoria as $categoria) {
			array_push($id, $categoria->id);
		}
		$productosRelacionados = Producto::whereIn('id_categoria', $id)->inRandomOrder()->get();

		return view('detalle', compact('producto', 'productosRelacionados'));
	}

	public function contact()
	{
		return view('contact');
	}

	public function mensaje(ContactRequest $request)
	{
		Contact::create([
			'nombre' => $request['nombre'],
			'apellido' => $request['apellido'],
			'celular' => $request['celular'],
			'telefono' => $request['telefono'],
			'email' => $request['email'],
			'mensaje' => $request['mensaje']
		]);

		return back()->with('')->with('success', 'Tu mensaje fue enviado correctamente. Tendras una respuesta a la brevedad, Gracias.');
	}

	public function faqView()
	{
		return view("faq");
	}
}
