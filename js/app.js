//=========================    LOADER    ==========================


window.addEventListener("load", () => {
    document.querySelector(".loader").classList.add("fondu-out");
    setTimeout(() => {
        document.querySelector(".loader").remove();
    }, 400);

});

//=======================================  FIX  ====================================

function load() {
    for (let i = 1; i < document.querySelector(".categorylist ul").childElementCount + 1; i++) {
        document.querySelector(`.listcommand:nth-child(${i})`).style.height = `${(document.querySelector(`.listcommand:nth-child(${i}) ul`).childElementCount *22) + 75 }px`
        
    }
}

//===============================    COMMAND LIST    =========================================
let wait = 0;
function list(number) {
    if (wait == 0) {
        if(document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display === "none") {
            wait = 1
            document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "list-item"

            console.log(document.querySelector(`.listcommand:nth-child(${number}) ul li:nth-child(3) a`));
            
            let a = 0;
            for (let j = 1; j < document.querySelector(`.listcommand:nth-child(${number}) ul `).childElementCount +1; j++) {
                if (document.querySelector(`.listcommand:nth-child(${number}) ul li:nth-child(${j}) a`).style.display === "block") {
                    a++
                } 
            }

            document.querySelector(`.listcommand:nth-child(${number})`).style.height = `${(a*22) + 75 }px`

    
            document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.transform = "rotate(0deg)"
            setTimeout(() => {
                wait = 0;
            }, 500);
    
        } else {
            wait = 1
            document.querySelector(`.listcommand:nth-child(${number})`).style.height = "64px"
            setTimeout(() => {
                document.querySelector(`.listcommand:nth-child(${number}) ul`).style.display = "none"
                wait = 0
            }, 500);
            
            
            document.querySelector(`.listcommand:nth-child(${number}) button .arrow i`).style.transform = "rotate(-90deg)"
        }
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

            let a = 0;
            for (let j = 1; j < document.querySelector(`.listcommand:nth-child(${i}) ul `).childElementCount +1; j++) {
                if (document.querySelector(`.listcommand:nth-child(${i}) ul li:nth-child(${j}) a`).style.display === "block") {
                    a++
                } 
            }

            document.querySelector(`.listcommand:nth-child(${i})`).style.height = `${(a*22) + 75 }px`
        }
    }

}