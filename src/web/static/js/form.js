//pobieram elementy
const form = document.querySelector("#form");
const nickName = document.querySelector("#nickName");
const birth = document.querySelector("#birth");
const email = document.querySelector("#email");
const message = document.querySelector("#message");
const reset = $("input[type='reset']");

reset.click(() => sessionStorage.clear());


//jeżeli jest element w localStorage, ustawiam wartość dla textarea
if (sessionStorage.getItem("messageValue") !== null) {
    message.value = sessionStorage.getItem("messageValue");
}
if (sessionStorage.getItem("nickNameValue") !== null) {
  nickName.value = sessionStorage.getItem("nickNameValue");
}
if (sessionStorage.getItem("emailValue") !== null) {
  email.value = sessionStorage.getItem("emailValue");
}

if (sessionStorage.getItem("birthValue") !== null) {
  birth.value = sessionStorage.getItem("birthValue");
}
if(sessionStorage.getItem("genderValue") !== null) {
  const pol = (sessionStorage.getItem("genderValue"));
  const radio = document.querySelector(`[name="gender"][value="${pol}"]`);
  if(radio){
    radio.checked = true;
  }
}


//podczas wpisywania do textarea aktualizuję localStorage
nickName.addEventListener("input", e => {
    sessionStorage.setItem("nickNameValue", nickName.value);
});

birth.addEventListener("change", e => {
    sessionStorage.setItem("birthValue", birth.value);
});

email.addEventListener("input", e => {
  sessionStorage.setItem("emailValue", email.value);
});
message.addEventListener("input", e => {
  sessionStorage.setItem("messageValue", message.value);
});

document.querySelector('.sex').addEventListener('click', e => {
  // get the "data-value" value to choose which radio to select
  const value = e.target.dataset?.value;
  
  // find the gender radio input with that value
  if (value != null) {
    const radio = document.querySelector(`[name="gender"][value="${value}"]`);

    sessionStorage.setItem('genderValue', radio.value)
    if (radio) {
      radio.checked = true;
    }
  }

  
  // if we found the input, select it by setting checked to true
})


form.addEventListener("submit", e => {
    //gdy użytkownik wysyła formularz, zakładamy że już skończył pisać
    //więc nie ma po co trzymać treści w localStorage
    sessionStorage.removeItem("nickNameValue");
    sessionStorage.removeItem("emailValue");
    sessionStorage.removeItem("messageValue");
    sessionStorage.removeItem("birthValue");
    sessionStorage.removeItem("genderValue");
});






$( function() {
  $( "#birth" ).datepicker({
    isRTL: true,
    showButtonPanel: true,
    changeMonth: true,
    changeYear: true,
    yearRange: '-110:+0',
    showWeek: true,
    dateFormat: "dd-mm-yy",
    onSelect: function() {
      sessionStorage.setItem("birthValue", birth.value);
    }

  });
} );







var domains = ['gmail.com', 'aol.com', 'yahoo.com'];
var secondLevelDomains = ['hotmail']
var topLevelDomains = ["com", "net", "org"];

$('#email').on('blur', function() {
  $(this).mailcheck({
    domains: domains,                       
    secondLevelDomains: secondLevelDomains, 
    topLevelDomains: topLevelDomains,       
    suggested: function(element, suggestion) {
      $('#suggestion').html('Miałeś na myśli ' + suggestion.full + '?')
    },
    empty: function(element) {
      $('#suggestion').html('')
    }
  });
});


$( function() {
  $( ".formstyle input[type=submit], input[type=reset], button[type=button], .widget a, .widget button" ).button();
});
