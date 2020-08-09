const menu = type =>  {
    const navigation = document.getElementById('navigation');

    if (navigation.classList.contains('show')) {
        navigation.classList.remove('show');
        navigation.classList.add('hide');
    } else {
        navigation.classList.remove('hide');
        navigation.classList.add('show');
    }

}


const mouseCursor = document.getElementById('cursor');
const linkGrow = document.getElementById('link__grow');

window.addEventListener('mousemove', event => {
    mouseCursor.style.display = 'block';
    mouseCursor.style.top = (event.pageY - 10) + 'px';
    mouseCursor.style.left = (event.pageX - 10) + 'px';
});

linkGrow.addEventListener('mouseover', event => {
    event.target.innerHTML = event.target.innerText.replace(/([\w]+)/g, '<span>$1</span>');
    // event.target.innerHTML = event.target.innerText.replace(/([\w]+)/g, '<span>$1</span>');
    
    mouseCursor.classList.add('link__grow');
});
linkGrow.addEventListener('mouseleave', event => {
    mouseCursor.classList.remove('link__grow');
    // linkGrow.classList.remove('link_item');
});
