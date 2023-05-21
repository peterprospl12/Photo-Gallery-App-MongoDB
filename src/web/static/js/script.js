
var selectedSize = '';

function fontSize(selectTag) {
  var listValue = selectTag.options[selectTag.selectedIndex].text;
  selectedSize = listValue;
  setFontSize(listValue);
}

function setFontSize(value) {
  document.querySelector("body").style.fontSize = value;
}

function saveFont(){
  localStorage.setItem('fontSize', selectedSize);
}

var button = document.querySelector('.save');
button.addEventListener('click', function(evt) {
  evt.preventDefault();
  saveFont();
}, false);

if(localStorage.getItem('fontSize')) {
  var storedSize = localStorage.getItem('fontSize');
  setFontSize(storedSize);
}

const btnFact = document.getElementById('btnFact');
var counter = 0;
function buttonClick() {
    counter++;
    if (counter > 5) {
      btnFact.remove();
    }

}

function nowy(){
  var data = "";
  const div = document.querySelector(".facts");
  const el = document.createElement("div");
  const factText = document.createElement("p");

  el.classList.add("card");
  el.style.background = `#333`;
  el.style.color = "white";

  switch (counter) {
    case 1:
      el.innerText = `Piłka nożna ma podobno swoje korzenie w starożytnej Azji. W grę przypominającą dzisiejszą piłkę nożną grano w Chinach już około 2 300 lat temu.`;
      break;
    case 2:
      el.innerText = `Najwięcej mistrzostw Polski zdobył Ruch Chorzów oraz Górnik Zabrze, a jest to rekordowa liczba 14 zwycięstw. `;
      break;
    case 3:
      el.innerText = `Najwyżej położony stadion na świecie, jest położony w La Paz w Boliwii na wysokości 4100 m n.p.m`;
      break;
    case 4:
      el.innerText = `Pilka nożna jest najpopularniejszym sportem na świecie. Kopać piłkę można zarówno na Saharze jak i na Antarktydzie.`;
      break;
    case 5:
      el.innerText = `Największym aktualnie stadionem na świecie jest Stadion im. 1 Maja w Pjongjangu ( Korea Północna). Oficjalna jego pojemność to 150 000 miejsc siedzących.`;
      break;
    default:
      el.innerText = 'To już wszystkie ciekawostki';
      el.style.background = 'Black';
  }



  if(counter == 1) {
    div.appendChild(el);
    div.appendChild(factText);
  }
  else {
    div.insertBefore(el, div.firstChild);
    div.insertBefore(factText, div.firstChild)
  };
}


$('#save').click(function() {

  $("#messagebox").dialog({ 
    modal: true,
    open: function(event, ui){
      setTimeout("$('#messagebox').dialog('close')",1000);
     }


  }); 

});

