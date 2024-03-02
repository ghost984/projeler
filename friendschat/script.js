 let menubtn = document.getElementById('menubtn')

 menubtn.addEventListener('click',function(e){
    document.querySelector('body').classList.toggle('mobile-nav-active');
    this.classList.toggle('fa-circle-xmark')
 })



  let typed = new Typed('.auto-input',{
   StringS: ['Front-End Devoleper', 'Freelance' , 'Desinger'],
   typeSpeed:100,
   backSpeed:100,
   backDelay:2000,
   loop: true,

 })
