<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Framework;
use App\Models\Process;
use App\Models\Command;
use App\Models\Language;
use App\Models\Rule;
use App\Models\Shortcut;
use App\Models\Code;

class CategoryController extends Controller
{
    // public function showTop($category = null)
    // {
    //     $data = [];
    //     switch ($category) {
    //         case 'frameworks':
    //             $data = Framework::all('framework_name');
    //             break;
    //         case 'languages':
    //             $data = Language::all('language_name');
    //             break;
    //     }

    //     return view('layouts.top_layout', ['items' => $data, 'category' => $category]);
    // }
    // public function showTop($category = null)
    // {
    //     switch ($category) {
    //         case 'frameworks':
    //             $items = Framework::select('framework_name as name')->get();
    //             break;
    //         case 'languages':
    //             $items = Language::select('language_name as name')->get();
    //             break;
    //         default:
    //             $items = collect([]);
    //             break;
    //     }

    //     return view('layouts.top_layout', compact('items', 'category'));
    // }

    // public function showTop($category = null)
    // {
    //     $items = collect();
    //     $data = []; // レスポンス用のデータ配列
    //     switch ($category) {
    //         case 'frameworks':
    //             $data['items'] = Framework::select('framework_name as name')->get();
    //             break;
    //         case 'languages':
    //             $data['items'] = Language::select('language_name as name')->get();
    //             break;
    //         default:
    //             $data['items'] = []; // カテゴリが未定義の場合、空の配列を返す
    //             break;
    //     }

    //     return view('layouts.top_layout', compact('items', 'category'));
    // }
    public function showTop(Request $request, $category = null)
    {
        if ($request->ajax()) {
            $data = [];
            switch ($category) {
                case 'frameworks':
                    $data['items'] = Framework::select('framework_name as name')->get();
                    break;
                case 'languages':
                    $data['items'] = Language::select('language_name as name')->get();
                    break;
                default:
                    $data['items'] = [];
                    break;
            }
            return response()->json($data);
        } else {
            $items = collect();
            switch ($category) {
                case 'frameworks':
                    $items = Framework::select('framework_name as name')->get();
                    break;
                case 'languages':
                    $items = Language::select('language_name as name')->get();
                    break;
            }
            return view('layouts.top_layout', compact('items', 'category'));
        }
    }

    public function showFrameworkDetails($name)
    {
        $framework = framework::where('framework_name', $name)->first();
        if (!$framework) {
            abort(404);
        }
        return view('contents.framework', ['framework' => $framework]);
    }
    public function showLanguageDetails($name)
    {
        $language = Language::where('language_name', $name)->first();
        if (!$language) {
            abort(404);
        }
        return view('contents.language', ['language' => $language]);
    }


}
