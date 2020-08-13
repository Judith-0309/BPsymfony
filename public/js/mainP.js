var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var Adresse = document.getElementById("Adresse")
var Telephone = document.getElementById("Telephone");
var Email = document.getElementById("Email");
var Profession = document.getElementById("Profession");
 /*verification des saisies*/
nom.addEventListener('keypress', function(e) {
    str = /[a-zA-Z]/
    if (!str.test(String.fromCharCode(e.keyCode)))
        e.preventDefault();
})
  
    
/*verification de tous les champs*/
function validate(){
    var verify = 0;
/*verification des saisies de l'email */ 

    if(Email.value != "" && !(/^\w+([.-]?\w+)@\w+([.-]?\w+)(.\w{2,3})+$/.test(Email.value))){
        alert("email invalide");
        Email.placeholder = "Veuillez remplir ce champ";
        Email.style.backgroundColor="#C82525";
        verify=1;
    } 

    if(nom.value === ""){
        alert("remplir nom");
        nom.placeholder = "Veuillez remplir ce champ";
        nom.style.backgroundColor="#C82525";
        verify=1;
    } 
    
    if(prenom.value === ""){
        alert("remplir prenom");
        prenom.placeholder = "Veuillez remplir ce champ";
        prenom.style.backgroundColor="#C82525";
        verify=1;

    }
     if(Adresse.value === ""){
        alert("remplir Adresse");
        Adresse.placeholder = "Veuillez remplir ce champ";
        Adresse.style.backgroundColor="#C82525";
        verify=1;

    }
    if(Telephone.value === ""){
        alert("remplir telephone");
        Telephone.placeholder = "Veuillez remplir ce champ";
        Telephone.style.backgroundColor="#C82525";
        verify=1;

    }
    if(Profession.value === ""){
        alert("remplir Profession");
        Profession.placeholder = "Veuillez remplir ce champ";
        Profession.style.backgroundColor="#C82525";
        verify=1;

    }
    if(verify === 0){
        return true;
    }
    else{

        return false;
    }
  
    
}

document.getElementById("salarie").addEventListener("change", function(event) {
    event.preventDefault();

//console.log(document.getElementById("salarie").value);

if(document.getElementById("salarie").value ==="oui"){

document.getElementById("mask").style.display="block";

}
else{
    document.getElementById("mask").style.display="none";
}
 



     
 })
