<?php

namespace App\Services;

// todo 02: Service インターフェースを追加
interface PhotoServiceInterface
{
    // todo 05: Eloquent を使用するメソッドを追加
    public function findAll();

    public function findById($id);

    public function insert($title, $body);

    public function update($id, $title, $body);

    public function delete($id);
}