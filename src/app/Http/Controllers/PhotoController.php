<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoPost;
use App\Services\PhotoServiceInterface;

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
//        return view('photo.index');

        // todo 06: View - Controller - Service の結合
        $photos = $this->service->findAll();
        return view('photo.index', ['photos' => $photos]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    // todo 04: コントローラーにフォームリクエストを設定
    public function store(PhotoPost $request)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
//        return view('photo.store');

        // todo 06: View - Controller - Service の結合
        $this->service->insert($request->title, $request->body);
        return view('photo.store');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
//        return view('photo.show');

        // todo 06: View - Controller - Service の結合
        $photo = $this->service->findById($id);
        return view('photo.show', ['photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
//        return view('photo.edit');

        // todo 06: View - Controller - Service の結合
        $photo = $this->service->findById($id);
        return view('photo.edit', ['photo' => $photo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    // todo 04: コントローラーにフォームリクエストを設定
    public function update(PhotoPost $request, $id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
//        return view('photo.update');

        // todo 06: View - Controller - Service の結合
        $this->service->update($id, $request->title, $request->body);
        return view('photo.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // todo 04: コントローラーのメソッドに View レスポンスを実装
        return view('photo.destroy');

        // todo 06: View - Controller - Service の結合
        $photo = $this->service->delete($id);
        return view('photo.destroy');
    }
}
