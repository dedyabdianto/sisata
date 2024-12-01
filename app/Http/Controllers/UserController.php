<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('pages.admin.user.index', with([
            'data' => $user,
            'title' => 'Kelola User',
        ]));
    }

    public function store(Request $request){
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = 'username';
        $user->password = bcrypt('password123');
        $user->tlp = $request->tlp;
        $user->role = $request->role;    

        if($request->hasFile(key: 'foto')) {
            $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
            $file_path = $request->file('foto')->storeAs('public/foto', $filename);
        }
        $user->foto = isset($file_path) ? $file_path : '';

        if($user->save()) {
            return redirect()->back()->with(['success' => 'Berhasil menambahkan data']);
        }else{
            return redirect()->back()->with(['error' => 'Gagal menambahkan data']);}
       
    }

    public function update(Request $request, String $id){
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->tlp = $request->tlp;
        $user->role = $request->role;    
        
        if($request->password != null) {
            if($request->password == $request->re_password) {
                $user->password = bcrypt($request->password);
            }else{
                return redirect()->back()->with(['error' => 'Password dan konfirmasi password tidak sama']);
            }
        }

        if($request->hasFile(key: 'foto')) {
            $filename = Str::random(32) . '.' . $request->file('foto')->getClientOriginalExtension();
            $file_path = $request->file('foto')->storeAs('public/foto', $filename);
        }
        $user->foto = isset($file_path) ? $file_path : $user->foto;

        if($user->save()) {
            return redirect()->back()->with(['success' => 'Berhasil mengubah data']);
        }else{
            return redirect()->back()->with(['error' => 'Gagal mengubah data']);}
       
    }

    public function destroy(String $id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with(['success' => 'Berhasil menghapus data']);
    }

    public function reset(String $id){
        $user = User::findOrFail($id);
        $user->password=bcrypt('password123');
        $user->save();

        return redirect()->back()->with(['success' => 'Berhasil me-reset password. Kembali ke password default yaitu password123']);
    }

}
