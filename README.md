Notch
=====

A simple blogging platform. Notch is currently still in the development process and the current build lacks many crucial features of a complete blogging platform.

<b>Installation:</b><br>
1. Download the repo.<br>
2. Upload it to your web server.<br>
3. Go to the homepage of your web server.<br>
4. Follow the installation wizard.<br>
<br>
<b>User Databse Setup:</b><br>
1. Login to mysql.exe on your webserver<br>
2. Create a database<br>
3. CREATE TABLE(id int primary key auto increment, user varchar(20), pass varchar(32))
4. INSERT INTO users(user,pass) VALUES('[username]','[password in md5]')<br>
