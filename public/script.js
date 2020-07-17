function scrollWin() {
  window.scrollTo(0, 900);
  duration=400
}
setTimeout(scrollWin,3000);

document.addEventListener('scroll', ()=>{
  let navbar =document.querySelector('#navbar')

  if(window.scrollY>120){
      navbar.classList.add('bg-light')
  }else{
      navbar.classList.remove('bg-light')
  }
})