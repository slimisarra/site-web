<?PHP
class image{
	public $id_image;
	public $libelle_image;
	
	function __construct($id_image,$libelle_image){
        $this->id_image=$id_image;
		$this->libelle_image=$libelle_image;
    }
    
    function getid_image(){
		return $this->id_image;
	}
	
	function getlibelle_image(){
		return $this->libelle_image;
	}
	function setlibelle_image($libelle_image){
		$this->libelle_image=$libelle_image;
    }
    ?>