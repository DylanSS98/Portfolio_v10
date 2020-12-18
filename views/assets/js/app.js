/* js burger */
$(document).ready(function (){
    $('.btn-nav').click(function (){
        $(this).find('.barre').toggleClass('white');
        $('.navigation').toggleClass('isOpen');
    });
});


/* js loader */

function showContent(){
    document.querySelector('.loader_container').classList.add('hidden');
}
setTimeout(showContent, 3000);


/* js scroll visible */


const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio){
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        }
    })
}

const observer =  new IntersectionObserver(handleIntersect, options);
document.querySelectorAll('.reveal').forEach(function (r){
    observer.observe(r)
})


/* anti select */

function ffalse() {
    return false;
}
function ftrue() {
    return true;
}
document.onselectstart = new Function("return false");
if (window.sidebar) {
    document.onmousedown = ffalse;
    document.onclick = ftrue;
}




/* anticlick */

document.oncontextmenu = new Function("return false");