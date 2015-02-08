var myJSON;

function setJSON(){
	$.ajax({
 		url: '../data.json',
  		async: false,
  		dataType: 'json',
  		success: function (response) {
    		// do stuff with response.
			myJSON = response;			
  		}
	});
	// getJSON with jquery
}



// fills table based on number of endorsements in JSON
function fillTable(){
	setJSON(); 
	for (var i = 0; i < myJSON.length; i++)
	{
		var link = document.createElement('a');
        link.setAttribute('href', "profile.html?"+myJSON[i].user);
		link.innerHTML="<li>"+myJSON[i].user+"</li>";			
		document.getElementById('list').appendChild(link);
	}		
}

function showProfile(u){
	setJSON();
	for (var i = 0; i < myJSON.length; i++)
	{
		if(myJSON[i].user === u){
			document.getElementById('name').innerHTML = "Name: "+myJSON[i].user;
		}
	}	
}
