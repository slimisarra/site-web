<?PHP
class produit{
	private $id_produit;
	private $libelle_produit;
	private $prix;
	private $description;
	private $chemin_image;
	private $date_ajout;
	private $categorie;
	
	function __construct($id_produit,$libelle_produit,$prix,$description,$chemin_image,$date_ajout,$categorie){
		$this->id_produit=$id_produit;
		$this->libelle_produit=$libelle_produit;
		$this->prix=$prix;
		$this->description=$description;
		$this->id_image=$id_image;
		$this->date_ajout=$date_ajout;
		$this->categorie=$categorie;

	}


	function getid_produit(){
		return $this->id_produit;
	}
	
	function getlibelle_produit(){
		return $this->libelle_produit;
	}
	function setlibelle_produit($libelle_produit){
		$this->libelle_produit=$libelle_produit;
	}
	function getprix(){
		return $this->prix;
	}
	function setprix($prix){
		$this->prix=$prix;
	}

	function getdescription(){
		return $this->description;
	}

	function setdescription($description){
		 $this->description=$description;
	}

	function getchemin_image(){
		return $this->id_image;
	}

	function setchemin_image($id_image){
		 $this->id_image=$id_image;
	}

	function getdate_ajout(){
		return $this->date_ajout;
	}

	function setdate_ajout($date_ajout)
	{
		$this->date_ajout=$date_ajout;
	} 

	function getcategorie(){
		return $this->categorie;
	}

	function setcategorie($categorie)
	{
		$this->categorie=$categorie;
	} 
	
}

?>