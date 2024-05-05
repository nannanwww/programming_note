
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
                itemsHtml += '<li><a href="/' + category + '/' + encodeURIComponent(item.name) + '">' + item.name + '</a></li>';
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
