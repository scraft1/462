var curr = localStorage.getItem("current");
if(curr){ // if curr is set ?? 
	document.getElementById('current').innerHTML = 'Logged in as: ' + curr;
}
else {
	document.getElementById('current').innerHTML = 'Not logged in';
}

// Logout button that calls localStorage.removeItem('current') or localStorage.clear()
function logout(){
	localStorage.removeItem('current');
	location.reload();
}


function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
