<HTML>
    <HEAD>
        <meta charset="UTF-8">
        <title>Сайт веб-студії "WebDECO"</title>
        <script src="js/clock1.js"></script>
        <script type="text/javascript">
            function send()
            {  var valid = true;
               var elems = document.forms[0].elements;
               for(var i=0; i<document.forms[0].lenght; i++){
                  if(elems[i].getAttribute('type') == 'text' ||
                  elems[i].getAttribute('type') == 'password' ||
                  elems[i].getAttribute('type') == 'email'){
                     if (elems[i].value == '') {
                        elems[i].style.border = '2px solid red';
                        valid = false;
                     }
                  }
               }
               if(!valid){
                  alert('Заповніть всі поля !!!');
                  return false;
               }
            }
            
            </script>
        <style>
            .shadowtext {
            text-shadow: 1px 3px 2px white, 0 0 1em red;
                color: #210042;
                font-size: 2em;
               }
        </style>
        <script>
            window.onload = function(){
               setInterval(clockPainting, 1000)
            }
            function clockPainting() {
                 var now = new Date();
                 var sec = now.getSeconds();
                 var min = now.getMinutes();
                 var hr = now.getHours();
         
                 var ctx = document.getElementById("canvas").getContext("2d");
                 ctx.save();// помещаем текущий контекст в стэк
         
                 ctx.clearRect(0,0,150,150);
                 ctx.translate(75, 75);
                 ctx.scale(0.4,0.4);
                 ctx.rotate(-Math.PI/2);
         
                 ctx.strokeStyle = "black";
                 ctx.fillStyle = "black";
                 ctx.lineWidth = 8;
                 ctx.lineCap = "round";
         
                 ctx.save();
                 ctx.beginPath();
         
                 for (var i = 0; i < 12; i++) {
                     ctx.rotate(Math.PI/6);
                     ctx.moveTo(100,0);
                     ctx.lineTo(120,0);
                 }
         
                 ctx.stroke();// нарисовали то, что ранее описали
                 ctx.restore();// достаем последний сохраненный контекст из стэка
         
                 ctx.save();
                 // рисуем часовую стрелку, вращая холст
                 ctx.rotate((Math.PI/6)*hr +
                     (Math.PI/360)*min +
                     (Math.PI/21600)*sec);
                 ctx.lineWidth = 14;
         
                 ctx.beginPath();
                 ctx.moveTo(-20,0);
         
                 // линия почти до часовых меток
                 ctx.lineTo(80,0);
                 ctx.stroke();
                 ctx.restore();
         
                 ctx.save();
         
                 // минутная стрелка
                 ctx.rotate((Math.PI/30*min) +
                     (Math.PI/1800)*sec);
                 ctx.lineWidth = 10;
         
                 ctx.beginPath();
                 ctx.moveTo(-28,0);
                 ctx.lineTo(112,0);
                 ctx.stroke();
                 ctx.restore();
         
                 ctx.save();
         
                 // секундная стрелка
                 ctx.rotate(sec * Math.PI/30);
                 ctx.strokeStyle = "#D40000";// цвет контура
                 ctx.fillStyle = "#D40000";
                 ctx.lineWidth = 6;
         
                 ctx.beginPath();
                 ctx.moveTo(-30,0);
                 ctx.lineTo(83,0);
                 ctx.stroke();
                 ctx.restore();
         
                 ctx.restore();
             }
         </script>
    </HEAD>
    <body background="images/bg.jpg">
        <table border="1" align="center" cellpadding="10">
            <tr>
                <td background="images/bg-3.jpg"  colspan="2" heigh="150" align="right" hspace="5">
                    <font size="5" color="Maroon"><h1 class="shadowtext"><center>Сайт web-студіїї "Web-DECO"</center></h1></font>
                </td>
            </tr>
            <tr>
                <td colspan="2"><font size="4"><b>
                    <a href="#">Головна</a>&nbsp;&nbsp;
                    <a href="#">Фотогалерея</a>&nbsp;&nbsp;
                    <a href="#">Телефони</a>&nbsp;&nbsp;
                    <a href="#">Статистика</a>&nbsp;&nbsp;
                    <a href="#">Зареєстровані</a>&nbsp;&nbsp;
                    </b>
                    </font></td>
            </tr>
            <tr>
                <td width="30%" valign="top">
                    <center><canvas id="canvas" height="120" width="120"></canvas></center>
                    <hr>
                    <font size="5" color="navy"><h2>Новини</h2></font> 
                    <font sise="5">
                  <ul>
                   <li><a href="#">Сайт будівельної компанії</a></li>
                   <li><a href="#">Сайт ТМ "Новашкола"</a></li>
                   <li><a href="#">Редизайн сайту classno clasno.com ua</a></li>
                   <li><a href="#">Розробка CMS для Metro Cash&Carry</a></li>
                   <li><a href="#">Сайт-візитка дизайнера інтерфейсів</a></li>
               <p align="right"><a href="#">інші...</a> </p>
                  </ul>
                  </font><hr>
                  <H1 align="center"><font color="green">Реєстрація</font></H1>
                  <form action="forma.php" method="post" onsubmit="return send() ;">
                  <TABLE align="center" bgcolor="#ccc">
                  <TR>
                  <TD><font color="green">Прізвище</font>: </TD>
                  <TD><input type="text" size="10" maxlenght="20" name="name2"> </TD>
                  </TR>
                  
                  <TR>
                     <TD><font color="green">Ім'я</font>: </TD>
                     <TD><input type="text" size="10" maxlenght="20" name="name1"> </TD>
                   </TR>
                  
                   <TR>
                     <TD><font color="green">E-Mail</font>: </TD>
                     <TD><input type="email" size="10" maxlenght="20" name="email"> </TD>
                     </TR>
                  
                     <TR>
                        <TD><font color="green">Пароль</font>: </TD>
                        <TD><input type="password" size="10" maxlenght="20" name="password"> </TD>
                        </TR>
                  </TABLE>
                  
                  <p align="center">
                  <input type="submit" value="Зареєструватись">
                  <input type="reset" value="Очистити">
                  </p>
                  
                  </form>
                  <hr>
                </td>
                <td width="70%" valing='top'>
                    <h1 align="center">Дякуємо за реєстрацію!</h1>
                    <?php
                    $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
                    
                    $fp = fopen("baza.txt","a");
                    $test = fwrite($fp,$st);
                    echo "<h2 aling='center' >Ви ввели :".$_POST['name2'].",".$_POST['name1'].",".$_POST['email'].",".$_POST['password']."</h2>";
                    ?>
                    </h1>
                   </td>
            </tr>
            <tr>
                <td colspan="2" background="images/bg-3.jpg" valign="middle" height="90">
                    <font size="4">Сайт розробила "Shylan Valentyna"</font>
                </td>
            </tr>
        </table>
    </body>
</HTML>