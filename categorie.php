<?PHP
class categorie{
	private $id_categorie;
	private $libelle_categorie;
	
	function __construct($id_categorie,$libelle_categorie){
		$this->id_categorie=$id_categorie;
		$this->libelle_categorie=$libelle_categorie;
    }
    
    function getIdcategorie(){
		return $this->id_categorie;
	}
	
	function getLibellecategorie(){
		return $this->libelle_categorie;
	}
	function setLibellecategorie($libelle_categorie){
		$this->libelle_categorie=$libelle_categorie;
	}
    }
    ?>