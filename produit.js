function envoyer() {
    
    var libelle=form.libelle_produit.value;
    var id_produit=form.id_produit.value;
    var categorie=form.categorie.value;
    var description=form.description.value;
    var prix=form.prix.value;
    var date=form.date.value;
    var image=form.image.value;
    if(libelle.length==0||id_produit.length!=8||description.length==0||prix.length==0||date==''||Image.length==0)
    {
        alert("il faut remplir tout les champs!");
    }
    
}