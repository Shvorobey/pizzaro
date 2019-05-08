var date = new Date();
var time = date.getHours();
if(time>7 && time < 12)
    alert('Доброе утро! Вход только для 18+');

else if (time=>12 && time<=18)
    alert('Добрый день! Вход только для 18+');

else if (time>18 && time<=23)
    alert('Добрый вечер! Вход только для 18+' );

else
    alert('Доброй ночи! Вход только для 18+' );