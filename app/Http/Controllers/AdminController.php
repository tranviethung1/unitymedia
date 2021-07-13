<?php

namespace App\Http\Controllers;

use App\GeneralSetting;
use App\LibraryMusic;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $generalSetting = GeneralSetting::get();
        $library = LibraryMusic::get();
    	return view('admin.dashboard.home',
            [
                'generalSetting' => $generalSetting,
                'library' => $library
            ]);
    }

    public function generalSetting(Request $request)
    {
        $generalSetting = $request->all();
        foreach ($generalSetting as $key => $item) {
            $itemGeneral = null;
            if ($key === 'favicon') {
                $uploadFileImage = self::uploadFileImage($request, 'favicon');
                self::updateByTypeFileSetting($uploadFileImage, 'favicon');
            } else if ($key === 'logo') {
                $uploadFileImage = self::uploadFileImage($request, 'logo');
                self::updateByTypeFileSetting($uploadFileImage, 'logo');
            } else {
                $itemGeneral = GeneralSetting::where('type', $key)->first();
                if ($itemGeneral) {
                    $itemGeneral->update(['content' => $item]);
                }
            }
        }
        return redirect('/admin');
    }
    public static function updateByTypeFileSetting($uploadFileImage, $nameFieldFile) {
        if ($uploadFileImage) {
            $itemGeneral = GeneralSetting::where('type', $nameFieldFile)->first();
            $itemGeneral->update(['content' => $uploadFileImage]);
        }
    }

    public static function uploadFileImage ($request, $nameInput) {
        if($request->hasFile($nameInput))
        {
            $img_file = $request->file($nameInput);
            $img_file_extension = $img_file->getClientOriginalExtension();
            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg' && $img_file_extension != 'ico')
            {
                return redirect('admin/')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName();
            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/'.$nameInput.'/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            $img_file->move('upload/'. $nameInput,$random_file_name);
            return $random_file_name;
        }
        return false;
    }
    public function aboutUs()
    {
        $aboutUs = GeneralSetting::where('type', 'about-us')->first();
        return view('admin.about-us.form',
            [
                'aboutUs' => $aboutUs,
            ]
        );
    }

    public function aboutUsUpdate(Request $request)
    {
        $generalSetting = GeneralSetting::where('type', 'about-us')->first()
            ->update([
                'content' => $request['content']
            ]);
        return redirect('/admin');
    }

}
