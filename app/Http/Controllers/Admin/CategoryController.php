<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(Category  $categoryModel)
    {
        $this->categories = $categoryModel;
    }
    public function index()
    {
        return view('admin.categories.index');
    }
    public function fetch()
    {
        $categories =  $this->categories::select('id', 'name', 'category_slug')->orderBy('id', 'asc')->get();
        return response()->json([
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required', 'unique:categories,name'],
            'category_slug' => ['required']

        ]);
        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {
            $validated_data = $request->validate([
                'name' => ['required'],
                'category_slug' => ['required']
            ]);
            $this->categories::create($validated_data);
            return response()->json([
                'status' => 200,
                'messages' => 'Create categories successfully'
            ]);
        }
    }

    public function edit($id)
    {
        $categories =  $this->categories->findOrFail($id);
        if ($categories) {
            return response()->json([
                'status' => 200,
                'categories' => $categories
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validated_data = Validator::make($request->all(), [
            'name' => ['required'],
            'category_slug' => ['required']
        ]);

        if ($validated_data->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validated_data->errors()
            ]);
        } else {

            $categories =  $this->categories->findOrFail($id);
            if ($categories) {
                $validated_data = $request->validate([
                    'name' => ['required'],
                    'category_slug' => ['required']
                ]);
                $categories->update($validated_data);
                return response()->json([
                    'status' => 200,
                    'messages' => 'Update categories successfully'
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'errors' => 'Not Found'
                ]);
            }
        }
    }

    public function delete($id)
    {
        $categories =  $this->categories->findOrFail($id);
        if ($categories) {
            $categories->delete();
            return response()->json([
                'status' => 200,
                'messages' => 'Delete categories successfully'
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'errors' => 'Not Found'
            ]);
        }
    }
}
