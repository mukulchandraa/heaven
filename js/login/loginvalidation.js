
document.getElementById('email').addEventListener('blur' , isValidate)
document.getElementById('email').addEventListener('keyup' , isValidate)
document.getElementById('password').addEventListener('blur' , isValidate)
document.getElementById('password').addEventListener('keyup' , isValidate)

 function isValidate(e) {

  if (e.target.value == '' && e.target.name === 'email' && document.getElementById(e.target.name +'Error' )) {

     document.getElementById(e.target.name +'Error').remove();    
     let currentElement = document.getElementById(e.target.id);      
     let Error = document.createElement('p');
     Error.setAttribute('class','Error')
     Error.setAttribute('id',e.target.name +'Error' )
     Error.innerText = e.target.name + " is required";
     currentElement.insertAdjacentElement('afterend',Error);             
        
    }  

  if (e.target.value === ''){
    if (!(document.getElementById(e.target.name +'Error'))) {
     let currentElement = document.getElementById(e.target.id);      
     let Error = document.createElement('p');
     Error.setAttribute('class','Error')
     Error.setAttribute('id',e.target.name +'Error' )
     Error.innerText = e.target.name + " is required";
     currentElement.insertAdjacentElement('afterend',Error); 
  }
   
  }
  else{


    if (e.target.value !=='') {
        if(document.getElementById(e.target.name +'Error')){
         document.getElementById(e.target.name +'Error').remove();
}
    }


    if (!(e.target.value.toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    )) && document.getElementById(e.target.name +'Error' ) && e.target.name === 'email') {

       document.getElementById(e.target.name +'Error').remove();    
      let currentElement = document.getElementById(e.target.id);      
     let Error = document.createElement('p');
     Error.setAttribute('class','Error')
     Error.setAttribute('id',e.target.name +'Error' )
     Error.innerText = 'Invailid email address';
     currentElement.insertAdjacentElement('afterend',Error);   
    
  }else{
    
    if (!(e.target.value.toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    )) && !(document.getElementById(e.target.name +'Error')) && e.target.name === 'email' ) {
     
     let currentElement = document.getElementById(e.target.id);      
     let Error = document.createElement('p');
     Error.setAttribute('class','Error')
     Error.setAttribute('id',e.target.name +'Error' )
     Error.innerText = 'Invailid email address';
     currentElement.insertAdjacentElement('afterend',Error); 
        
    }
     
  }
  

  } 
 }




