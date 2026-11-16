
const elements = document.querySelectorAll(".element");

const searchInput = document.getElementById("search-element");

const categoryButtons = document.querySelectorAll(".category-button");

const detailNumber = document.getElementById("detail-number");
const detailMass = document.getElementById("detail-mass");
const detailSymbol = document.getElementById("detail-symbol");
const detailName = document.getElementById("detail-name");
const detailCategory = document.getElementById("detail-category");

const detailAtomicNumber = document.getElementById("detail-atomic-number");
const detailAtomicMass = document.getElementById("detail-atomic-mass");

let activeCategory = "all";

const categoryNames = {
    "alkali-metal": "Alkali metal",
    "alkaline-earth-metal": "Alkaline-earth metal",
    "transition-metal": "Transition metal",
    "post-transition-metal": "Post-transition metal",
    "metalloid": "Metalloid",
    "nonmetal": "Nonmetal",
    "halogen": "Halogen",
    "noble-gas": "Noble gas",
    "lanthanide": "Lanthanide",
    "actinide": "Actinide"
};


// 1. Show the selected element's details

function showElementDetails(element) {

    const number = element.dataset.number;
    const symbol = element.dataset.symbol;
    const name = element.dataset.name;
    const mass = element.dataset.mass;
    const category = element.dataset.category;

    detailNumber.textContent = number;
    detailMass.textContent = mass;

    detailSymbol.textContent = symbol;
    detailName.textContent = name;

    detailCategory.textContent = categoryNames[category] || category;

    detailAtomicNumber.textContent = number;
    detailAtomicMass.textContent = mass;

    // Remove selection from all elements

    elements.forEach(function(item) {
        item.classList.remove("selected");
    });

    // Highlight clicked element

    element.classList.add("selected");
}


// 2. Click an element to show its details

elements.forEach(function(element) {

    element.addEventListener("click", function() {
        showElementDetails(element);
    });

});


// 3. Filter elements by category and search

function applyFilters() {

    const searchText = searchInput.value.toLowerCase().trim();

    elements.forEach(function(element) {

        const name = element.dataset.name.toLowerCase();
        const symbol = element.dataset.symbol.toLowerCase();
        const category = element.dataset.category;

        const matchesCategory =
            activeCategory === "all" ||
            category === activeCategory;

        const matchesSearch =
            name.includes(searchText) ||
            symbol.includes(searchText);

        if (matchesCategory && matchesSearch) {
            element.classList.remove("dimmed");
        } else {
            element.classList.add("dimmed");
        }

    });

}


// 4. Search elements

searchInput.addEventListener("input", function() {
    applyFilters();
});


// 5. Category buttons

categoryButtons.forEach(function(button) {

    button.addEventListener("click", function() {

        activeCategory = button.dataset.category;

        categoryButtons.forEach(function(item) {
            item.classList.remove("active");
        });

        button.classList.add("active");

        applyFilters();

    });

});


// 6. Show Hydrogen when the page first loads

const hydrogen = document.querySelector('.element[data-symbol="H"]');

if (hydrogen) {
    showElementDetails(hydrogen);
}
