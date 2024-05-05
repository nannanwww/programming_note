<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Framework;

class ProgrammingNoteController extends Controller
{
    public function showTop()
    {
        // 'languages' に関連する 'codes', 'rules', 'shortcuts' を事前に読み込む
        $languages = Language::with(['codes', 'rules', 'shortcuts'])->get();

        // 'frameworks' に関連する 'commands', 'processes' を事前に読み込む
        $frameworks = Framework::with(['commands', 'processes'])->get();

        return view('contents.programming_note', compact('languages', 'frameworks'));
    }
}
