<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div id="app">
        <!-- Sidebar -->
        <sidebar>
            <nav class="side-nav">
                <div class="side-title">
                    <a href="">すべて</a>
                </div>
                <ul class="side-ul">
                    <li id="frameworks"><a href="#" data-url="{{ route('top', ['category' => 'frameworks']) }}" data-category="frameworks">Frameworks</a></li>
                    <li id="languages"><a href="#" data-url="{{ route('top', ['category' => 'languages']) }}" data-category="languages">Languages</a></li>
                </ul>
            </nav>
        </sidebar>

        <!-- Main Content -->
        <main class="main">
            @yield('content')
        </main>
    </div>
    <script>
$(document).on('click', '.side-ul li a', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    console.log("Clicked URL: ", url);

    // メインコンテンツ領域にコンテンツを非同期で読み込む
    $('.main').load(url + ' #content', function(response, status, xhr) {
        if (status == "error") {
            console.error('Error loading page: ', xhr.status, xhr.statusText);
        }
    });
});

$('#frameworks a, #languages a').on('click', function(e) {
    e.preventDefault();
    var url = $(this).data('url');
    var clickedElement = $(this); // `this`をクリックされた要素として保存
    var parentElement = clickedElement.closest('li');
    var category = clickedElement.data('category'); // カテゴリを取得
    console.log("Clicked URL: ", url); // 確認用ログを出力

    // 既に展開されているリストがあればそれをトグル
    var existingList = parentElement.find('ul');
    if (existingList.length > 0) {
        existingList.toggle();
        return; // 既にリストがある場合は再読込を避ける
    }

    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var itemsHtml = '<ul>';
            $.each(data.items, function(index, item) {
                // リンク付きでリストアイテムを追加
                itemsHtml += '<li><a href="/' + category + '/' + encodeURIComponent(item.name) + '" data-category="' + category + '">' + item.name + '</a></li>';
            });
            itemsHtml += '</ul>';

            parentElement.append(itemsHtml);
            parentElement.data('is-expanded', true); // 状態を更新
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error loading data:', textStatus, errorThrown);
        }
    });
});
    </script>
</body>

</html>