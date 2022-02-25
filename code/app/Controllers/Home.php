<?php

namespace App\Controllers;
use App\Models\mUsuarios;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function bienvenida()
    {
        return view('vbienvenida');
    }
    public function registro(){
        return view('vRegistro');
    }
    public function insertarForm(){
        $mUsuarios = new mUsuarios();
        $usuarioNuevo = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "correo" => $_POST['correo'],
            "rol" => $_POST['rol'],
            "contra" => $_POST['contra']
        ];
        $mUsuarios->insert($usuarioNuevo);
        $datoId['id_usuario'] = $mUsuarios->
        db->insertID();

        return view("vSuccess",$datoId );
    }
}

