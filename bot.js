// ==UserScript==
// @name         Bot Bing
// @namespace    http://tampermonkey.net/
// @version      1.0
// @description  Bot for bing
// @author       Ekaterina Ilina
// @match        https://www.bing.com/*
// @icon         data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==
// @grant        none
// ==/UserScript==

let input = document.getElementById("sb_form_q");
let links = document.links;
let searchBtn = document.getElementById("search_icon");

if (searchBtn !== null) {
  input.value = "Купить авиабилеты до Санкт-Петербурга";
  searchBtn.click();
} else {
  for (let i = 0; i < links.length; i++) {
    if (links[i].href.indexOf('avianity.ru') != -1) {
      console.log("Нашел строку " + links[i]);
      break;
    }
  }
}
