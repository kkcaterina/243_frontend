// ==UserScript==
// @name         Bot Bing
// @namespace    http://tampermonkey.net/
// @version      1.0
// @description  Bot for bing
// @author       Ekaterina Ilina
// @match        https://www.bing.com/*
// @match        https://avianity.ru/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// @run-at       document-idle
// ==/UserScript==

let input = document.getElementById("sb_form_q");
let links = document.links;
let searchBtn = document.getElementById("search_icon");
let keywords = ["Купить недорогие авиабилеты", "Купить авиабилеты до Санкт-Петербурга", "Стоимость авиабилетов до Санкт-Петербурга на ближайший месяц"];
let keyword = keywords[getRandom(0, keywords.length)];
let nextPageBtn = document.getElementsByClassName("sb_pagN sb_pagN_bp b_widePag sb_bp ")[0];

//Работаем на главной страниице поисковика
if (searchBtn !== null) {
  let i = 0;
  let timerId = setInterval(function() {
    input.value += keyword[i];
    i++;
    if (i == keyword.length) {
      clearInterval(timerId);
      searchBtn.click();
    }
  }, 250)

  } else if (location.hostname == "avianity.ru") {
    console.log("Мы на целевом сайте");
  }

//Работаем на странице поисковой выдачи
else {
  let nextPage = true;
  for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf('avianity.ru') != -1) {
      let link = links[i];
      nextPage = false;
      console.log("Нашел строку " + link);
      setTimeout(()=>{
        link.click();
      }, getRandom(2000, 4000));
      break;
    }
  }
  if (document.getElementsByClassName("sb_pagS sb_pagS_bp")[0].innerText == "5") {
    nextPage = false;
    location.href = "https://www.bing.com/"
  }
  if (nextPage) {
    setTimeout(()=>{
      nextPageBtn.click();
    }, getRandom(2500, 4000))

  }
}

function getRandom(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}
