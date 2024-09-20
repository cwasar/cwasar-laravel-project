import './bootstrap';
document.getElementsByTagName("select").selectedIndex = -1;

const bgInfo = document.querySelector('.bg-success')

if(bgInfo) {
    bgInfo.style.transition = 'all 0.5s ease'
    setTimeout(() => {

        bgInfo.classList.remove('bg-success')
    }, 1000)
}
