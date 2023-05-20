const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    // console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      //entry.target.classList.remove('show');
    }
  });
});

const observer2 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    // console.log(entry);
    if (entry.isIntersecting) {
      counter("count1", 0, 1000, 1500);
      counter("count2", 0, 26, 2500);
      counter("count3", 0, 365, 2500);
    } else {
      //entry.target.classList.remove('show');
    }
  });
});

const observer3 = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    console.log(entry);
    if (entry.isIntersecting) {
      entry.target.classList.add("text-focus-in");
    } else {
      //entry.target.classList.remove('show');
    }
  });
});

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

const Counter = document.querySelectorAll(".counterclass");
Counter.forEach((el) => observer2.observe(el));

const demo = document.querySelectorAll(".demo");
demo.forEach((el) => observer3.observe(el));

/* 
  minified
  
  $(".vpop").on("click",function(o){o.preventDefault(),$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();var p="",e="",i=$(this).data("id");if("vimeo"==$(this).data("type"))var p="//player.vimeo.com/video/";else if("youtube"==$(this).data("type"))var p="https://www.youtube.com/embed/";1==$(this).data("autoplay")&&(e="?autoplay=1"),$("#video-popup-iframe").attr("src",p+i+e),$("#video-popup-iframe").on("load",function(){$("#video-popup-overlay, #video-popup-container").show()})}),$("#video-popup-close, #video-popup-overlay").on("click",function(o){$("#video-popup-iframe-container,#video-popup-container,#video-popup-close").hide(),$("#video-popup-iframe").attr("src","")});
  */
function validateEmail(email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  return regex.test(email);
}
function validatePhone(phone) {
  if (phone.length == 10) {
    return true;
  } else {
    return false;
  }
}
function validateName(name) {
  if (name.length != 0) {
    return true;
  } else {
    return false;
  }
}

function nextPage() {
  const emailInput = document.querySelector("#email");
  const isValidEmail = validateEmail(emailInput.value);
  const isValidPhone = validatePhone(document.querySelector("#phone").value);
  const isValidName = validateName(document.querySelector("#name").value);
  if (isValidEmail && isValidName && isValidPhone) {
    document.getElementById("error").innerHTML = "";
    document.querySelector("#appointment1").classList.add("hidesection");
    document.querySelector("#appointment2").classList.remove("hidesection");
  } else {
    document.getElementById("error").innerHTML =
      "Please enter correct details.";
  }
}

function prevpage() {
  document.querySelector("#appointment2").classList.add("hidesection");
  document.querySelector("#appointment1").classList.remove("hidesection");
}

$("#myLinks").hide();
$("#hamburger").on("click", function () {
  $("#myLinks").toggle();
});

$(document).on("click",".slotelement", function () {
  const allslots = document.querySelectorAll(".slotselected");
  const finalslot = document.querySelector("#finalslot");
  allslots.forEach((slot) => {
    slot.classList.remove("slotselected");
  });
  this.classList.toggle("slotselected");
  finalslot.setAttribute("value", this.getAttribute("value"));
});

function checkRegistration() {
  var form_valid =
    document.getElementById("finalslot").value == "" ||
    document.getElementById("date").value == "";
  if (form_valid) {
    $("#error1").html("Please answer all the questions.");
    return false;
  }
  return true;
}
const hamburger = document.querySelector(".hamburger");
const navigationitemlist = document.querySelector(".navigationitemlist");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  // navigationitemlist.classList.toggle("active");
});

$(".slotpick").hide();

$(document).on("change", "#date", function () {
  if ($(this).val() == "") {
    $(".slotpick").hide();
    $(".slotpicknodate").show();
    const finalslot = document.querySelector("#finalslot");
    finalslot.setAttribute("value", "");
    document.getElementById("slotpick").innerHTML="";
  } else {
    $(".slotpicknodate").hide();
    document.getElementById("slotpick").innerHTML="";
    fetch("http://localhost/architect/get_slots.php", {
      method: "POST",
      body:
        JSON.stringify({date: $(this).val()}),
      headers: {
        "Content-type": "application/json; charset=UTF-8",
      },
    })
      // Converting to JSON
    .then((response) => response.json())
      // Displaying results to console
    .then((json) => {
      let slotpick=document.getElementById("slotpick");
      for (let key in json) {
        if (json.hasOwnProperty(key)) {
          const entry = json[key];
          // console.log(`Key: ${key}, Value: ${entry}`);
          // Perform your desired operations on each entry
          slotpick.innerHTML +=`<p class="slotelement" value="${key}">${entry}</p>`
        }
      }
    });

    $(".slotpick").show();
  }
});
