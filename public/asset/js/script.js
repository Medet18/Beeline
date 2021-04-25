function change(element){
    var a = element.innerHTML;
    var b = a.charAt(0);
   	if('H' == b || b == 'Д' || b == 'Ү'){
        switch(b) {
          case 'H': document.getElementById('heading').innerHTML = "Beeline"; break;
          case 'Д': document.getElementById('heading').innerHTML = "Билайн"; break;
          case 'Ү': document.getElementById('heading').innerHTML = "Билайн"; break;
        }
   		document.getElementById('home').style.display = "flex";
        document.getElementById('movies_list').style.display = "none";
        document.getElementById('service').style.display = "none";
	    document.getElementById('plan').style.display = "none";
	    document.getElementById('contact').style.display = "none";
        document.getElementById('adduser').style.display = "none";
    }
    else if(b == 'B' || b == 'Б' || a == 'БиTV'){
        // switch(b) {
        //   case 'B': document.getElementById('heading').innerHTML = "BeeTV"; break;
        //   case 'Б': document.getElementById('heading').innerHTML = "БиTV"; break;
        //   default: document.getElementById('heading').innerHTML = "БиТВ"; 
        // }
        if(b == 'B'){document.getElementById('heading').innerHTML = "BeeTV";}
        else if(b == 'Б'){document.getElementById('heading').innerHTML = "БиТВ";}
        else{document.getElementById('heading').innerHTML = "БиTV";}

	    document.getElementById('home').style.display = "none";
	    document.getElementById('movies_list').style.display = "flex";
    	document.getElementById('service').style.display = "none";
	    document.getElementById('plan').style.display = "none";
	    document.getElementById('contact').style.display = "none";
        document.getElementById('adduser').style.display = "none";
	    
    }
    else if(b == 'S' || b == 'У' || b == 'Қ'){
         switch(b) {
          case 'S': document.getElementById('heading').innerHTML = "Servise"; break;
          case 'У': document.getElementById('heading').innerHTML = "Услуги"; break;
          case 'Қ': document.getElementById('heading').innerHTML = "Қызметтер";break;
        }
    	document.getElementById('home').style.display = "none";
	    document.getElementById('movies_list').style.display = "none";
    	document.getElementById('service').style.display = "flex";
	    document.getElementById('plan').style.display = "none";
	    document.getElementById('contact').style.display = "none";
        document.getElementById('adduser').style.display = "none";
	    
    }
    else if(b == 'P' || b == 'П' || b == 'Ж'){
    	  if(b == 'P'){document.getElementById('heading').innerHTML = "Plan";}
          else if(b == 'Ж'){document.getElementById('heading').innerHTML = "Жоспар";}
          else{document.getElementById('heading').innerHTML = "План";}
        
    	document.getElementById('home').style.display = "none";
    	document.getElementById('movies_list').style.display = "none";
    	document.getElementById('service').style.display = "none";
	    document.getElementById('plan').style.display = "flex";
	    document.getElementById('contact').style.display = "none";
        document.getElementById('adduser').style.display = "none";
	    
    }
    else if(b == 'C' || b == 'К'){
    	 if(b == 'C'){document.getElementById('heading').innerHTML = "Contact";}
          else if(b == 'К'){document.getElementById('heading').innerHTML = "Контакт";}
          else{document.getElementById('heading').innerHTML = "Контакт";}

    	document.getElementById('home').style.display = "none";
		document.getElementById('movies_list').style.display = "none";
    	document.getElementById('service').style.display = "none";
	    document.getElementById('plan').style.display = "none";
	    document.getElementById('contact').style.display = "flex";
        document.getElementById('adduser').style.display = "none";
   
    }

}
function show(element){
    var a = element.innerHTML;
    var b = a.charAt(0);
    //this is li киру
    if(b == 'L'|| b == 'Л' || b == 'К'){
        document.getElementById('log').style.display = "none";
        document.getElementById('user').style.display = "flex";
        document.getElementById('logout').style.display = "flex";    
    }
    //this li выход
    else if(b == 'O' || b == 'В' || b == 'Ш'){
        //alert("Are you sure for logout right now!");
        Swal.fire({
          title: 'Are you sure?',
          text: "What do you want to sign out of your account",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, log out!'
        }).then((result) => {
          if (result.isConfirmed) {
            // Swal.fire(
            //   'Deleted!',
            //   'Your file has been deleted.',
            //   'success'
            // )
            document.location.reload(true);
          }
        })
        //document.location.reload(true);
    }

    //this is  sectin  колданушы
    else if(b == 'U' || b == 'П' || b == 'Қ'){
        switch(b) {
          case 'U': document.getElementById('heading').innerHTML = "User"; break;
          case 'П': document.getElementById('heading').innerHTML = "Пользватель"; break;
          case 'Қ': document.getElementById('heading').innerHTML = "Қолданушы";break;
        }
        // document.getElementById('home').style.display = "none";
        // document.getElementById('movies_list').style.display = "none";
        // document.getElementById('service').style.display = "none";
        // document.getElementById('plan').style.display = "none";
        // document.getElementById('contact').style.display = "none";
        // document.getElementById('adduser').style.display = "flex";
    }
}


$(document).ready(function(){

    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('load scroll',function(){
        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');
    });

});


const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});