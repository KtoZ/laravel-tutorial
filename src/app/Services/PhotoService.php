<?php

namespace App\Services;

use App\Models\Photo;

// todo 02: Service クラスを追加
class PhotoService implements PhotoServiceInterface
{
    // todo 05: Eloquent を使用するメソッドを実装
    public function findAll()
    {
        return Photo::all();
    }

    public function findById($id)
    {
        return Photo::find($id);
    }

    public function insert($title, $body)
    {
        $photo = new Photo;
        $photo->title = $title;
        $photo->body = $body;
        $photo->save();

        return $photo;
    }

    public function update($id, $title, $body)
    {
        $photo = Photo::find($id);
        $photo->title = $title;
        $photo->body = $body;
        $photo->save();

        return $photo;
    }

    public function delete($id)
    {
        return Photo::destroy($id);
    }
}