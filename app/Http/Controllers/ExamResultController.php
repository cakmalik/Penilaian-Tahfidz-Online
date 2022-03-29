<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExamResultRequest;
use App\Http\Requests\UpdateExamResultRequest;
use App\Models\ExamResult;

class ExamResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = ExamResult::all();
        return view('exam_results.index', compact('collection'));
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
     * @param  \App\Http\Requests\StoreExamResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function show(ExamResult $examResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function edit(ExamResult $examResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamResultRequest  $request
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamResultRequest $request, ExamResult $examResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExamResult  $examResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExamResult $examResult)
    {
        //
    }
}
