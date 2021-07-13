<?php

namespace App\Http\Controllers;
use App\LibraryMusic;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    //
    public function index(){
        $works = Work::all();
        return view('admin.work.list',['works'=>$works]);
    }

    public function create(){
        $works = null;
        return view('admin.work.form',['works'=> $works]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'file' => 'required',
        ]);
        $work = new Work;
        $work->title = $request->title;
        $work->content = $request['content'];
        if($request->hasFile('file')) // Kiểm tra xem người dùng có upload hình hay không
        {
            $img_file = $request->file('file'); // Nhận file hình ảnh người dùng upload lên server

            $img_file_extension = $img_file->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/work/add')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName(); // Lấy tên của file hình ảnh

            $random_file_name = str_random(6).'_'.$img_file_name; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
            while(file_exists('upload/work/'.$random_file_name)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            echo $random_file_name;
            $img_file->move('upload/work',$random_file_name);
            $work->file = $random_file_name;
        }
        else
            $work->file = '';
        $work->save();
        return redirect('admin/work')->with('message','Createe success!');
    }

    public function edit($id){
        $work = Work::find($id);
        return view('admin.work.form',['work'=> $work]);
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'title' => 'required',
        ]);
        $work = Work::find($id);
        $work->title = $request->title;
        $work->content = $request->content;
        if($request->hasFile('file')) // Kiểm tra xem người dùng có upload hình hay không
        {
            $img_file = $request->file('file'); // Nhận file hình ảnh người dùng upload lên server

            $img_file_extension = $img_file->getClientOriginalExtension(); // Lấy đuôi của file hình ảnh

            if($img_file_extension != 'png' && $img_file_extension != 'jpg' && $img_file_extension != 'jpeg')
            {
                return redirect('admin/work/add')->with('error','Định dạng hình ảnh không hợp lệ (chỉ hỗ trợ các định dạng: png, jpg, jpeg)!');
            }
            $img_file_name = $img_file->getClientOriginalName(); // Lấy tên của file hình ảnh

            $random_file_name = str_random(6).'_'.$img_file_name; // Random tên file để tránh trường hợp trùng với tên hình ảnh khác trong CSDL
            while(file_exists('upload/work/'.$random_file_name)) // Trường hợp trên gán với 4 ký tự random nhưng vẫn có thể xảy ra trường hợp bị trùng, nên bỏ vào vòng lặp while để kiểm tra với tên tất cả các file hình trong CSDL, nếu bị trùng thì sẽ random 1 tên khác đến khi nào ko trùng nữa thì thoát vòng lặp
            {
                $random_file_name = str_random(6).'_'.$img_file_name;
            }
            echo $random_file_name;

            $img_file->move('upload/work',$random_file_name); // file hình được upload sẽ chuyển vào thư mục có đường dẫn như trên
            $work->file = $random_file_name;
        }
        $work->save();

        return redirect('admin/work')->with('message','Update success!');
    }

    public function destroy($id){
        Work::find($id)->delete();
        return redirect('admin/work/')->with('message','Delete success!');
    }
}
