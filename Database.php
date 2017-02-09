<?php

namespace SON;

class Database
{
    public function connect()
    {
        throw new ForbiddenException("Página não encontrada");
        //throw new \Exception("Um Exception", 20);
        //return new \PDO();
    }
}
