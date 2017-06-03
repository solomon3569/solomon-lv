<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();    
    }

    public function list()
    {
        return view('product-list');    
    }

    public function add_cart(Request $request, $id)
    {
        $prev = $request->session()->get('cart');
        $arr = [];

        if ($prev !=null) {
            $arr = json_decode($prev);
        }


        $arr[] = $id;
        $request->session()->put('cart', json_encode($arr));

        return [
            'status' => true
        ];
    }

    public function det_list($task_id, Request $request)
    {
        // $cart = array();
        // if (isset($cart[1])) {
        //     $cart[1]++;
        // } else {
        //     $cart[1] = 1;            
        // }
        // dd($cart);

        $arrCart = json_decode($request->session()->get('cart'));
        // $newCart = array();
        // dd($arrCart);

        unset($arrCart[array_search($task_id, $arrCart)]);
        
        foreach ($arrCart as $cart) {

            $newCart[] = $cart;

        }

        $request->session()->put('cart', json_encode($newCart));
        
        echo "ok";
        //$task = Task::destroy($task_id);

        //return Response::json($task);
        // //像這樣   這樣懂我在說什麼嗎?
    }


    public function list_cart(Request $request){
        $id_list = json_decode($request->session()->get('cart'));
        $prod_list = [];
        foreach ($id_list as $id) {
            $prod_list[] = Product::find($id);
        }
        return $prod_list;
    }

    public function cart(){
        return view('cart');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete($id);
        return redirect('/cart');
    }
}
