function buatajax(){ 
    if (window.XMLHttpRequest){ 
        return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
} 
function stateChanged(){ 
var data; 
    if (ajakL.readyState==4 && ajakL.status==200){ 
        data=ajakL.responseText; 
        if(data.length>0){ 
            document.getElementById("sugestibli").innerHTML = data; 
            document.getElementById("sugestibli").style.visibility = ""; 
        }else{ 
            document.getElementById("sugestibli").style.visibility = "hidden"; 
            document.getElementById("sugestibli").innerHTML = "";    
        } 
    }
} 
function kodbrg(m){ 
	document.getElementById("kbbeli").value = m;
	document.getElementById("sugestibli").style.visibility = "hidden"; 
    document.getElementById("sugestibli").innerHTML = "";    
}
function nambrg(n){
    document.getElementById("nbbeli").value = n; 
}

