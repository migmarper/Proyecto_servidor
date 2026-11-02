<?php

namespace Ciclost\Proyecto1\Interfaces;

interface ControllerInterface
{
    //ver todos los usuarios
public function index();

//ver un solo usuario
public function  show(int $id);

// crear un usuario
public function create();

//Modificar un usuario

public function update(int $id);
public function  edit(int $id);
//Borrar un usuario

public function destroy(int $id);


}