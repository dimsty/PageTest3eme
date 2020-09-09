<?php 
class Login {
    private $pseudo;
    private $password;

	public function getPseudo()
    {
    return $this->pseudo;
    }
    public function getPassword()
    {
    return $this->password;
    }

    public function setPseudo(string $pseudo) : self
    {
    $this->pseudo = $pseudo;

    return $this;
    }
    public function setPassword(string $password) : self
    {
    $this->password = $password;

    return $this;
    }

    public static function findUsersAndPasswords()
    {
        $texteReq="SELECT * FROM user";

        $req = MonPdo::getInstance()->prepare($texteReq);
        $req->execute();
        $res = $req->fetch();
        return $res;
    }
    public static function logUser(string $pseudo, string $password){

        $sql = "SELECT * FROM user";
    $reponse = monPDO::getInstance()->prepare($sql);
    $reponse->execute();
    if (($res = $reponse->fetch()) == false) {
    } else {
        do {
            if($pseudo == $res['pseudo'] && $password == $res['password']){
            
              $_SESSION['pseudo'] = $pseudo;
              $_SESSION['isconnected'] = true;
              
              
  
            }
            else{
              $message = "Entrée incorrecte";
            }
        } while ($res = $reponse->fetch());
    }
    }
}