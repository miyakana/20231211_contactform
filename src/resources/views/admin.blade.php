<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@900&family=Playfair+Display&display=swap"
        rel="stylesheet">
</head>

<body>
    @if (Auth::check())
        <header class="header">
            <div class="header__inner">
                <h1 class="header__logo">FashionablyLate</h1>
                <div class="header__btn">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header__btn--right">logout</button>
                    </form>
                    <!-- 同じファイル内にあるHTMLファイルにリンクするサンプル 同じフォルダ内にあるHTMLファイルにリンクする場合は、リンク先のパスにファイル名を記述すればリンクできます-->
                </div>
            </div>
        </header>
        <main>
            <div class="admin-form__content">
                <div class="admin-form__heading">
                    <h2>Admin</h2>
                </div>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-content">
                        <div class="form-serchbox">
                            <!-- どこを検索するかのform actionは未記載のちに行う -->
                            <input class="form-input__serch" type="search" name="search" placeholder="名前やメールアドレスを入力してください">
                            <button class="form-button"><img src="serch-icon.png" width="20px" height="20px"></button>
                        </div>
                        <div class="form__input--item">
                            <select class="select-gender" name="gender">
                                <option class="select-gender__item" value="" disabled selected style="display:none;">性別</option>
                                <option class="select-gender__item" value="male">男性</option>
                                <option class="select-gender__item" value="female">女性</option>
                                <option class="select-gender__item" value="other">その他</option>
                            </select>
                        </div>
                        <div class="form__input--item">
                            <select class="select-kind" name="kind">
                                <option class="select-kind__item" value="" disabled selected style="display:none;">お問い合わせの種類</option>
                            </select>
                        </div>
                        <div class="form__input--item">
                            <input class="form-input__date" type="text" onfocus="this.type='date'" onblur="this.type='text'" placeholder="日付を選択してください" value="">
                        </div>
                    </div>
                </div>
            </form>
            <div class="admin-table"></div>
                <table class="admin-table__inner">
                    <tr class="admin-table__row">
                        <th class="admin-table__item">お名前</th>
                        <th class="admin-table__item">性別</th>
                        <th class="admin-table__item">メールアドレス</th>
                        <th class="admin-table__item">お問い合わせの種類</th>
                        <th class="admin-table__item">aketai</th>
                    </tr>
                </table>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">リセット</button>
                </div>
        </main>
    @endif
</body>

</html>
