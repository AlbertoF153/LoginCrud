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
        $users = User::all();
        return view('users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        User::create($request->only ('name', 'email', 'direccion', 'telefono' )
        +[
            'password' => bcrypt($request->input('password')),
        ]);
    return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //$user=User::findOrFail($id);
        $data = $request->only('name', 'email', 'direccion', 'telefono');
        $password=$request->input('password');
        if($password)
            $data['password'] = bcrypt($password);
        //if(trim($request->password)=='')
        //{
         //   $data=>$request->except('password');
        //}
        //else{
          //  $data=$request->all();
            //$data['password']=bcrypt($request->password);
        //}

        $user->update($data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        //return redirect('users.index');
        return redirect()->route('users.index');
    
    }
}
