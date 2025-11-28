const catalog = document.querySelector(".catalog");

let products = [];


fetch("prd.json")
  .then(res => res.json())
  .then(data => {
    products = data.products;
    show(products);
  });


function show(list) 
{
  catalog.innerHTML = "";  

  list.forEach(p => {
    let carte = document.createElement("div");
    carte.className = "carte";

    carte.innerHTML = 
    `
      <img src="${p.image}" alt="${p.nom}">
      <h3>${p.nom}</h3>
      <p class="old-price">${p.prix} €</p>
      <p class="promo-price">${p.promo} € 🔥</p>
    `;

    catalog.appendChild(carte);
  });
}


let search = document.getElementById("search_1");

search.addEventListener("input", function () {
  let text = search.value.toLowerCase();
  let filtres = products.filter(prd => prd.nom.toLowerCase().includes(text));
  show(filtres);
});
