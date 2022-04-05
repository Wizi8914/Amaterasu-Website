let cursor = document.querySelector('.cursor');
console.log(window.innerHeight)
document.addEventListener('mousemove', e => {


    if (e.pageY == 0 || e.pageY > (window.innerHeight - 20) || e.pageX == 0 || e.pageX > (window.innerWidth - 16)) {
        document.querySelector('.cursor').style.display = 'none'
        document.querySelector('.grid').style.cursor = "default"
    } else {
        document.querySelector('.cursor').style.display = 'block'
        document.querySelector('.grid').style.cursor = "none"
    }

    document.querySelector('.cursor').style.top = `${e.pageY}px`
    document.querySelector('.cursor').style.left = `${e.pageX - 4}px`
});

document.addEventListener("mouseover", (p) => {
    let u = []
    function push(m) {
        document.querySelectorAll(m).forEach(element => {
            u.push(element)
        })
    }

    push("a")
    push("button")
    push("i")
    push(".header__navbar--logo--amaterasu")
    push(".header__navbar--logo--name")
    push(".arrow span")
    push(".doc")
    push(".addbot")

    if (u.includes(p.target)) {
        document.getElementById("cursor").src = "../assets/cursor/hand.png"
    } else {
        document.getElementById("cursor").src = "../assets/cursor/normal.png"
    }
})
