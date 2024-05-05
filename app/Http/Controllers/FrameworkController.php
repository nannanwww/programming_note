<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use Illuminate\Http\Request;


class FrameworkController extends Controller
{
    public function showCommands($frameworkId)
    {
        // 選択された言語とそのcodesを取得
        $framework = Framework::with('commands')->findOrFail($frameworkId);

        // 取得したデータをビューに渡す
        return view('contents.template1', compact('framework'));
    }
}
