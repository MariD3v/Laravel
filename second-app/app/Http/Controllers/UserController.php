<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('home');
    }
    public function users(Request $request){
        $users = $request->session()->get('users', []);
        return view('users.users', compact('users'));
    }

    public function store(Request $request){
        $users = session('users', []);

        $lastId = count($users) > 0 ? max(array_column($users, 'id')) : 0;
        $user = [
            'id' => $lastId + 1,
            'name' => $request->name,
            'password' => $request->password
        ];
            
        $users[] = $user;

        session(['users' => $users]);

        return redirect('/users');
    }
    public function create(){
        return view('users.create');
    }
    public function show(Request $request, $id){
        $users = session('users', []);

        $user = null;
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                $user = $u;
                break;
            }
        }

        return view('users.id', compact('user'));
    }

    public function update(){
        return view('users.update');  
    }

    public function search(Request $request){
        $users = session('users', []);
        $id = $request->id;
        $user_buscado = null;
        foreach ($users as $u) {
            if ($u['id'] == $id) {
                $user_buscado = $u;
            }
        }

        if( $user_buscado != null){
            $user = [
                'id' => $id,
                'name' => $user_buscado['name'],
                'password' => $user_buscado['password']
            ];
            return view('users.update2',compact('user')); 
        } else {
            $error = "No se ha encontrado el usuario";
            return view('users.update',compact('error'));
        }

             
    }

    public function edit(Request $request){ 
        $users = session('users', []);
            
        foreach ($users as $key => $u) {
            if ($u['id'] == $request->id) {
                unset($users[$key]);
            }
        }
        $users = array_values($users);
        session(['users' => $users]);

        $user = [
            'id' => $request->id,
            'name' => $request->name,
            'password' => $request->password
        ];

        $users[] = $user;

        session(['users' => $users]);

        return redirect('/users');
    }

    public function destroy(Request $request){
        $users = session('users', []);
        $id = $request->id;
        $user = null;
        foreach ($users as $key => $u) {
            if ($u['id'] == $id) {
                $user = $u;
                unset($users[$key]);
                break;
            }
        }

        if($user == null){
            return view('users.delete');
        }

        $users = array_values($users);
        session(['users' => $users]);

        return view('users.users',compact('users'));
    }

    public function delete(){
        return view('users.delete',);
    }
}
