console.log('Hello world!');

var users = [
    {
        name: "Ivan Ivanov",
        email: "ivan@mail.ru",
        age: 22
    },
    {
        name: "Dmitry Dmitriev",
        email: "Dimon@mail.ru",
        age: 17
    },
    {
        name: "Sasha Aleksandrov",
        email: "Sanya@mail.ru",
        age: 21
    },
];


/**
 * Фильтрует массив. Возвращает его.
 * @param users
 * @param age
 * @returns {Array}
 */
function filter(users, age = 18) {
    let result = [];

    users.forEach(function (item) {
        if(item.age > age) {
            result.push(item);
        }
    });

    return result;
}

var btn = document.querySelector('.btn-click');
btn.addEventListener('click', function (event) {
    let textNode = document.querySelector('.title-text');
    let input = document.querySelector('.edit-text');
    textNode.innerHTML = "Hello world!";
    input.classList.toggle('hidden');
});

let input = document.querySelector('.edit-text');
input.addEventListener('keydown', function(event){
    let textNode = document.querySelector('.title-text');
    textNode.innerHTML = this.value;
});

