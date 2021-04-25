function check (element) {
	var a = element.innerHTML;
    var b = a.charAt(0);
  	if(b == 'R'){
  		 alert('You registrated');
  		//document.getElementById('alert').style.display = "block";
  	}

}
function LOG(element){
	var a = element.innerHTML;
    var b = a.charAt(0);
    if(b =='L'){
    	alert("Welcome you join to account ");
			window.open('','_parent','');
			window.close();
   		// document.location.reload(true);
    }
}
// function show(){
// 	this.parentElement.style.display='none'; 
// 	document.location.reload(true)
// }
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});