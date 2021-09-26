<% 'create the email

For Field = 1 to Request.Form.Count 
FieldName = Replace(Request.Form.Key(Field),"_"," ")
FieldValue = Request.Form.Item(Field)
Body = Body & FieldName & ": " & FieldValue & VbCrLf
Next
Body =  "The following information was received from your web site " & vbcrlf & Body

'Dimension variables
Dim objCDOSYSCon
'Create the e-mail server object
Set objCDOSYSMail = Server.CreateObject("CDO.Message")
Set objCDOSYSCon = Server.CreateObject ("CDO.Configuration")
'Set and update fields properties
With objCDOSYSCon
'Outgoing SMTP server
.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserver") = "127.0.0.1"
.Fields("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25
'CDO Port
.Fields("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2
'Timeout
.Fields("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60
.Fields.Update
End With
'Update the CDOSYS Configuration
Set objCDOSYSMail.Configuration = objCDOSYSCon
'Set and update email properties
With objCDOSYSMail
'0=Low, 1=Normal, 2=High
.Fields("urn:schemas:httpmail:importance").Value = 1
'Who the e-mail is from
.From = Request.Form("customeremail")
'.From = ("test@home.com")
'Who the e-mail is sent to - add your email here
.To = "nbothe@gmail.com"
'Who the e-mail is CC'd to - add other email here
'.Cc = "anotheremail@whatever.com"
'The subject of the e-mail
.Subject = "Email from the Flash Web Site"
.TextBody = Body
.Fields.Update
'Send the e-mail
.Send
End With
'Close the server mail object
Set objCDOSYSMail = Nothing
Set objCDOSYSCon = Nothing
'Redirect after sending email. To use this, uncomment the line below and comment out the last line.
'Response.Redirect Request.Form("redirect_to")
'Response.Redirect ("mailresponse.asp")
'Alternatively you can display a thankyou message on this page
'Response.Write("<p align='center'<b>Thank you for your enquiry.</b><p>")
response.write("response=passed")
  %>
