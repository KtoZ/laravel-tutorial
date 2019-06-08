<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    // todo 02: コントローラーの Constructor に DI を追加

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // todo 04: コントローラーにフォームリクエストを設定
    public function store(Request $request)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
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
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
    }
}
