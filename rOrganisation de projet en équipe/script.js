const products = [
  {
    nom: "T-shirt",
    prix: 20,
    promo: 15,
    image: "images/tshirt.jpg"
  },
  {
    nom: "Chaussures",
    prix: 80,
    promo: 60,
    image: "images/chaussures.jpg"
  },
  {
    nom: "Sac",
    prix: 50,
    promo: 35,
    image: "images/sac.jpg"
  }
];

const catalogue = document.getElementById("catalogue");

function afficherProduits(list) {
  catalogue.innerHTML = "";

  list.forEach(p => {
    catalogue.innerHTML += `
      <div class="card">
        <img src="${p.image}" alt="${p.nom}">
        <h3>${p.nom}</h3>
        <p class="old-price">${p.prix} €</p>
        <p class="promo-price">${p.promo} € 🔥</p>
      </div>
    `;
  });
}


afficherProduits(products);

document.getElementById("search").addEventListener("input", e => {
  const value = e.target.value.toLowerCase();

  const result = products.filter(p =>
    p.nom.toLowerCase().includes(value)
  );

  afficherProduits(result);
});
