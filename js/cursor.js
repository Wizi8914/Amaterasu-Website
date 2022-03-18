let cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    document.querySelector('.cursor').style.top = `${e.pageY}px`
    document.querySelector('.cursor').style.left = `${e.pageX - 4}px`
    document.querySelector('.cursor').style.display = 'block'
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

    console.log(u)

    if (u.includes(p.target)) {
        document.getElementById("cursor").src = "./assets/cursor/hand.png"
    } else {
        document.getElementById("cursor").src = "./assets/cursor/normal.png"
    }
})
