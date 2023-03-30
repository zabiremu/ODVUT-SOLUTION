<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    //create prodcut
    public function create(Request $request)
    {
        // form validation
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $storeProduct = new Product();
        $storeProduct->name = $request->name;
        $storeProduct->price = $request->price;
        $storeProduct->stock = $request->stock;
        $storeProduct->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Product created successfully',
        ]);
    }

    //view product
    public function view()
    {
        $product = Product::latest()->get();
        return response()->json([
            'product' => $product,
            'status' => 'success',
        ]);
    }

    //edit product
    public function edit($id)
    {
        $product = Product::find($id);
        return response()->json([
            'product' => $product,
            'status' => 'success',
        ]);
    }

    //update product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'stock' => 'required',
        ]);

        $updateProduct = Product::find($id);
        $updateProduct->name = $request->name;
        $updateProduct->price = $request->price;
        $updateProduct->stock = $request->stock;
        $updateProduct->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Product updated successfully',
        ]);
    }

    //soft delete
    public function softDelete($id)
    {
        $productData = Product::find($id);
        $productData->delete();
        $productData->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Product successfully moved in trashed folder',
        ]);
    }

     //soft delete items
     public function softDeleteItems()
     {
         $productData = Product::onlyTrashed()->get();
         return response()->json([
             'status' => 'success',
             'data' => $productData,
         ]);
     }
    

    //restore data
    public function productDataRestore($id)
    {
        $productData = Product::onlyTrashed()->where('id',$id)->restore();
        return response()->json([
            'status' => 'success',
            'message' => 'Product successfully restored',
        ]);
    }

    //delete data
    public function productDataDelete($id)
    {
        $productData = Product::where('id',$id)->forceDelete();
        return response()->json([
            'status' => 'success',
            'message' => 'Product successfully deleted',
        ]);
    }

    // search product
    public function searchProduct($name)
    {
        $product = Product::where('name', 'LIKE', '%' . $name . '%')->get();
        return response()->json([
            'searchProduct' => $product,
            'status' => 'success',
        ]);
    }

    // pagination
    public function paginateProduct(Request $request)
    {
        if ($request->perPage) {
            $perPage = $request->perPage;
        } else {
            $perPage = 2;
        }
        if ($request->paginate) {
            $product = Product::latest()->paginate($perPage);
        }
        return response()->json([
            'product' => $product,
            'status' => 'success',
        ]);
    }
}
