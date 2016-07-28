<?php

class database
{
    private $host;
    private $user;
    private $password;
    private $database;

    function __construct($filename)
    {
        
        if(is_file($filename))
        {
            include $filename;
        }
        else
        {
            throw new Exception("Error");
        }
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        

        $this->connect();
    }    

    private function connect()
    {
        //adatbázis csatlakozás
        if(!mysql_connect($this->host, $this->user, $this->password))
            throw new Exception("error: not connected to the server.");
        //adatbázis kivállasztása 
        if(!mysql_select_db($this->database))
            throw new Exception ("Error: No database selected.");

    }

    function close()
    {
        mysql_close();
    }
}
