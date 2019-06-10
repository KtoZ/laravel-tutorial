# laravel-tutorial

[PHP フレームワーク Laravel Web アプリケーション開発バージョン 5.5 LTS 対応](https://www.socym.co.jp/book/1184) と
[Laravel Document](https://readouble.com/laravel/) をまとめた Laravel のチュートリアルです。

docs ディレクトリを進めていくことで Laravel を体験的に学べます。新しい Laravel プロジェクトを作成したあとに、 src ディレクトリに記載してある TODO コメントを参考にコーディングしていきます。

## Folder

- docs: チュートリアルの文書
- src: 完成版のコード
- book: 参考書籍のサブモジュール

## Prerequisites

- xampp (7.3.6) がインストールされていること (7.3.6 ではなくても極端に新しかったり古くなければ大丈夫だと思います。)
- Composer がインストールされていること

## Tutorial

1. 新規 Laravel プロジェクトを作成します。

```shell
composer create-project --prefer-dist laravel/laravel . "5.5.*"
```

2. Laravel IDE Helper を追加します。

```shell
composer require --dev barryvdh/laravel-ide-helper
composer require --dev doctrine/dbal

php artisan ide-helper:generate
```

3. AppServiceProvider を開いて boot を書き換えます。

```php
public function boot()
{
    \Illuminate\Support\Facades\Schema::defaultStringLength(191);
}
```

x. docs を進めていきます。

## Note

### 完成版のコードを動かす場合の手順

1. src に移動

```shell
cd src
```

2. env とキーを作成

```shell
cp .env.example .env # use windows: copy command
php artisan key:generate
```

3. env の設定 (DB など)

4. マイグレーションを実行

```shell
php artisan migrate
php artisan db:seed
```
