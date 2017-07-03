"use strict";

/*_____________________________________________________________ */
/*_____________________________________________________________ */
/*___________________SECTION_MANIPULATION_BUTTON_______________ */
/*_____________________________________________________________ */
/*_____________________________________________________________ */

var buttonAddImg = document.querySelector('.buttonAddImg'),
    buttonDecreaseImg = document.querySelector('.buttonDecreaseImg'),
    quantityAddImg = 1,

  input_file_two  = document.querySelector('.input_file_two'),
  input_file_three  = document.querySelector('.input_file_three'),
  input_file_four  = document.querySelector('.input_file_four'),
  input_file_five  = document.querySelector('.input_file_five'),
  input_file_six  = document.querySelector('.input_file_six'),
  input_file_seven  = document.querySelector('.input_file_seven'),
  input_file_eight  = document.querySelector('.input_file_eight'),
  input_file_nine  = document.querySelector('.input_file_nine'),
  input_file_ten  = document.querySelector('.input_file_ten'),
  arrayAddImg = [input_file_two, input_file_three, input_file_four, input_file_five, input_file_six, input_file_seven, input_file_eight, input_file_nine, input_file_ten];

    buttonAddImg.onclick = function(){
      buttonDecreaseImg.style.display = "block";
      if (quantityAddImg<10) {
            arrayAddImg[quantityAddImg-1].style.display = "block";
            quantityAddImg=quantityAddImg+1;
        }
      }
      buttonDecreaseImg.onclick = function(){
        if (quantityAddImg > 0) {
              quantityAddImg=quantityAddImg-1;
              arrayAddImg[quantityAddImg-1].style.display = "none";
          }
          if (quantityAddImg == 1) {
            buttonDecreaseImg.style.display = "none";
          }
      }
/*============================================================================*/
  var buttonAddObj = document.querySelector('.buttonAddObj'),
      buttonDecreaseObj = document.querySelector('.buttonDecreaseObj'),
      quantityAddObj = 1,

      input_file_object_two  = document.querySelector('.input_file_object_two'),
      input_file_object_three  = document.querySelector('.input_file_object_three'),
      input_file_object_four  = document.querySelector('.input_file_object_four'),
      input_file_object_five  = document.querySelector('.input_file_object_five'),
      input_file_object_six  = document.querySelector('.input_file_object_six'),
      input_file_object_seven  = document.querySelector('.input_file_object_seven'),
      input_file_object_eight  = document.querySelector('.input_file_object_eight'),
      input_file_object_nine  = document.querySelector('.input_file_object_nine'),
      input_file_object_ten  = document.querySelector('.input_file_object_ten'),

      arrayAddObj = [input_file_object_two, input_file_object_three, input_file_object_four, input_file_object_five, input_file_object_six, input_file_object_seven, input_file_object_eight, input_file_object_nine, input_file_object_ten];

      buttonAddObj.onclick = function(){
        buttonDecreaseObj.style.display = "block";
        if (quantityAddObj<10) {
              arrayAddObj[quantityAddObj-1].style.display = "block";
              quantityAddObj=quantityAddObj+1;
          }
        }
        buttonDecreaseObj.onclick = function(){
          if (quantityAddObj > 0) {
                quantityAddObj=quantityAddObj-1;
                arrayAddObj[quantityAddObj-1].style.display = "none";
            }
            if (quantityAddObj == 1) {
              buttonDecreaseObj.style.display = "none";
            }
        }

/*<<==============================ПОМЕТКА ЗАПОЛЕННЫХ ФОРМ========================================================>>*/
var
buttonTextFormatLink = document.querySelector('.button_text_format_link'),
buttonTextFormatCenter = document.querySelector('.button_text_format_center'),
buttonTextFormatBold = document.querySelector('.button_text_format_bold'),
buttonTextFormatList = document.querySelector('.button_text_format_list'),
comment = document.querySelector('.comment');
//commentPrew = comment.innerHTML;

buttonTextFormatLink.onclick = function(){
  document.querySelector('.comment').value += "<a href='ВашаCсылка' class='article_links'>Имя</a>";
}
buttonTextFormatCenter.onclick = function(){
  document.querySelector('.comment').value += '<a class="article_center">Этот текст будет по середине</a>';
}
buttonTextFormatBold.onclick = function(){
  document.querySelector('.comment').value += '<a class="article_bold">ЭтотТекстБудетЖирным</a>';
}
buttonTextFormatList.onclick = function(){
  document.querySelector('.comment').value += '<ul><li>ЭтоЭлементСписка</li></ul>';
}

var
divNameIt = document.getElementsByClassName('art_elem_label')[0],
divAuthorIt = document.getElementsByClassName('art_elem_label')[1],
divLinkIt = document.getElementsByClassName('art_elem_label')[2],
arrayDivValues = [divNameIt,divAuthorIt,divLinkIt],
inputNameIt = document.getElementsByName('name_it')[0],
inputAuthorIt = document.getElementsByName('author_it')[0],
inputLinkIt = document.getElementsByName('link_it')[0],
formAddArt = document.querySelector('.formAddArt'),
arrayInputValues = [inputNameIt, inputAuthorIt, inputLinkIt],
settingValueInp = false,
valueInputSetCheck = false,
valueInputSetTimes = false;


for (var i = 0; i < arrayInputValues.length; i++) {
  arrayInputValues[i].onblur = function(){
    if (this.value == "") {
      this.parentNode.classList.add('art_elem_times');
      this.parentNode.classList.remove('art_elem_check');
    }else if (this.value != "") {
        this.parentNode.classList.add('art_elem_check');
        this.parentNode.classList.remove('art_elem_times');
      }
  }
}

var
materialIt = document.querySelector('.material_it'),
materialItContainer = document.querySelector('.material_it_container'),
arrayClassMaterial = ['material_it_container_book','material_it_container_article','material_it_container_video','material_it_container_other'],
setSymbolTwo = 0;
materialIt.onchange = function(){
  materialItContainer.classList.remove(arrayClassMaterial[setSymbolTwo]);
  setSymbolTwo = materialIt.value;
  materialItContainer.classList.add(arrayClassMaterial[setSymbolTwo]);
}
/*ФОРМАТИРОВАНИЕ*/

//comment.innerText = 'pojk';

/*
$('img').click(function(){
       var text = "text";
       $('#textcoment').append(text);
 });​
 */
var
max,
arrayOfInput = [],
inputEntry =  document.querySelectorAll('.input_entry'),
lengthInput = document.querySelectorAll('.length_input'),
nameItInp = document.querySelector('.name_it'),
nameItTrigger=nameItInp.value.length-1,
nameIt = nameItInp.value.length;



for (var i = 0; i < inputEntry.length; i++) {
  arrayOfInput.push(inputEntry[i]);
  inputEntry[i].oninput = function(e){
    var eventElem = e.target;
    var numberArrayOfInput = arrayOfInput.indexOf(eventElem);
    nameIt = eventElem.value.length;
    if (nameIt-1 != nameItTrigger) {
      nameItTrigger = nameIt+1;
      if (numberArrayOfInput == 0) {
        max = 150;
      }else if (numberArrayOfInput == 1){
        max =  80;
      }else if(numberArrayOfInput == 2){
        max = 500;
      }else if(numberArrayOfInput == 3){
        max = 21000;
      }
      lengthInput[numberArrayOfInput].innerHTML = max-nameIt;
    }
    if (nameItTrigger < nameIt) {
        lengthInput[numberArrayOfInput].innerHTML--;
      }
    if(lengthInput[numberArrayOfInput].innerHTML <= 0){
      lengthInput[numberArrayOfInput].style.color = "red";
      lengthInput[numberArrayOfInput].innerHTML = 0;
      nameItTrigger = 150;
    }else{
      lengthInput[numberArrayOfInput].style.color = "#ccc";
    }
  }
}
for (var i = 0; i < inputEntry.length; i++) {
  arrayOfInput.push(inputEntry[i]);
  inputEntry[i].paste = function(e){
    var eventElem = e.target;
    var numberArrayOfInput = arrayOfInput.indexOf(eventElem);
    nameIt = eventElem.value.length;
    if (nameIt-1 != nameItTrigger) {
      nameItTrigger = nameIt+1;
      if (numberArrayOfInput == 0) {
        max = 150;
      }else if (numberArrayOfInput == 1){
        max =  80;
      }else if(numberArrayOfInput == 2){
        max = 500;
      }else if(numberArrayOfInput == 3){
        max = 21000;
      }
      lengthInput[numberArrayOfInput].innerHTML = max-nameIt;
    }
    if (nameItTrigger < nameIt) {
        lengthInput[numberArrayOfInput].innerHTML--;
      }
    if(lengthInput[numberArrayOfInput].innerHTML <= 0){
      lengthInput[numberArrayOfInput].style.color = "red";
      lengthInput[numberArrayOfInput].innerHTML = 0;
      nameItTrigger = 150;
    }else{
      lengthInput[numberArrayOfInput].style.color = "#ccc";
    }
  }
}
