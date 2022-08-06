<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class RealizarLogin implements InterfaceControladorRequisicao
{


    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuarios = $entityManager->getRepository(Usuario::class);

    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        if (is_null($email) || $email === false){
            echo "E-mail Incorreto!";
        }

        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        /** @var Usuario $usuario */
        $usuario = $this->repositorioUsuarios->findOneBy(['email' => $email]);

        if(is_null($usuario) || !$usuario->senhaEstaCorreta($senha))
        {
            echo "E-mail ou senha inválido";
            return;
        }

        session_start();
        $_SESSION['logado'] = true;


         header('location: /listar-cursos');


    }
}