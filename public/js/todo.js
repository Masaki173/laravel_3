'use strict';
function displayTodo() {
{
    const radioTodo = document.getElementsByName('radiostat');
  const finish = document.querySelectorAll('.finish');
  const working = document.querySelectorAll('.working');
radioTodo[0].addEventListener('change', function (){
 finish.forEach(function (finish) {
      finish.closest('.tasks').style.display = ""})
  working.forEach(function (working) {
    working.closest('.tasks').style.display = ""})
  });
radioTodo[1].addEventListener('change', function (){
working.forEach(function (working) {
    working.closest('.tasks').style.display = ""})
finish.forEach(function (finish) {
  finish.closest('.tasks').style.display ="none"})

});
radioTodo[2].addEventListener('change', function (){
  finish.forEach(function (finish) {
      finish.closest('.tasks').style.display = ""})
  working.forEach(function (working) {
    working.closest('.tasks').style.display ="none"})

  });
}
}
