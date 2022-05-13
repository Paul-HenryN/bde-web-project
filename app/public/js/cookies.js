// set cookie according to you
var cookieName = "accept_cookies";
var cookieValue = "";
var cookieExpireDays = 30;

// function to set cookie in web browser
let createCookie = function (cookieName, cookieValue, cookieExpireDays) {
  let currentDate = new Date();
  currentDate.setTime(
      currentDate.getTime() + cookieExpireDays * 24 * 60 * 60 * 1000
  );
  let expires = "expires=" + currentDate.toGMTString();

  document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
};

// get cookie from the web browser
let getCookie = function (cookieName) {
  let name = cookieName + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == " ") {
          c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
      }
  }
  return "";
};

// check cookie is set or not
let checkCookie = function () {
  let check = getCookie(cookieName);

  if (check == "") {
      document.getElementById("cookie-popup").style.transform = "translateY(0)";
  } else {
      document.getElementById("cookie-popup").style.transform = "translateY(100%)";
  }
};

// When users click accept button
const acceptCookie = document.getElementById("acceptCookie");
const denyCookie = document.getElementById("denyCookie");

acceptCookie.onclick = function () {
  document.getElementById("cookie-popup").style.transform = "translateY(100%)";
  cookieValue = "yes";
  createCookie(cookieName, cookieValue, cookieExpireDays);
};

denyCookie.onclick = function () {
  document.getElementById("cookie-popup").style.transform = "translateY(100%)";
  cookieValue = "no";
  createCookie(cookieName, cookieValue, cookieExpireDays);
};

checkCookie();
