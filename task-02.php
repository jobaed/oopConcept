<?php

interface UserLoggin{
    public function loginCheck($userName, $password);
}

class SignIn implements UserLoggin{
    private $dbName;

    public function __construct($dbName)
    {
        $this->dbName = $dbName;
    }

    public function loginCheck($userName,$password)
    {
        // Demo Database userName & Password Throw Database Name
        $database = $this->dbName;
        $dbUserName = "jobaed";
        $dbPassword = "123456";

        if($dbUserName == $userName){
            if($dbPassword == $password){
                return "Login Successfull";
                // Redirect Dashboard
            }else{
                return "Password Not Match";
            }
        }else{
            return "User Not Found";
        }
    }
}



// First Object For SignIn;
$singin = new SignIn('userDatabase');
echo $singin->loginCheck('jobaed', '123456');





