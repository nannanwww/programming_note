<?php

namespace App\Http\Controllers;

use App\Models\Language;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function showCodes($languageId)
    {
        // 選択された言語とそのcodesを取得
        $language = Language::with('codes')->findOrFail($languageId);

        // 取得したデータをビューに渡す
        return view('contents.template1', compact('language'));
    }
}
