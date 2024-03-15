const searchbar=document.querySelector(".search-bar-container");
const magnifier=document.querySelector(".magnifier");

magnifier.addEventListener("click", () => {
    searchbar.classList.toggle("active");
});