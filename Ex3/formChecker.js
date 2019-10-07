function checkItems () {

    let broomNum=document.getElementById("item1").value
    let caulNum=document.getElementById("item2").value
    let bookNum=document.getElementById("item3").value
    let userName=document.getElementById("name").value
    let pw=document.getElementById("pw").value

    let ship1=document.getElementById("ship1").checked
    let ship2=document.getElementById("ship2").checked
    let ship3=document.getElementById("ship3").checked

    if(userName=="" || pw=="")
    {
	alert("You must enter both username and password.");
	event.preventDefault();
    }

    else if(broomNum=="" || caulNum=="" || bookNum=="" )
    {
        alert("Empty fields not allowed. Enter 0 if you do not wish to purchase.");
   	event.preventDefault();
     }
    else if(ship1==false && ship2==false && ship3==false)
    {
	alert("You must choose a shipping method.");
	event.preventDefault();
    }   
    else
    {
	return(true);
    }
}

function checkuserPW() {
	let userName=document.getElementById("name").value
	let pw=document.getElementById("pw").value
	
	if(userName=="" || pw=="")
	{   
        alert("You must enter both username and password.");
	}
}

function returnToPreviousPage(){
	window.history.back();
}

function goBack() {
  window.history.go(-1);
}