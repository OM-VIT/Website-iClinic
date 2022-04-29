try{
  System.out.println("OK1");
Random rad = new Random();
randomcode = rad.nextInt(100000);
String host = "smtp.gmail.com";
String user  = "chiraagarwal@gmail.com";
String pass=  "Chirag@23";
String to = txtemail.getText();
String subject = "Reseting code";
String message = "Your reset code is "+randomcode;
boolean sessionDebuge = true;
Properties prt = System.getProperties();
prt.put("mail.smtp.starttls.enable","true");
prt.put("mail.smtp.host", "host");
prt.put("mail.smtp.port","587");
prt.put("mail.smtp.auth", "true");
prt.put("mail.smtp.starttls.required","true");
prt.put("mail.smtp.socketFactory.port", 587);
prt.put("mail.smtp.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
prt.put("mail.smtp.socketFactory.fallback", "false");
System.out.println("OK2");

java.security.Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());
Session session = Session.getDefaultInstance(prt,null);
session.setDebug(sessionDebuge);
Message msg = new MimeMessage(session);

msg.setFrom(new InternetAddress(user));
System.out.println("OK2.1");


InternetAddress [] add = {new InternetAddress(to)};
msg.setRecipient(Message.RecipientType.TO,  new InternetAddress(to));
msg.setSubject(subject);
msg.setText(message);
msg.saveChanges();
System.out.println("OK2.2");
Transport transport =  session.getTransport("smtp");
transport.connect(host,user,pass);
System.out.println("OK2.3");
transport.sendMessage(msg,msg.getAllRecipients());
transport.close();
JOptionPane.showMessageDialog(null,"code has been send to email");
System.out.println("OK3");


    
    
}  catch (MessagingException ex) {
Logger.getLogger(forget_password.class.getName()).log(Level.SEVERE, null, ex);

 
}