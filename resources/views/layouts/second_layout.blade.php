<div class="second-sidebar">
    <div class="second-side-nav">
        <!-- フレームワークを選択した場合 -->
        <div class="framework_inner">
            <div class="framework_process">
                <p>プロセス。フレームワークを選択した</p>
                <div class="framework_process_inner">
                    @foreach ($frameworks as $framework)
                        <li class="side-li">
                            <a href="{{ url('/contents/framework' . $framework->id) }}" class="framework_link">{{ $framework->framework_name }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="framework_command">
                <p>コマンド</p>
                <div class="framework_command_inner">
                    @foreach ($frameworks as $framework)
                        <li class="side-li">
                            <a href="{{ url('/contents/framework' . $framework->id) }}" class="framework_link">{{ $framework->framework_name }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- 言語を選択した場合 -->
        <div class="language_inner">
            <div class="language_code">
                <p>コード。言語を選択した</p>
                <div class="language_code_inner">
                    @foreach ($frameworks as $framework)
                        <li class="side-li">
                            <a href="{{ url('/contents/framework' . $framework->id) }}" class="framework_link">{{ $framework->framework_name }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="language_rule">
                <p>ルール</p>
                <div class="language_rule_inner">
                    @foreach ($frameworks as $framework)
                        <li class="side-li">
                            <a href="{{ url('/contents/framework' . $framework->id) }}" class="framework_link">{{ $framework->framework_name }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
            <div class="language_shortcuts">
                <p>ショートカット</p>
                <div class="language_shortcut_inner">
                    @foreach ($frameworks as $framework)
                        <li class="side-li">
                            <a href="{{ url('/contents/framework' . $framework->id) }}" class="framework_link">{{ $framework->framework_name }}</a>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
