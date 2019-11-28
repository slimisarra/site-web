<?PHP
class categorie{
	public $id_categorie;
	public $libelle_categorie;
	
	function __construct($id_categorie,$libelle_categorie){
		$this->id_categorie=$id_categorie;
		$this->libelle_categorie=$libelle_categorie;
    }
    
    function getid_categorie(){
		return $this->id_categorie;
	}
	
	function getlibelle_categorie(){
		return $this->libelle_categorie;
	}
	function setlibelle_categorie($libelle_categorie){
		$this->libelle_categorie=$libelle_categorie;
    }
    ?>