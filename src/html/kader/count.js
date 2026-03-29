(function(document){
var countEl = document.getElementById("COUNTbox"),
    minus = document.getElementById("count_minus"),
    plus = document.getElementById("count_plus");   
plus.onclick = function(){
	count=countEl.value;
    count++;
    countEl.value = count;
}
minus.onclick = function(){
	count=countEl.value;
    count--;
    countEl.value = count;
}
}(document));
