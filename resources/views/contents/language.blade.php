@extends('layouts/top_layout')

@section('content')
<div id="content">
    <div class="container">
        <div class="top">
            <div>
                <p>ここは言語：{{ $language->language_name }}</p>
            </div>
        </div>
    </div>
</div>
@endsection