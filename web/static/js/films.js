/**
 * Отправляет Ajax запрос.
 *
 * @param url
 * @param type
 * @param callback
 */
function sendAjax(url, type, callback) {
    let xhr = new XMLHttpRequest();
    xhr.open(type, url);
    xhr.send();
    xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            let data = JSON.parse(this.responseText);
            callback(data);
        }
    };

}

sendAjax('http://192.168.99.100:50001/api/v1/films', 'GET', function (data) {
    let list = document.querySelector('.films-list');
    data.forEach(function (item) {
        let node = document.createElement('article');
        node.innerHTML = item.title;
        list.append(node);
    });
});

let counter = getCounter();
let counterText = document.querySelector('.count');
let on = true;
let interval = setInterval(function () {
    if(on) {
        counter++;
        counterText.innerHTML = counter;
        setCounter(counter);
    }
}, 1000);

let btnTimer = document.querySelector('.btn-timer');
btnTimer.addEventListener('click', function (event) {
   on = !on;

   this.classList.toggle('btn-danger');
   this.classList.toggle('btn-success');
   this.innerHTML = on ? 'Выключить' : 'Включить';
});

let btnClear = document.querySelector('.btn-clear');
btnClear.addEventListener('click', function(){
    counter = 0;
});

setTimeout(function () {
    //location.reload();
},5000);


/**
 * return счётчик
 */
function getCounter() {
    let number = localStorage.getItem('counter');
    if(number === null) {
        number = 0;
    }
    return parseInt(number);
}

/**
 * Сохраняет счётчик
 * @param number
 */
function  setCounter(number) {
    localStorage.setItem('counter', number);
}

