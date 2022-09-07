## Docker + Laravel8 環境構築手順

### バージョン

```bash

mac Big Sur ver(11.6.7)
PHP 7.4.30
Laravel Framework 8.83.20
composer 2.3.10
```

### ディレクトリ作成 ＆ 対象の場所に移動

```bash
cd Desktop            //デスクトップに移動
mkdir laravel_project //ディレクトリ作成
cd laravel_project    //ディレクトリに移動 
```

### Dockerファイル作成 & 設定

「docker-compose.yml」 と 「Dockerfile」というファイルを作成

Dockerfile

```bash
FROM php:7.4-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y zip unzip

RUN docker-php-ext-install pdo pdo_mysql
```

docker-compose.yml (コピペ推奨）

```bash
version: '3.9'

services:
  web:
    build: .
    volumes:
      - ./src:/var/www/html
    ports:
      - '8000:8000' #使用時ポート変更すること
  db:
    platform: linux/x86_64
    image: mysql:5.7
    ports:
      - '3306:3306'
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: example
      MYSQL_DATABASE: laravel_blog_db
    volumes:
      - ./db:/var/lib/mysql
```

### Docker上でコンテナ立ち上げ

```bash
cd laravel_project

docker-compose up -d --build

docker ps
```

起動してプロセスが done になっていればOK

```bash
Creating laravel_crud_app_php_1   ... done
Creating laravel_crud_app_mysql_1 ... done
```

### Laravel インストール(8.x)

```bash
#docker-compose exec サービス名 composer create-project --prefer-dist "laravel/laravel=8.*" 保存先
docker-compose exec web composer create-project --prefer-dist "laravel/laravel=8.*" .

#インストールし直す場合 src db フォルダを削除する事
```

### laravel-mix 反映
css or sass を使用する際に必要

```
$ npm run dev
```

### サーバー立ち上げ

```bash
#docker-compose exec サービス php artisan serve --host=0.0.0.0 --port=8000
docker-compose exec web php artisan serve --host=0.0.0.0 --port=8000
```

### ****タイムゾーンを設定する****

```bash
config/app.php

'timezone' => 'Asia/Tokyo',
```

### DB設定

DockerFileの環境設定と同じにする

ない場合dbコンテナ内などで探す。

```bash
# .env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306     #mysql デフォルト値
DB_DATABASE=laravel_blog_db
DB_USERNAME=root
DB_PASSWORD=hoge
```

マイグレーション

```bash
docker-compose exec web php artisan migrate
```

### 初回コミット(必要なら)

リモートリポジトリを登録しておいてください

```bash
echo "# docker-laravel-blog-app" >> README.md

git init

git add README.md

git commit -m "first commit"

git remote add origin git@github.com:tsuyoshi2123/test-blog-app.git #リモート登録url添付

git branch -M main
```