
let form = document.querySelector("form");


form.addEventListener("submit", function(e) {
    e.preventDefault(); 


    let title = document.getElementById("title-id").value;
    let author = document.getElementById("author-id").value;
    let year = document.getElementById("year-id").value;
    let price = document.getElementById("price-id").value;
    let available = document.getElementById("available-id").checked;

   
    let book = {
        code, title, author, year, price, available
    };


if (window.opener && window.opener.open){
    window.opener.ajouter(livre);
    alert("livre ajoute");
    window.close();
}
else{
    alert("pas ajoute");
}

});



ajouter() ;