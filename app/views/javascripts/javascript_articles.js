

var
delPage = document.querySelectorAll('.delete_article'),
delPageUses=[];
for (var i = 0; i < delPage.length; i++) {
  delPageUses.push(delPage[i]);
}
displayDelete = document.querySelectorAll('.modal_display_delete'),
inputDelBut = document.querySelectorAll('.input_del_left'),
delPageNo = document.querySelectorAll('.input_del_right');

function openModal(){
  for (var i = 0; i < delPage.length; i++) {
  displayDelete[use].style.width = "260px";
  displayDelete[use].style.height = "120px";
  displayDelete[use].style.padding = "5px";
  displayDelete[use].style.border = "1px solid #000";
  displayDelete[use].style.zIndex = "1";
  }
}
function colorModall() {
  for (var i = 0; i < delPage.length; i++) {
    displayDelete[use].style.color = "#000";
    inputDelBut[use].style.opacity = "1";
    delPageNo[use].style.opacity = "1";
  }
}
function closeModall() {
  for (var i = 0; i < delPage.length; i++) {
  displayDelete[use].style.width = "0px";
  displayDelete[use].style.height = "0px";
  displayDelete[use].style.padding = "px";
  displayDelete[use].style.border = "0";
  displayDelete[use].style.color = "#f4f4f4";
  displayDelete[use].style.zIndex = "0";
  inputDelBut[use].style.opacity = "0";
  delPageNo[use].style.opacity = "0";
}
}
for (var i = 0; i < delPage.length; i++) {
  delPage[i].onclick = function(){
      numElem = this;
      console.log(delPageUses.indexOf(numElem));
      use = delPageUses.indexOf(numElem)
      openModal();
      setTimeout(colorModall,300);
  }
  delPageNo[i].onclick = function(){
    setTimeout(closeModall,100);
    }
}


/*--------------------------EDIT-----------------------------------------------*/
var
edit = document.querySelectorAll('.edit_article'),
editUses=[],
editUsesTwo=[],
name_art = document.querySelectorAll('.name_art'),
author_edit = document.querySelectorAll('.author_edit'),
link_edit = document.querySelectorAll('.link_edit'),
comment = document.querySelectorAll('.comment'),
art_elem_main = document.querySelectorAll('.art_elem_main'),

input_edit_name = document.querySelectorAll('.input_edit_name'),
input_edit_name_author = document.querySelectorAll('.input_edit_name_author'),
input_edit_link = document.querySelectorAll('.input_edit_link'),
comment_edit = document.querySelectorAll('.comment_edit'),
input_button_submit_edit = document.querySelectorAll('.input_button_submit_edit'),
edit_ok = document.querySelectorAll('.edit_ok'),
articleShow = document.querySelectorAll('.article'),
edit_cancel = document.querySelectorAll('.edit_cancel');


for (var i = 0; i < edit.length; i++) {
  editUses.push(edit[i]);
}
for (var i = 0; i < edit.length; i++) {
  editUsesTwo.push(edit_cancel[i]);
}
function editOpen(){
  name_art[useEdit].style.display = "none";
  author_edit[useEdit].style.display = "none";
  link_edit[useEdit].style.display = "none";
  comment[useEdit].style.display = "none";
  edit[useEdit].style.display = "none";
  delPage[useEdit].style.display = "none";

  input_edit_name[useEdit].style.display = "block";
  input_edit_name_author[useEdit].style.display = "block";
  input_edit_link[useEdit].style.display = "block";
  comment_edit[useEdit].style.display = "block";
  input_button_submit_edit[useEdit].style.display = "block";
  edit_ok[useEdit].style.display = "block";
  edit_cancel[useEdit].style.display = "block";
  articleShow[useEdit].style.height = "570px";

}
function editClose(){
  name_art[useEditTwo].style.display = "block";
  author_edit[useEditTwo].style.display = "block";
  link_edit[useEditTwo].style.display = "block";
  comment[useEditTwo].style.display = "block";
  edit[useEditTwo].style.display = "block";
  delPage[useEditTwo].style.display = "block";

  input_edit_name[useEditTwo].style.display = "none";
  input_edit_name_author[useEditTwo].style.display = "none";
  input_edit_link[useEditTwo].style.display = "none";
  comment_edit[useEditTwo].style.display = "none";
  input_button_submit_edit[useEditTwo].style.display = "none";
  edit_ok[useEditTwo].style.display = "none";
  edit_cancel[useEditTwo].style.display = "none";
  articleShow[useEdit].style.height = "570px";
}



for (var i = 0; i < edit.length; i++) {
  edit[i].onclick = function(){
    numElemEdit = this;
    useEdit = editUses.indexOf(numElemEdit);
    editOpen();
  }
}
for (var i = 0; i < edit.length; i++) {
  edit_cancel[i].onclick = function(){
    numElemEditTwo = this;
    useEditTwo = editUsesTwo.indexOf(numElemEditTwo);
    editClose();
  }
}
/*--------------------------All view-----------------------------------------------*/

var
strComment = document.querySelectorAll('.comment');
for (var i = 0; i < strComment.length; i++) {
  strCommentN = strComment[i].innerHTML;
  console.log(strCommentN.length);
}


var
showAll = document.querySelectorAll('.view_all'),
articleShow = document.querySelectorAll('.article'),
flagOpenArticle = false;

useArticleUses=[];
for (var i = 0; i < showAll.length; i++) {
  useArticleUses.push(showAll[i]);
}


function openArticle(){
  articleShow[useShowArticle].style.height ="auto";
  showAll[useShowArticle].innerHTML = 'Свернуть';
  flagOpenArticle = true;
}
function closeArticle(){
  articleShow[useShowArticle].style.height ="500px";
  showAll[useShowArticle].innerHTML = 'Открыть полностью';
  flagOpenArticle = false;
}


document.addEventListener('DOMContentLoaded', function () {
for (var i = 0; i < articleShow.length; i++) {
  articleShowHeight = articleShow[i].offsetHeight;
  if (articleShowHeight > 510) {
    articleShow[i].style.height = "510px";
    showAll[i].innerHTML = 'Открыть полностью';
    showAll[i].onclick = function(){
      numArticle = this;
      useShowArticle = useArticleUses.indexOf(numArticle);
      if (flagOpenArticle == false) {
        openArticle();
      }else if (flagOpenArticle == true){
        closeArticle();
      }
    }
  }else{
    articleShow[i].style.maxHeight = "570px";
    showAll[i].classList.add('none_view_all');
  }
}
});
document.addEventListener('DOMContentLoaded', function () {
  membrane = document.querySelector('.membrane_for_modal'),
  body = document.querySelector('#body'),
  bodyHeight = body.offsetHeight+32;
  membrane.style.height = bodyHeight+"px";
});

var
membrane = document.querySelector('.membrane_for_modal'),
modalForImg = document.querySelector('.modal_for_img'),
closeModalImg = document.querySelector('.close_modal_for_img'),
wrapForImg = document.querySelectorAll('.article_img_wrap'),
articleImg = document.querySelectorAll('.art_img'),
slider = document.querySelector('.slider'),
slideButtonLeft = document.querySelector('.slide_button_left'),
slideButtonRight = document.querySelector('.slide_button_right'),
currentImageSlide = 0;
pickImg = {int: ''};


arrayArticleImg = [];


for (var i = 0; i < wrapForImg.length; i++) {
  wrapForImg[i].onclick=function(e) {
    if (e.target.tagName === 'img') {
      console.log('img');
    }
    var pickImgEvent=e.target.className;
    pickImg.int = pickImgEvent.split(' ');
    pickImg.int = pickImg.int[pickImg.int.length-1];
    console.log(pickImg.int);
    console.log(e.target.className);

        switch(pickImg.int) {
      case 'one':  // if (x === 'value1')
        pickImg.int = 0;
        break;
      case 'two':  // if (x === 'value2')
        pickImg.int = 1;
        break;
      case 'three':
        pickImg.int = 2;
        break;
      case 'four':
        pickImg.int = 3;
        break;
      case 'five':
        pickImg.int = 4;
        break;
      case 'six':
        pickImg.int = 5;
        break;
      case 'seven':
        pickImg.int = 6;
        break;
      case 'eight':
        pickImg.int = 7;
        break;
      case 'nine':
        pickImg.int = 8;
        break;
      case 'ten':
        pickImg.int = 9;
        break;
    }
    currentImageSlide = 0;
    arrayImgForSlide = [];
    sliderAttrSrc = [];
    clickWrap = this;
    arrayArticleImg = clickWrap.getElementsByTagName('*');
    membrane.style.display = "block";
    modalForImg.style.display = "flex";
    for (var j = 0; j < arrayArticleImg.length;j++) {
      arrayImgForSlide.push(arrayArticleImg[j]);//appendChild полезный метод
      sliderAttrSrc.push(arrayImgForSlide[j].getAttribute("src"));
    }
    //sliderAttrSrc = arrayImgForSlide[0].getAttribute("src");
    slider.setAttribute("src",sliderAttrSrc[pickImg.int]);
  }
}


closeModalImg.onclick = function(){
  membrane.style.display = "none";
  modalForImg.style.display = "none";
}
membrane.onclick = function(){
  membrane.style.display = "none";
  modalForImg.style.display = "none";
}

slideButtonRight.onclick = function(){
  if (pickImg.int < arrayImgForSlide.length-1) {
    pickImg.int++;
    slider.setAttribute('src',sliderAttrSrc[pickImg.int]);
  }else{
    pickImg.int = 0;
    slider.setAttribute('src',sliderAttrSrc[pickImg.int]);
  }
}
slideButtonLeft.onclick=function(){
  if (pickImg.int !=0) {
    pickImg.int --;
    slider.setAttribute('src', sliderAttrSrc[pickImg.int]);
  }else{
    pickImg.int = sliderAttrSrc.length-1;
    slider.setAttribute('src', sliderAttrSrc[pickImg.int]);
  }
}


var
varClientWidth = document.body.clientWidth;
varClientWidth = varClientWidth+17;


/*------------------------Запрет выделения для слайдера------------------------------------*/
function preventSelection(element){
  var preventSelection = false;

  function addHandler(element, event, handler){
    if (element.attachEvent)
      element.attachEvent('on' + event, handler);
    else
      if (element.addEventListener)
        element.addEventListener(event, handler, false);
  }
  function removeSelection(){
    if (window.getSelection) { window.getSelection().removeAllRanges(); }
    else if (document.selection && document.selection.clear)
      document.selection.clear();
  }
  function killCtrlA(event){
    var event = event || window.event;
    var sender = event.target || event.srcElement;

    if (sender.tagName.match(/INPUT|TEXTAREA/i))
      return;

    var key = event.keyCode || event.which;
    if (event.ctrlKey && key == 'A'.charCodeAt(0))  // 'A'.charCodeAt(0) можно заменить на 65
    {
      removeSelection();

      if (event.preventDefault)
        event.preventDefault();
      else
        event.returnValue = false;
    }
  }

  // не даем выделять текст мышкой
  addHandler(element, 'mousemove', function(){
    if(preventSelection)
      removeSelection();
  });
  addHandler(element, 'mousedown', function(event){
    var event = event || window.event;
    var sender = event.target || event.srcElement;
    preventSelection = !sender.tagName.match(slideButtonLeft|slideButtonRight);
  });

  // борем dblclick
  // если вешать функцию не на событие dblclick, можно избежать
  // временное выделение текста в некоторых браузерах
  addHandler(element, 'mouseup', function(){
    if (preventSelection)
      removeSelection();
    preventSelection = false;
  });

  // борем ctrl+A
  addHandler(element, 'keydown', killCtrlA);
  addHandler(element, 'keyup', killCtrlA);
}
preventSelection(modalForImg);
