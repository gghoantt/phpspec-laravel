<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Requests;
use App\Http\Controllers;
use App\PhpSpec\Model\Category;

class CategoryController extends Controllers
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'        => 'required|string|unique:categories,name',
            'description' => 'string'
        ]);

        if ($validator->fails()) {
            return response()->json(arrayView('errors/validation', [
                'errors' => $validator->errors()
            ]), 400);
        }

        $category = Category::create($request->all());

        return response()->json(arrayView('category/read', [
            'category' => $category
        ]), 201);
    }
}
