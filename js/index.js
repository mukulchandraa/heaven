let btnsend = document.querySelector('button');
let inputclick = document.querySelector('input');
let btnborder = document.querySelector('btn');

btnsend.addEventListener('click', function(){
btnsend.innerText = 'sending...';
btnsend.style.fontSize ="smaller";
btnsend.style.fontWeight ="normal";
btnsend.style.background =" #0098c5";
setTimeout(() => {
    btnsend.innerHTML = 'Posted';
    btnsend.style.fontSize ="smaller";
    btnsend.style.fontWeight ="bold";
    btnsend.style.background ="green";
    btnsend.style.border ="none";
}, 2000);
});
inputclick.addEventListener('click', function(){
    btnsend.innerText ='Post';
    btnsend.style.fontSize ="medium";
    btnsend.style.fontWeight ="bold";
    btnsend.style.background="#0098c5"; 

})