//=========================    LOADER    ==========================
window.addEventListener("load", () => {
    document.querySelector(".loader").classList.add("fondu-out");
    setTimeout(() => {
        document.querySelector(".loader").remove();
    }, 400);
});

//===============================    COMMAND LIST    =========================================

function list(number) {

    if(document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display === "none") {
        document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "list-item"
        document.querySelector(`.listcommand:nth-child(${number})>button>.test>i`).className = "fas fa-angle-down"
    } else {
        document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "none"
        document.querySelector(`.listcommand:nth-child(${number})>button>.test>i`).className = "fas fa-angle-right"
    }
}