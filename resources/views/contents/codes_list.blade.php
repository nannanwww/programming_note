{{-- 共通ビュー: codes_list.blade.php --}}
@if($items->isNotEmpty())
    <ul>
        @foreach ($items as $item)

        <!-- ここにテーブル -->
            <li>{{ $item->main_code }}</li>
            <!-- 必要に応じて他の情報も表示 -->
        @endforeach
    </ul>
@endif