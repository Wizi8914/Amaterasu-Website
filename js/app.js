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
        document.querySelector(`.listcommand:nth-child(${number}) ul`).style.transform = `translate(0, ${document.querySelector(`.listcommand:nth-child(${number}) ul`).childElementCount}px`
        document.querySelector(`.listcommand:nth-child(${number})`).style.height = `${(document.querySelector(`.listcommand:nth-child(${number}) ul`).childElementCount *23) + 64 }px`

        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.transform = "rotate(0deg)"

    } else {
        document.querySelector(`.listcommand:nth-child(${number}) ul`).style.overflow = "hidden"
        document.querySelector(`.listcommand:nth-child(${number})`).style.height = "64px"
        console.log(document.querySelector(`.listcommand:nth-child(${number}) ul`).childElementCount)
        
        setTimeout(() => {
            document.querySelector(`.listcommand:nth-child(${number}) ul`).style.transform = `translate(0, ${document.querySelector(`.listcommand:nth-child(${number}) ul`).childElementCount}px`
            document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "none"
        }, 500);
        
        
        document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.transform = "rotate(-90deg)"
    }
}

//=======================================      INPUT      ============================================

function search() {
    const content = document.querySelector('.searchboxitem').value.toLowerCase()

    const commandlist = []
    for (let i = 1; i < document.querySelector(".categorylist ul").childElementCount + 1; i++) {
        for (let u = 1; u < document.querySelector(`.listcommand:nth-child(${i}) ul`).childElementCount + 1; u++) {
            const p = document.querySelector(`.listcommand:nth-child(${i}) ul`).textContent.split("\n")
            commandlist.push(p[u].replace(/ /g, ""))
        }

    }
    for (let i = 0; i < commandlist.length; i++) {
        if (commandlist[i].includes(content) == true) {
            document.querySelectorAll(".commandlink")[i].style.display = "block"
        } else {
            document.querySelectorAll(".commandlink")[i].style.display = "none"
        }
        
    }
    let p = 0
    for (let i = 1; i < document.querySelector(".categorylist ul").childElementCount + 1; i++) {
        p = 0
        for (let u = 1; u < document.querySelector(`.listcommand:nth-child(${i}) ul`).childElementCount + 1; u++) {
            
            if (document.querySelector(`.listcommand:nth-child(${i}) ul li:nth-child(${u}) .commandlink`).style.display === "none") {
                p++
            }

        }
        if (p == document.querySelector(`.listcommand:nth-child(${i}) ul`).childElementCount) {
            document.querySelector(`.categorylist ul .listcommand:nth-child(${i})`).style.display = "none"
        } else {
            document.querySelector(`.categorylist ul .listcommand:nth-child(${i})`).style.display = "list-item"
        }
    }
}