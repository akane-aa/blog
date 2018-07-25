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

laravel_30＿参照

ミドルウェアとは
リクエストに対するフィルタリングを行う
https://www.ritolab.com/entry/69

laravel5.1では、ミドルウェアは以下のディレクトリに格納されている
app/Http/Middleware/
├── Authenticate.php
├── RedirectIfAuthenticated.php
└── VerifyCsrfToken.php

laravel5.6では、以下のようになる
app/HTTP/Middleware/
├── EncryptCookies.php
├── RedirectIfAuthenticated.php
├── TrimStrings.php
├── TrustProxies.php
└── VerifyCsrfToken.php

Authenticate.phpがディレクトリに存在しない

Authenticate.phpは以下に格納されている
blog/blog/vendor/laravel/framework/src/Illuminate/Auth/Middleware/Authenticate.php
