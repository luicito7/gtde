<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::orderby('id', 'desc')->paginate(30);
        //return $users;
        return view('users.index',compact('users'));
    }

    public function create(){

        //$users = User::paginate();
        //return $users;
        return view('users.create');
    }
    public function store(Request $request){

        $user = new User();
        
        $user->dni = $request->dni;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->oficina = $request->oficina;
        $user->cargo = $request->cargo;
        $user->nivel = $request->nivel;
        $user->fecha_ingreso = $request->fecha_ingreso;
        $user->fecha_expiracion = $request->fecha_expiracion;

        $user->save();
        return redirect()->route('users.show',$user);
    }
    public function show($id){

        $users = User::find($id);
        //return $users;
        return view('users.detalles',compact('users'));
    }

    
}
