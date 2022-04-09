<?php

namespace App\Http\Controllers;

use App\Models\ExamResult;
use App\Models\ExamCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreExamCategoryRequest;
use App\Http\Requests\UpdateExamCategoryRequest;

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

    public function categoryWhereInstitution()
    {
        $ins = Auth::user()->institution_id;
        return ExamCategory::where('institution_id', $ins)->get();
    }

    public function store(StoreExamCategoryRequest $request)
    {
        $asli = $request->surah;
        $surahExplode = explode(',', $asli);
        $surah = $surahExplode[0];
        $surah_name = $surahExplode[1];

        $data = [
            'grade_id' => $request->grade_id,
            'name' => $request->name,
            'desc' => $request->desc,
            'juz' => $request->juz,
            'surah' => $surah,
            'surah_name' => $surah_name,
            'start_ayah' => $request->start_ayah,
            'end_ayah' => $request->end_ayah,
        ];

        ExamCategory::create($data);
        return back();
    }

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
