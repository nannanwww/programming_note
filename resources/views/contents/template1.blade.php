@extends('layouts/top_layout')

@section('content')
@include('layouts/second_layout')
<div class="container">
    <div class="top">

{{-- 言語のコードを表示 --}}
@include('components.codes_list', ['items' => $language->codes])

{{-- フレームワークのコマンドを表示 --}}
@include('components.codes_list', ['items' => $framework->commands])
    </div>
</div>
@endsection