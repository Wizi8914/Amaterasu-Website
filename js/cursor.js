let cursor = document.querySelector('.cursor');

console.log(cursor)

document.addEventListener('mousemove', (e) => {
    document.querySelector('.cursor').style.top = `${e.pageY}px`
    document.querySelector('.cursor').style.left = `${e.pageX - 4}px`
});