 <section class="main">
        <ul class="news">
            <li class="class1">

                <h2>Заголовок 1</h2>
                <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
                    Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.
                    В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum
                    для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков,
                    но и перешагнул в электронный дизайн.
                    Его популяризации в новое время
                    послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время,
                    программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.
                    <a href="#">Читать далее</a></p>


            </li>
            <li>
                <ul class="another-news">
                    <li><h3>Заголовок 2</h3><br>
                        <a href="#">Читать далее</a></li>
                    <li><h3>Заголовок 3</h3><br>
                        <a href="#">Читать далее</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <section class="sec"><div class="overlay"><div class="modal"></div></div>
    </section>
    <button onclick="loadphones()">нажать</button>
 <script>
     function loadphones() {
         var chislo=5;
         var xhr = new XMLHttpRequest();
         xhr.open('POST','/views/1.php', false);
             xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
         xhr.send(chislo);
         if (xhr.status !=200){
             alert('ошибка'+xhr.status);
         }
         else {
             var otvet=xhr.responseText;
         }

         alert (otvet);
     }
 </script>