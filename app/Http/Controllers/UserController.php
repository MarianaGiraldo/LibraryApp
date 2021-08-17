<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index', ['users'=>user::all(), 'fondo'=>'#f6ec9c']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create', ['users'=>user::all(), 'fondo'=>'#b8e6cc']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'birthDate'=>'required',
            'password'=>'required',
        ]);
        $newUser = new user();
        $newUser ->firstName = $request->get('firstName');
        $newUser ->lastName = $request->get('lastName');
        $newUser ->email = $request->get('email');
        $newUser ->birthDate = $request->get('birthDate');
        $newUser ->password = $request->get('password');

        $newUser -> save();
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userInfo=user::findOrFail($id);
        return view('users.show', [
            'user'=>User::findOrFail($id),
            'users'=>User::all(),
            'fondo'=>'#91a5f5']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::findOrFail($id);
        return view ('users.edit', ['user'=>$user, 'fondo'=>'#b8d2e6']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $userUpdt=User::find($id);
        $userUpdt ->firstName = $request->get('firstName');
        $userUpdt ->lastName = $request->get('lastName');
        $userUpdt ->email = $request->get('email');
        $userUpdt ->birthDate = $request->get('birthDate');
        $userUpdt ->password = $request->get('password');
        $userUpdt -> save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/users');
    }
    public function drop($id)
    {
        $dropUser=user::find($id);
        return view('users.drop', ['dropUser'=>$dropUser, 'fondo'=>'#f3d46f']);
    }
}
