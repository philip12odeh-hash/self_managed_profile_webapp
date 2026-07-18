<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<h1 class="heads" id="h1">This is a heading</h1>
<p class ="paras" id="p1">This is a paragraph.</p>
<h1 class="heads" id="h2">This is a heading</h1>
<p class ="paras" id="p2">This is a paragraph.</p>
<h1 class="heads" id="h3">This is a heading</h1>
<p class ="paras" id="p3">This is a paragraph.</p>
<h1 class="heads" id="h4">This is a heading</h1>
<p class ="paras" id="p4">This is a paragraph.</p>



<script>

p = document.getElementsByClassName("paras");
h = document.getElementsByClassName("heads");
for(i=0; i<p.length; i++){
	p[i].addEventListener("click", id_giver);
	h[i].addEventListener("click",id_giver);
	
}
function id_giver(){
	alert(p[i]);
}
alert("helloworld");
</script>

</body>
</html>