const bibliotheque = [];
document.getElementById("ajouter").addEventListener("click", function() {
  window.open("ajouter.html");
});

let ordreCroissant = true;

let btnTrier = document.createElement("button");
btnTrier.textContent = "Trier (A→Z)";
btnTrier.classList.add("btn");
document.body.appendChild(btnTrier);

btnTrier.addEventListener("click", function() {
  ordreCroissant = !ordreCroissant; 
  trierLivres(); 
});

function trierLivres() {
  bibliotheque.sort((a, b) => {
    if (ordreCroissant) {
      return a.titre.localeCompare(b.titre);
    } else {
      return b.titre.localeCompare(a.titre);
    }
  });

  btnTrier.textContent = ordreCroissant ? "Trier (A→Z)" : "Trier (Z→A)";
  afficher(); 
}


let btnCher = document.createElement("button");
btnCher.textContent = "Livre le plus cher";
btnCher.classList.add("btn");
document.body.appendChild(btnCher);

btnCher.addEventListener("click", afficherLivreLePlusCher);

function afficherLivreLePlusCher() {
  if (bibliotheque.length === 0) return;

  let cher = bibliotheque[0];
  for (let livre of bibliotheque) {
    if (livre.prix > cher.prix) cher = livre;
  }

  let listes = document.getElementById("listeslivres");
  listes.innerHTML = `
    <div class="carte livre-cher">
      <h1>📌 الكتاب الأغلى</h1>
      <p>Nom : ${cher.titre}</p>
      <p>Auteur : ${cher.auteur}</p>
      <p>Année : ${cher.annee}</p>
      <p>Prix : ${cher.prix}</p>
      <p>Status : ${cher.checkbox ? "🟢 Disponible" : "🔴 Réservé"}</p>
    </div>
  `;
}

function afficher(filtres = bibliotheque) {
  let listes = document.getElementById("listeslivres");
  listes.innerHTML = "";

  filtres.forEach(livre => {
    let carte = document.createElement("div");
    carte.classList.add("carte");
    listes.appendChild(carte);

    carte.innerHTML = `
      <h1>LE LIVRE</h1>
      <p>Nom : ${livre.titre}</p>
      <p>Auteur : ${livre.auteur}</p>
      <p>Année : ${livre.annee}</p>
      <p>Prix : ${livre.prix}</p>
      <p>Status : ${livre.checkbox ? "🟢 Disponible" : "🔴 Réservé"}</p>
    `;

    let btnSup = document.createElement("button");
    btnSup.textContent = "Supprimer";
    btnSup.classList.add("btn");
    carte.appendChild(btnSup);
    btnSup.addEventListener("click", () => supprimer(livre.code));

    if (livre.checkbox) {
      let btnReserver = document.createElement("button");
      btnReserver.textContent = "Réserver";
      btnReserver.classList.add("btn");
      carte.appendChild(btnReserver);
      btnReserver.addEventListener("click", () => reserver(livre.code));
    } else {
      let label = document.createElement("span");
      label.textContent = "📕 Réservé";
      label.classList.add("label-reserve");
      carte.appendChild(label);
    }
  });

  statistic();
}


function supprimer(code) {
  for (let i = 0; i < bibliotheque.length; i++) {
    if (bibliotheque[i].code === code) {
      bibliotheque.splice(i, 1);
      break;
    }
  }
  afficher();
}

function reserver(code) {
  for (let livre of bibliotheque) {
    if (livre.code === code && livre.checkbox) {
      livre.checkbox = false;
      break;
    }
  }
  afficher();
}

let search = document.getElementById("search");
search.addEventListener("input", function() {
  let text = search.value.toLowerCase();
  let filtres = bibliotheque.filter(livre =>
    livre.titre.toLowerCase().includes(text)
  );
  afficher(filtres);
});

function statistic() {
  let dispo = bibliotheque.filter(l => l.checkbox).length;
  document.getElementById("statistic").innerText =
    `Disponibles : ${dispo} , Total : ${bibliotheque.length}`;
}

function ajouter(livre) {
  bibliotheque.push(livre);
  afficher(bibliotheque);
}
