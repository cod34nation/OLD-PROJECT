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
            document.getElementById("dastok").innerHTML = data; 
            document.getElementById("dastok").style.visibility = ""; 
        }else{ 
            document.getElementById("dastok").innerHTML = ""; 
            document.getElementById("dastok").style.visibility = "hidden"; 
        } 
    }
} 

