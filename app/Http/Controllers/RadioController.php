<?php

namespace App\Http\Controllers;
use App\LibraryMusic;
use App\Radio;
use App\Work;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    //
    public function index(){
        $radio = Radio::all();
        return view('admin.radio.list',['radio'=>$radio]);
    }

    public function create(){
        $radio = null;
        return view('admin.radio.form',['radio'=> $radio]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'album' => 'required'
        ]);
        $radio = new Radio;
        $radio->name = $request->name;
        $radio->album = $request->album;
        if($request->hasFile('file'))
        {
            $img_file = $request->file('file');
            $img_file_extension = $img_file->getClientOriginalExtension();
            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/radio/create')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName();
            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/radio/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            $img_file->move('upload/radio',$random_file_name);
            $radio->file = $random_file_name;
        }
        if($request->hasFile('radio'))
        {
            return redirect('admin/radio/create')->with('error','error!');
            $img_file = $request->file('radio');
            $img_file_extension = $img_file->getClientOriginalExtension();
            if($img_file_extension != 'mp3')
            {
                return redirect('admin/radio/create')->with('error','Định dạng radio không hợp lệ (chỉ hỗ trợ các định dạng: mp3)!');
            }
            $img_file_name = $img_file->getClientOriginalName();
            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/radio/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            $img_file->move('upload/radio',$random_file_name);
            $radio->radio = $random_file_name;
        }
        $radio->save();
        return redirect('admin/radio')->with('message','Create success!');
    }

    public function edit($id){
        $radio = Radio::find($id);
        return view('admin.radio.form',['radio'=> $radio]);
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'name' => 'required',
            'album' => 'required'
        ]);
        $radio = Radio::find($id);
        $radio->name = $request->name;
        $radio->album = $request->album;
        if($request->hasFile('file'))
        {
            $img_file = $request->file('file');
            $img_file_extension = $img_file->getClientOriginalExtension();
            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/radio/create')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName();
            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/radio/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            $img_file->move('upload/radio',$random_file_name);
            $radio->file = $random_file_name;
        }
        if($request->hasFile('radio'))
        {
            return back()->with('error','error!');
            $img_file = $request->file('radio');
            $img_file_extension = $img_file->getClientOriginalExtension();
            if($img_file_extension != 'mp3')
            {
                return back()->with('error','Định dạng radio không hợp lệ (chỉ hỗ trợ các định dạng: mp3)!');
            }
            $img_file_name = $img_file->getClientOriginalName();
            $random_file_name = str_random(6).'_'.$img_file_name;
            while(file_exists('upload/radio/'.$random_file_name))
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            $img_file->move('upload/radio',$random_file_name);
            $radio->radio = $random_file_name;
        }
        $radio->save();
        return redirect('admin/radio')->with('message','Update success!');
    }

    public function destroy($id){
        Radio::find($id)->delete();
        return redirect('admin/radio/')->with('message','Delete success!');
    }
}
