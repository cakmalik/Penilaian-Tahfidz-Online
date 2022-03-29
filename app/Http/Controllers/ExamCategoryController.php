<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExamCategoryRequest;
use App\Http\Requests\UpdateExamCategoryRequest;
use App\Models\ExamCategory;

class ExamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = ExamCategory::all();
        return view('exam_categories.index', compact('collection'));
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
     * @param  \App\Http\Requests\StoreExamCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExamCategory $examCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamCategory $examCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamCategoryRequest  $request
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamCategoryRequest $request, ExamCategory $examCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamCategory  $examCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamCategory $examCategory)
    {
        //
    }
}
