let panier_actuel = {
    
    ajoutes: 0,
    produits: []
    
};


function display_panier_logo() {
    
    const div = document.querySelector("#panier_logo").innerHTML = "Panier (" + panier_actuel.ajoutes + ")";
    
}



function acheter(id) {
    
    let was_found = false;
    
    produits.forEach(produit => {
        if (produit.id === id) {
            produit.quantity+= 1;
            was_found = true;
        }
        
        if (!was_found) {
            panier_actuel.produits.push({ id: produit.id, quantity: 1});
            
        }
        
        panier_actuel.ajoutes++;
    });
    
    
    display_panier_logo();
    save_panier();
}

function save_panier(){
    
    localStorage.setItem('panier_actuel', JSON.stringify(panier_actuel));
    
}

function load_panier() {
    
    const saved_panier = JSON.parse(localStorage.getItem('panier_actuel'));
    
    if (saved_panier !== undefined && saved_panier !== null)
    panier_actuel = saved_panier;
    
    display_panier_logo();
    
}

load_panier();


function display_panier(){
    
    const panier_contenu = document.querySelector('#panier_contenu');

    panier_actuel.produits.forEach(produit => {
        console.log(produit);
        panier_contenu.innerHTML += "<tr><td>"
       + produit.titre + "</td> <td>"
       + produit.quantity + "</td> <td>"       
       + produit.prix + "</td> <tr>"        
        
    });
    
}

display_panier();