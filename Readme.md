# 目標
dockerを使用して二段階認証のアプリケーションサイトを作成する
http://localhost:8080/

# dockerの起動方法

## 1. コンテナの起動

```shell
$ docker-compose up -d --build
```

## 2. コンテナの停止

```shell
$ docker-compose down
```


##　履歴

2025/03/01 PHP導入
2025/09/06 認証機能の確認(TOTPのQRコード画面の表示まで学習)

次回　ログイン画面の作成


## 参考資料
https://blog.apar.jp/program/12741/
