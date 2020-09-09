<?php 
class Blog {

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $titre;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $contenu;

    /**
     * Undocumented variable
     *
     * @var string
     */
    private $pseudo;

/**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre):self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }



    public static function GetBlog($user) : array
    {
        $req=MonPdo::getInstance()->prepare("SELECT * from blogged.blog WHERE utilisateur='test'");

        $req->SetFetchMode(PDO::FETCH_CLASS, 'Blog');
        $req->bindParam(':id', $user->getPseudo());
        $nb=$req->execute();
        
        $nb=$req->fetchAll();  
        return $nb;  
    }
    public static function CreateBlog(Blog $blog) : int
    {
        $req=MonPdo::getInstance()->prepare("INSERT INTO blogged.blog (titre, contenu, utilisateur) VALUES (':titre', ':contenu', ':pseudo')");

        $titreCreate=$blog->getTitre();
        $contenuCreate=$blog->getContenu();
        $pseudoCreate=$blog->getPseudo();
        $req->bindParam(':titre', $titreCreate);
        $req->bindParam(':contenu', $contenuCreate);
        $req->bindParam(':pseudo', $pseudoCreate);
        
        $nb=$req->execute();
        return $nb;  
    }

    
}