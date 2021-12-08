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

//=======================================      INPUT      ============================================

function search() {
    const content = document.querySelector('.searchboxitem').value

    const commandlist = []
    for (let i = 1; i < document.querySelector(".categorylist ul").childElementCount + 1; i++) {
        for (let u = 1; u < document.querySelector(`.listcommand:nth-child(${i}) ul`).childElementCount + 1; u++) {
            const p = document.querySelector(`.listcommand:nth-child(${i}) ul`).textContent.split("\n")
            commandlist.push(p[u].replace(/ /g, ""))
        }

    }
    const o = 0
    for (let i = 0; i < commandlist.length; i++) {
        if (commandlist[i].includes(content) == true) {
            document.querySelectorAll(".commandlink")[i].style.display = "block"
        } else {
            document.querySelectorAll(".commandlink")[i].style.display = "none"
        }
        
    }
    console.log(document.querySelectorAll(".commandlink")[0])

}