# blog

laravel_28_参照
Authcontrollerはlaravel5.3から以下の４つのコントローラーに分けられる。

LoginController.php
RegisterController.php
ForgotPasswordController.php
ResetPasswordController.php

Laravel 5.5 の認証機能とそのカスタマイズ
https://qiita.com/naga3/items/4f3defde59b31a1a797e
このqiitaの「追加されたルート」に記載されている各コントローラーのメソッドが
ララ帳には記載されていないので覚えておく

laravel_29_参照

パスワードリセットメールのカスタマイズについては以下の記事を参照した。
ララ帳には記載されていないが,laravel5.6では通知(Notification)クラスの作成と
通知クラスの切り替えを行う必要がある。
https://www.ritolab.com/entry/52#create_mail_template
