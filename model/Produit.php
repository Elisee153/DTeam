<?php
Class Produit{

	public static function select() {
		$connexion=Connexion::getConnexion();
		$query="SELECT idproduit, nomproduit, prix, delai, datepublication, image, probleme, solution FROM produit";
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
		$transaction->execute(array('idproduit'=>$id));
		return true;
	}   

}