<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $datas = Category::all();
        $pageTile = "Danh sách thể loại";
        return view('category.index', [
            'datas' => $datas,
            'pageTitle' => $pageTile

        ]);
    }
    public function create()
    {
        return view('category.category_home');
    }
    public function store(Request $request)
    {
        $data = new category();
        $data->name = request()->name;
        $data->save();
        return redirect()->route('category.index');
    }
    public function edit(string $id)
    {
        $data = Category::find($id);
        $pageTile = 'Sửa thể loại';
        return view('category.category_edit', [
            'data' => $data,
            'pageTile' => $pageTile

        ]);
    }
    public function upadte(string $id, Request $request)
    {
        $category = Category::findOrFail($id);
        $category->name = request()->name;
        $category->save();
        return back()->with('success', 'Chỉnh sửa thành công');
    }
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
