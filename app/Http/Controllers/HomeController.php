<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use App\LibraryMusic;
use App\Radio;
use App\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
    }

    public function index()
    {
        $libraryMusic = LibraryMusic::take(8)->orderBy('id', 'desc')->get();
        $generalSetting = GeneralSetting::get();
        $works = Work::get();
        $radio = Radio::get();
        $libraryActive = LibraryMusic::find($generalSetting[14]->content);
        return view('web.index',
            [
                'libraryMusic' => $libraryMusic,
                'generalSetting' => $generalSetting,
                'works' => $works,
                'radio' => $radio,
                'libraryActive' => $libraryActive
            ]
        );
    }

    public function works()
    {
        $works = Work::get();
        $generalSetting = GeneralSetting::get();
        return view('web.works',
            [
                'works' => $works,
                'generalSetting' => $generalSetting,
            ]
        );
    }
    public function aboutUs()
    {
        $generalSetting = GeneralSetting::get();
        $aboutUs = GeneralSetting::where('type', 'about-us')->first();
        return view('web.about-us',
            [
                'aboutUs' => $aboutUs,
                'generalSetting' => $generalSetting,
            ]
        );
    }

    public function librarySong()
    {
        $generalSetting = GeneralSetting::get();
        $librarySong = LibraryMusic::get();
        return view('web.library-song',
            [
                'librarySong' => $librarySong,
                'generalSetting' => $generalSetting,
            ]
        );
    }
    public function contact()
    {
        $generalSetting = GeneralSetting::get();
        return view('web.contact',
            [
                'generalSetting' => $generalSetting,
            ]
        );
    }
}
