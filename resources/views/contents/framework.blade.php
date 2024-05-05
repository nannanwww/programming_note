@extends('layouts/top_layout')

@section('content')
<div id="content">
    <div class="container">
        <div class="top">
            <div>
                <p>ここはフレームワーク：{{ $framework->framework_name }}</p>
            </div>
        </div>
    </div>
</div>
@endsection