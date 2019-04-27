//document.getElementById('courses').onclick = function () {
//    var xhr = new XMLHttpRequest();
//    xhr.open('GET', 'https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
//    xhr.onreadystatechange = function () {
//        if (xhr.readyState == 4) {
//            if (xhr.status = 200) {
//                var json_text = xhr.responseText;
//                var courses = JSON.parse(json_text);
//                for (var i = 0; i < courses.length; i++) {
//                    alert(courses[i].ccy);//TODO выводи как хочешь
//                }
//            }
//        }
//    };
//    xhr.send();
//};

 function showQuestions () {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', '/api/questions');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var json_text = xhr.responseText;
                var questions = JSON.parse(json_text);
                console.log(questions);
                //TODO вывести в табличку
                var tbody= document.querySelector('#questions tbody');
                tbody.innerHTML='';
                for(var i=0;i<questions.length;i++){
                    var tr='<tr>\n\
<td>'+(i+1)+'</td><td>'+questions[i].author+'</td><td>'+questions[i].text+'</td></tr>';
                    tbody.innerHTML+=tr;
                }
                
            } else {
                return false;
            }
        }
    };
    xhr.send();
};
showQuestions();