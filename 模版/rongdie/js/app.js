function rem(){
  var html = document.documentElement;
  var hWidth = html.getBoundingClientRect().width;
  hWidth = hWidth>750 ? 750 : hWidth ;
  html.style.fontSize = hWidth/15 + "px";
}

(function(){
  rem();
})();

window.onresize = rem;

function formatSearch(se){  
    if (typeof se !== "undefined") {      
        se = se.substr(1);
        var arr = se.split("&"),
            obj = {},   
            newarr = [];
        arr.forEach(function(v, i){
        	newarr = v.split("=");
        	if(typeof obj[newarr[0]] === "undefined"){  
                obj[newarr[0]] = newarr[1];  
            }        	
        });
        return obj;
    };  
}

