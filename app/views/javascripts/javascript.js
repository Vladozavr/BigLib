
"use strict";
/*_____________________________________________________________ */
/*_____________________________________________________________ */
/*___________________SECTION_MENU______________________________ */
/*_____________________________________________________________ */
/*_____________________________________________________________ */
var
 button = document.querySelector('.buttonWrap'),
 menu = document.querySelector('.menu'),
 mainBlock = document.querySelector('.main'),
 setingsBlock = document.querySelector('.setings'),
 menuActive = false;
 button.onclick = function(){
   if ( menuActive == false) {
     button.style.right = '0%';
     button.style.width = '3%';
     button.style.fontSize = '0.65em';
     menu.style.right = '-18%';
     mainBlock.style.width = '90%';
     setingsBlock.style.width = '90%';
     mainBlock.style.left = '5%';
     setingsBlock.style.left = '5%';
     menuActive = true;
   }else if (menuActive == true){
     button.style.right = '6%';
     button.style.width = '100%';
     button.style.fontSize = '1em';
     menu.style.right = '0';
     mainBlock.style.width = '65%';
     setingsBlock.style.width = '65%';
     mainBlock.style.left = '10%';
     setingsBlock.style.left = '10%';
     menuActive = false;
   }

 }

var
mobileButtonClose = document.querySelector('.close_menu_button'),
mobileButtonOpen = document.querySelector('.open_menu_button')

mobileButtonClose.onclick = function() {
  if ( menuActive == false) {
    menu.style.right = '-70%';
    mainBlock.style.width = '90%';
    setingsBlock.style.width = '90%';
    mainBlock.style.left = '5%';
    setingsBlock.style.left = '5%';
    mobileButtonClose.style.position = "fixed";
    mobileButtonClose.style.right = "-40px";
    menuActive = true;
  }else if (menuActive == true){
    mobileButtonClose.style.position = "static";
    menu.style.right = '0';
    mainBlock.style.width = '65%';
    setingsBlock.style.width = '65%';
    mainBlock.style.left = '10%';
    setingsBlock.style.left = '10%';
    menuActive = false;
  }
}

var paragraphWrapIt = document.getElementById('paragraphWrapIt'),
    ITinform = document.getElementById('ITinform'),
    paragraph_openIt = document.querySelector('.paragraph_openIt'),
    ITinformCurrent = false,

    paragraphWrapMA = document.getElementById('paragraphWrapMA'),
    MAbt = document.getElementById('MAbt'),
    paragraphWrapMACurrent = false,

    SpaceInform = document.getElementById('SpaceInform'),
    paragraphWrapSpace = document.getElementById('paragraphWrapSpace'),
    SpaceCurrent = false,

    ListInform = document.getElementById('ListInform'),
    paragraphWrapList = document.getElementById('paragraphWrapList'),
    listCurrent = false,


    paragraphOpen = document.querySelector('.paragraph_open');


ITinform.onclick = function(){
  if (ITinformCurrent == false) {
    ITinformCurrent = true;
    paragraph_openIt.style.bacgroundColor = "#000";
    paragraphWrapIt.classList.remove("close");
  }else if(ITinformCurrent == true){
    ITinformCurrent = false;
    paragraphWrapIt.classList.add("close");
  }
}

MAbt.onclick = function(){
  if (paragraphWrapMACurrent == false) {
    paragraphWrapMACurrent = true;
    paragraphWrapMA.classList.remove("close");
  }else if(paragraphWrapMACurrent == true){
    paragraphWrapMACurrent = false;
    paragraphWrapMA.classList.add("close");
  }
}

SpaceInform.onclick = function(){
  if (SpaceCurrent == false) {
    SpaceCurrent = true;
    paragraphWrapSpace.classList.remove("close");
  }else if(SpaceCurrent == true){
    SpaceCurrent = false;
    paragraphWrapSpace.classList.add("close");
  }
}

ListInform.onclick = function(){
  if (listCurrent == false) {
    listCurrent = true;
    paragraphWrapList.classList.remove("close");
  }else if(listCurrent == true){
    listCurrent = false;
    paragraphWrapList.classList.add("close");
  }
}

/*>>>>>>>>>>>>>>>>>SEARCH<<<<<<<<<<<<<<<<<<*/
var
searchForm = document.querySelector('.search'),
searchButton = document.querySelector('.search_button'),
searchInput = document.querySelector('.search_input'),
searchCheck = false;

function openSearch(){
  searchForm.style.width = "40%";
  searchForm.style.height = "122px";
  searchForm.style.marginTop = "0";
  searchInput.style.width = "77%";
  searchInput.style.height = "34%";
  searchInput.style.zIndex = "3";
  searchButton.style.height ="41px";
  searchButton.innerHTML = '<i class="fa fa-times fa_symbol_search" aria-hidden="true"></i>';
  searchCheck = true;
  if (menuOpenStatus) {
    closeMenu();
  }
}
function closeSearch(){
  searchForm.style.width = "42px";
  searchForm.style.height = "42px";
  searchForm.style.marginTop = "35px";
  searchInput.style.width = "0";
  searchInput.style.height = "0";
  searchInput.style.zIndex = "-1";
  searchButton.style.height ="42px";
  searchButton.innerHTML = '<i class="fa fa-search fa_symbol_search" aria-hidden="true"></i>';
  searchCheck = false;
}

searchButton.onclick = function(){
  if (searchCheck == false) {
    openSearch();
  }else if (searchCheck == true) {
    closeSearch();
  }
}

/*cog>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/

var
cog = document.querySelector('.gear'),
cogMenu = document.querySelector('.cog_menu'),
menuOpenStatus = false,
lineDelim = document.querySelector('.line_delim_two');
function closeMenu(){
  cogMenu.style.width = "0";
  cogMenu.style.opacity = "0";
  lineDelim.style.marginLeft = "100px";
  menuOpenStatus = false;
}

cog.onclick = function(){
  if (menuOpenStatus == false) {
    cogMenu.style.width = "25%";
    cogMenu.style.opacity = "1";
    lineDelim.style.marginLeft = "35%";
    menuOpenStatus = true;
    if (searchCheck) {
      closeSearch();
    }
  }else if (menuOpenStatus == true) {
    closeMenu();
  }
}
