<?php

namespace SIDTT\Http\Controllers;
use Illuminate\Http\Request;
use \SIDTT\usuarios;
class registro extends Controller
{
    // Controlador de enrrutamiento de vistas de registro
	public function index(){
        return view('registro.registro');
    } 

    // Enrrutamiento a los formularios de registro
    public function almn(){
        return view('registro.registroAlumno');
    }
    public function doce(){
        return view('registro.registroDocente');
    }
    public function ext(){
        return view('registro.registroAsesor');
    }

    // Funciones de registro
    public function store(Request $request)
    {
        $user = new usuarios();

        $user->tipo = $request->get('type');
        $user->nombre = $request->get('nom').' '.$request->get('aP').' '.$request->get('aM');
        $user->email = $request->get('email');
        $user->pass = bcrypt($request->get('pass'));

        switch ($request['type']) {
            case 'alumno':
            usuarios::where('email',$request['email'])->update(['boleta' => $request['boleta']]);
                return '¡Registro Exitosito!';
                break;
            case 'docente':
            usuarios::where('email',$request['email'])->update(['cedula' => $request['ced'],
                            'numerodet'=> $request['nt'],'academia' => $request['academia']]);
                return '¡Registro Exitosuo!';
                break;
            case 'asesor':
            usuarios::where('email',$request['email'])->update(['telefono' => $request['phone'],
                            'celular'=> $request['cellphone'],'codigo' => $request['project']]);
                return '¡Registro Exitosoeo!';
                break;
            default:
                return ':(';
                break;
        }
        $user->save();
        
    }
}
