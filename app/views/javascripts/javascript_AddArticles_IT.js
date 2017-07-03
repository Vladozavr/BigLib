/*============================Секции=================================*/
var
sectionIt = document.querySelector('.section_it'),
sectionItContainer = document.querySelector('.section_it_container'),
arrayClass = ['section_it_container_html','section_it_container_js','section_it_container_portfolio','section_it_container_php','section_it_container_python','section_it_container_c','section_it_container_gamedev','section_it_container_modeling','section_it_container_hard','section_it_container_other'],
setSymbol = 0;
sectionIt.onchange = function(){
  sectionItContainer.classList.remove(arrayClass[setSymbol]);
  setSymbol = sectionIt.value;
  sectionItContainer.classList.add(arrayClass[setSymbol]);
}
