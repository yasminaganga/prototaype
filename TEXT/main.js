

const library = [
    { code: 12, title: "Clean Code", author: "Robert C. Martin", year: 2008, available: true, price: 150 },
    { code: 45, title: "Eloquent JavaScript", author: "Marijn Haverbeke", year: 2018, available: true, price: 200 },
];


document.getElementById("add").addEventListener("click", function() {
    window.open("add.html", "_blank", "width=500,height=600");
});

function display(filtered = library) {
    let bookList = document.getElementById("book-list");
    bookList.innerHTML = "";

    filtered.forEach(book => {
        let card = document.createElement("div");
        card.classList.add("card");
        bookList.appendChild(card);

        card.innerHTML = `
            <h1>BOOK</h1>
            <p>Title: ${book.title}</p>
            <p>Author: ${book.author}</p>
            <p>Year: ${book.year}</p>
            <p>Price: ${book.price}</p>
            <p>Status: ${book.available ? "Available" : "Not available"}</p>
        `;


        let btn = document.createElement("button");
        btn.classList.add("btn");
        btn.textContent = "Delete";
        card.appendChild(btn);
        btn.addEventListener("click", function() {
            removeBook(book.code);
        });
    });

    updateStatistics();
}


function removeBook(code) {
    for (let i = 0; i < library.length; i++) {
        if (library[i].code === code) {
            library.splice(i, 1);
            break;
        }
    }
    display();
}


let searchInput = document.getElementById("search");
searchInput.addEventListener("input", function() {
    let text = searchInput.value.toLowerCase();
    let filtered = library.filter(book => book.title.toLowerCase().includes(text));
    display(filtered);
});


function updateStatistics() {
    let availableCount = 0;
    library.forEach(book => {
        if (book.available) availableCount++;
    });

    document.getElementById("statistics").innerText =
        `Available: ${availableCount}, Total: ${library.length}`;
}


function addBook(book) {
    library.push(book);
    display();
}


display();
