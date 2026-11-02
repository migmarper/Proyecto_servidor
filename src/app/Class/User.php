<?php

namespace Ciclost\Proyecto1\Class;

use Random\Engine\Secure;
use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator as v;

class User implements \JsonSerializable
{
    //Propiedades
    private int $id;
    private string $nombre;
    private string $address;
    private string $phone;
    private \DateTime $birthdate;
    private string $password;
    private string $email;
    private array $usedContent;

    public function __construct()
    {
        $this->usedContent = [];

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setName(string $nombre): User
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): User
    {
        $this->address = $address;
        return $this;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): User
    {
        $this->phone = $phone;
        return $this;
    }

    public function getBirthdate(): \DateTime
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTime $birthdate): User
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    public function getUsedContent(): string
    {
        return $this->usedContent;
    }

    public function setUsedContent(string $usedContent): User
    {
        $this->usedContent = $usedContent;
        return $this;
    }


    public function jsonSerialize(): mixed
    {
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'address'=>$this->address,
            'phone'=>$this->phone,
            'birthdate'=>$this->birthdate->format("Y-m-d"),
        ];
    }

    public static function createFromArray(array $userData): User
    {

        $usuario = new User();
        if (isset($userData['id'])) {
            //SI EL USUARIO SE ESTA LEYENDO DE LA BD
            $usuario->setId($userData['id']);
            $usuario->setPassword($userData['password']);
        } else {
            //estoy intentando crear un usuario nuevo
            //cifrar la contraseña antes de guardarla en la BD
            $password_cifrado = password_hash($userData['password'], PASSWORD_DEFAULT);
            $usuario->setPassword($password_cifrado);
        }

        $usuario->setName($userData['name']);
        $usuario->setEmail($userData['email']);
        //$usuario->setPassword($userData['password']);

        //propiedades que pueden no insertarse
        $usuario->setAddress($userData['address'] ?? '');
        $usuario->setPhone($userData['phone'] ?? '');
        if (isset($userData['birthdate'])) {
            $usuario->setBirthdate(\DateTime::createFromFormat('Y-d-m', $userData['birthdate']));

        } else {
            $usuario->setBirthdate(\DateTime::createFromFormat('Y-d-m', '1998-01-01'));

        }
        return $usuario;

    }

    public static function createMultipleUsersFromArray(array $usersData): array
    {
        $usuarios = [];
        foreach ($usersData as $datosUsuarios) {
            $usuarios[] = User::createFromArray($datosUsuarios);
        }
        return $usuarios;
    }

    public static function validateUserCreation(array $userData): array|true
    {

        try {
            v::key('name', v::stringType())->
            key('address', v::stringType(), false)->key('phone', v::phone()->length(9), false)->
            key('birthdate', v::date('Y-m-d'), false)->
            key('password', v::stringType()->length(2, 25))->
            key('email', v::email())->assert($userData);
        } catch (NestedValidationException $e) {
            $errores = $e->getMessages();
            return $errores;
        }
        return true;
    }

    public static function validateUserUpdate(array $userData): array|true
    {

        try {
            v::key('name', v::stringType(), false)->
            key('address', v::stringType(), false)->key('phone', v::phone()->length(9), false)->
            key('birthdate', v::date('Y-m-d'), false)->
            key('password', v::stringType()->length(2, 25), false)->
            key('email', v::email(), false)->
            key('id', v::intType())->assert($userData);
        } catch (NestedValidationException $e) {
            $errores = $e->getMessages();
            return $errores;
        }
        return true;
    }

    public static function updateFromArray(User $usuarioAntiguo, array $datosNuevos): User
    {
        $usuarioAntiguo->setAddress($datosNuevos['address'] ?? $usuarioAntiguo->getAddress());
        $usuarioAntiguo->setPhone($datosNuevos['phone'] ?? $usuarioAntiguo->getPhone());
        $usuarioAntiguo->setEmail($datosNuevos['email'] ?? $usuarioAntiguo->getEmail());
        $usuarioAntiguo->setName($datosNuevos['name'] ?? $usuarioAntiguo->getNombre());
        if (isset($datosNuevos['passwprd'])) {
            $passwordCifrado = password_hash($datosNuevos['password'], PASSWORD_DEFAULT);

        }
        if (isset($datosNuevos['birthdate'])) {
            $usuarioAntiguo->setBirthdate(\DateTime::createFromFormat('Y-m-d', $datosNuevos['birthdate']));

        }
        return $usuarioAntiguo;
    }

}
