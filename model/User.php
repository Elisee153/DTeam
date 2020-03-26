<?php
/**
**
Model
**
**/
Class User{
	private $iduser;
	private $nom;
	private $login;
	private $pwd;
	private $role;
	
	//>>>>>>>>>>>>>>>===============>>>>>>>>>>>>>>
	private function __construct($id,$nom,$prix,$delai,$date,$image,$probleme,$solution){
		$this->idproduit = $id;
		$this->nomproduit = $nom;
		$this->prix = $prix;
		$this->delai = $delai;
		$this->datepublication = $date;		
	}
	//>>>>>>>>>>>>>>=====getteur==========>>>>>>>>>>>>>>>>>	
	public function getId(){
		return $this->idproduit;
	}
	public function getNom(){
		return $this->nomproduit;
	}
	public function getPrix(){
		return $this->prix;
	} 
	public function getDelai(){
		return $this->delai;
	} 
	public function getDate(){
		return $this->datepublication;
	}
	public function getImage(){
		return $this->image;
	}
	public function getProbleme(){
		return $this->probleme;
	}
	public function getSolution(){
		return $this->solution;
	}
	//>>>>>>>>>>>>>>>=========Sql============>>>>>>>>>>>>>>>>>>>
	public static function select() {
		$connexion=Connexion::getConnexion();
		$query="SELECT iduser, nom, login, pwd, role FROM users";
		$transaction=$connexion->prepare($query);
		$transaction->execute();
		$data=$transaction->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($data);
	}

	public function insert() {
		$connexion=Connexion::getConnexion();
		$query="INSERT INTO produit (idproduit, nomproduit, prix, delai, datepublication, image, probleme, solution) VALUES (:idproduit, :nomproduit, :prix, :delai, :datepublication, :image, :probleme, :solution)";
		$transaction=$connexion->prepare($query);
		$transaction->execute(array('idproduit'=>$this->getId(), 'nomproduit'=>$this->getNom(), 'prix'=>$this->getPrix(), 'delai'=>$this->getDelai(), 'datepublication'=>$this->getDate(), 'image'=>$this->getImage(), 'probleme'=>$this->getProbleme(), 'solution'=>$this->getSolution()));
		return true;
	}

    public function update() {
		$connexion=Connexion::getConnexion();
		$query="UPDATE produit SET nomproduit=:nomproduit, prix=:prix, delai=:delai, datepublication=:datepublication, image=:image, probleme=:probleme, solution=:solution  WHERE idproduit=:idproduit";
		$transaction=$connexion->prepare($query);
		$transaction->execute(array('idproduit'=>$this->getId(), 'nomproduit'=>$this->getNom(), 'prix'=>$this->getPrix(), 'delai'=>$this->getDelai(), 'datepublication'=>$this->getDate(), 'image'=>$this->getImage(), 'probleme'=>$this->getProbleme(), 'solution'=>$this->getSolution()));
		return true;
    }

	public static function delete($idproduit) {
		$connexion=Connexion::getConnexion();
		$query="DELETE FROM produit WHERE idproduit=:idproduit";
		$transaction=$connexion->prepare($query);
		$transaction->execute(array('idproduit'=>$idproduit));
		return true;
	}   

}