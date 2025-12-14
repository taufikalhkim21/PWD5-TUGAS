const downItem = document.querySelector(".down-item")
const navbarDown = document.querySelector(".nav-down")

downItem.addEventListener("click", () => {
    if (navbarDown.style.display === "block") {
        navbarDown.style.display = "none";
    } else {
        navbarDown.style.display = "block";
    }
})
