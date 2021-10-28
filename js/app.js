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
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).className = "fas fa-angle-down"
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.paddingLeft = '5.25px'
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.paddingRight = '5.25px'

    } else {
        document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "none"
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).className = "fas fa-angle-right"
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.paddingLeft = '6.5px'
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.paddingRight = '6.5px'
    }
}