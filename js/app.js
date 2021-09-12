//=========================    LOADER    ==========================
window.addEventListener("load", () => {
    document.querySelector(".loader").classList.add("fondu-out");
    setTimeout(() => {
        document.querySelector(".loader").remove();
    }, 400);
});

//===============================    COMMAND LIST    =========================================

function musiclist() {

    if(document.querySelector(".listcommand:nth-child(1) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(1) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(1) ul").style.display = "none"
    }
}

function diverslist() {

    if(document.querySelector(".listcommand:nth-child(2) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(2) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(2) ul").style.display = "none"
    }
}

function utilitairelist() {

    if(document.querySelector(".listcommand:nth-child(3) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(3) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(3) ul").style.display = "none"
    }
}

function moderationlist() {

    if(document.querySelector(".listcommand:nth-child(4) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(4) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(4) ul").style.display = "none"
    }
}

function nsfwlist() {

    if(document.querySelector(".listcommand:nth-child(5) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(5) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(5) ul").style.display = "none"
    }
}

function interactionlist() {

    if(document.querySelector(".listcommand:nth-child(6) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(6) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(6) ul").style.display = "none"
    }
}

function animelist() {

    if(document.querySelector(".listcommand:nth-child(7) ul").style.display === "none") {
        document.querySelector(".listcommand:nth-child(7) ul").style.display = "list-item"
    } else {
        document.querySelector(".listcommand:nth-child(7) ul").style.display = "none"
    }
}