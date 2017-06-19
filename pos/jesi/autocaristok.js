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
            document.getElementById("kanan").innerHTML = data; 
            document.getElementById("kanan").style.visibility = ""; 
        }else{ 
            document.getElementById("kanan").innerHTML = ""; 
            document.getElementById("kanan").style.visibility = "hidden"; 
        } 
    }
} 

