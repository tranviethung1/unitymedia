<?php

namespace App\Http\Controllers;
use App\Category;
use App\LibraryMusic;
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;
use App\Comment;

use Illuminate\Http\Request;

class LibraryMusicController extends Controller
{
    //
    public function index(){
    	$libraryMusic = LibraryMusic::all();
    	return view('admin.library-music.list',['libraryMusic'=>$libraryMusic]);
    }

    public function create(){
        $libraryMusic = null;
    	return view('admin.library-music.form',['libraryMusic'=>$libraryMusic]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'url' => 'required',
            'file' => 'required',
        ]);
        $library = new LibraryMusic;
        $library->name = $request->name;
        $library->description = $request->description;
        $library->url = $request->url;
    	if($request->hasFile('file'))
    	{
    		$img_file = $request->file('file');
    		
    		$img_file_extension = $img_file->getClientOriginalExtension();

    		if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
    		{
    			return redirect('admin/library-music/create')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
    		}
    		$img_file_name = $img_file->getClientOriginalName();

    		$random_file_name = str_random(6).'_'.$img_file_name;
    		while(file_exists('upload/library-music/'.$random_file_name))
    		{
    			$random_file_name = str_random(6).'_'.$img_file_name;
    		}
    		echo $random_file_name;

    		$img_file->move('upload/library-music',$random_file_name);
            $library->file = $random_file_name;
    	}
    	else
            $library->file = '';
        $library->save();
    	return redirect('admin/library-music')->with('message','Create success!');
    }

    public function edit($id){
        $libraryMusic = LibraryMusic::find($id);
    	return view('admin.library-music.form',['libraryMusic'=> $libraryMusic]);
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'url' => 'required',
        ]);
        $library = LibraryMusic::find($id);
        $library->name = $request->name;
        $library->description = $request->description;
        $library->url = $request->url;
        if($request->hasFile('file'))
        {
            $img_file = $request->file('file');

            $img_file_extension = $img_file->getClientOriginalExtension();

            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/library-music/create')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName();

            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/library-music/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            echo $random_file_name;

            $img_file->move('upload/library-music',$random_file_name);
            $library->file = $random_file_name;
        }
        $library->save();

    	return redirect('admin/library-music')->with('message','Update success!');
    }

    public function destroy($id){
        LibraryMusic::find($id)->delete();
    	return redirect('admin/library-music/')->with('message','Delete success!');
    }
}
