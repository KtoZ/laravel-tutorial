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

新規 Laravel プロジェクトを作成します。 `cd {NEW_PROJECT}` の代わりに、作成したプロジェクトを PHP Storm で開き、 Terminal で作業することも可能です。

```shell
# {NEW_PROJECT} は好きなプロジェクトの名前に書き換えてください。
composer create-project --prefer-dist laravel/laravel {NEW_PROJECT} "5.5.*"
cd {NEW_PROJECT}
```

Laravel IDE Helper を追加します。

```shell
composer require --dev barryvdh/laravel-ide-helper
composer require --dev doctrine/dbal

php artisan ide-helper:generate
```

AppServiceProvider を開いて boot に処理を記載します。

```php
public function boot()
{
    \Illuminate\Support\Facades\Schema::defaultStringLength(191);
}
```

docs を開いて進めていきます。

## Note

### 完成版のコードを動かす場合の手順

```shell
cd src
```

```shell
cp .env.example .env # use windows: copy command
# Please set env. (Database etc...)

php artisan key:generate
```

```shell
php artisan migrate
php artisan db:seed
```
