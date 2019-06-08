<?php

namespace App\Http\Controllers;

use App\Services\PhotoServiceInterface;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    // todo 02: コントローラーの Constructor に DI を追加
    protected $service;

    public function __construct(PhotoServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
        return view('photo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
        return view('photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // todo 04: コントローラーにフォームリクエストを設定
    public function store(StorePhotoPost $request)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
        return view('photo.store');
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
        return view('photo.show');
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
        return view('photo.edit');
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
        return view('photo.update');
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
        return view('photo.destroy');
    }
}
