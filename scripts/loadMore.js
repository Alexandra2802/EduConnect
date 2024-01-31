const loadmore = document.querySelector('.load-more')

let currentItems = 2
loadmore.addEventListener('click',function(e){
    const elementList = [...document.querySelectorAll('.post li')]
    for(let i = currentItems; i < currentItems + 2; i++){
        if(elementList[i]){
            elementList[i].style.display = 'flex'
        }
    }
    currentItems += 2;
    //hide load more button after fully loaded
    if(currentItems >= elementList.length){
        e.target.classList.add('loaded')
    }
})