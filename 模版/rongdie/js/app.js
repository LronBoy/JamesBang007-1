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

window.onload = function(){
  //返回按钮
  document.querySelector('.action-back').onclick = function(){  
    if(history.length>1){
      console.log(history.length);
      history.back(); //加载历史列表中的前一个 URL（如果存在）      
    }else{      
      window.location.assign('http://192.168.0.104:8020/rongdie/')
      console.log("无历史页面");
    }    
  };


};
