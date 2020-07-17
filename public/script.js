/* function scrollWin() {
  window.scrollTo(0, 900);
  duration=400
}
setTimeout(scrollWin,3000); */

document.addEventListener('scroll', ()=>{
  let navbar =document.querySelector('#navbar')

  if(window.scrollY>670){
      navbar.classList.add('bg-navbar')
  }else{
      navbar.classList.remove('bg-navbar')
  }
})