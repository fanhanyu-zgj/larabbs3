<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>['show']]);
    }
    public function show(User $user){
        return view('users.show',compact('user'));
    }

    public function edit(User $user){
        $this->authorize('update', $user);
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request,ImageUploadHandler $uploader, User $user){
        $this->authorize('update', $user);
        $data=$request->all();
        if($request->avatar){
            $result=$uploader->save($request->avatar,'avatars',$user->id);
            if($result){
                $data['avatar']=$result['path'];
            }
        }
        $user->update( $data);
        return redirect()->route('users.show',$user->id)->with('success','个人资料更新成功！');
    }
}
