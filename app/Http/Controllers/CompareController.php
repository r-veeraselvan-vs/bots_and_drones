<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\SubCategory;

class CompareController extends Controller
{
    public function home()
    {
        $subcategories = Subcategory::where('category_id', 1)->get();
        $consumer = Products::with('images', 'specifications', 'packages')
            ->where('category_id', '1')
            ->where('subcategory_id', '1')
            ->where('visitors_count', '>=', 1)
            ->where('status', 'Y')
            ->orderBy('visitors_count', 'desc')
            ->orderby('id', 'desc')
            ->take(3);

        $commercial = Products::with('images', 'specifications', 'packages')
            ->where('category_id', '1')
            ->where('subcategory_id', '2')
            ->where('visitors_count', '>=', 1)
            ->where('status', 'Y')
            ->orderBy('visitors_count', 'desc')
            ->orderby('id', 'desc')
            ->take(3);

        $product = $consumer->union($commercial)->get();

        return view('compare.home', compact('subcategories', 'product'));
    }

    public function getApplications(Request $request) {
        $subcategory_id = $request->input('subcategory_id');

        // Fetch distinct applications based on the provided subcategory_id
        $applications = Products::where('subcategory_id', $subcategory_id)
            ->select('use_type')
            ->distinct()
            ->get();

        return response()->json($applications);
    }


    public function getProducts(Request $request) {
        $subcategory_id = $request->input('subcategory_id');
        $use_type = $request->input('use_type');

        // Fetch products based on the provided subcategory_id and application_id
        $products = Products::with('images', 'specifications', 'packages')
            ->where('subcategory_id', $subcategory_id)
            ->where('use_type', 'like', '%' . $use_type . '%')
            ->where('visitors_count', '>=', 1)
            ->where('status', 'Y')
            ->orderBy('visitors_count', 'desc')
            ->orderBy('id', 'desc')
            ->take(10) // Adjust the number of products as needed
            ->get();

        return response()->json($products);
    }

    public function index(Request $request)
    {
        // Retrieve details for the selected products
        $selectedProductIds = $request->input('ids', '');

        // Explode the string into an array of IDs
        $productIdsArray = explode(',', $selectedProductIds);

        // Remove empty values from the array
        $productIdsArray = array_filter($productIdsArray);

        $compareProducts = [];

        foreach ($productIdsArray as $productId) {
            $product = Products::find($productId);

            // Check if the product is found before adding to the comparison
            if ($product) {
                $compareProducts[] = $product;
            } else {
                // Log the error or take appropriate action
                dd("Product not found for ID: $productId");
            }
        }

        // Fetch the details of the selected products (if needed)
        $selectedProducts = Products::whereIn('id', $productIdsArray)->get();

        return view('compare.index', compact('selectedProducts', 'compareProducts', 'productIdsArray'));
    }

}

