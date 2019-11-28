<?PHP
class promotion{
	private $id_promo;
	private $id_produit;
	private $periode;
	private $pourcentage;

	function __construct($id_promo,$id_produit,$periode,$pourcentage){
		$this->id_promo=$id_promo;
		$this->id_produit=$id_produit;
		$this->periode=$periode;
		$this->pourcentage=$pourcentage;
	}
	
	function getId_promo(){
		return $this->id_promo;
	}
	function getId_produit(){
		return $this->id_produit;
	}
	function getPeriode(){
		return $this->periode;
	}
	function getPourcentage(){
		return $this->pourcentage;
	}
	
	function setId_promo($id_promo){
		$this->id_promo=$id_promo;
	}
	function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setPeriode($periode){
		$this->periode=$periode;
	}
	function setPourcentage($pourcentage){
		$this->pourcentage=$pourcentage;
    }
}

?>