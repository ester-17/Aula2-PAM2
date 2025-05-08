*** Settings ***
Library  SeleniumLibrary
*** Variables ***

*** Keywords ***
Abrir Site
  Open Browser  https://robotframeword.org/  crhrome
Abrir site google
  Open Browser  https://google.com/  chrome

***Test Cases ***
Cenário 1: Acessando o site do Robot
  Abrir site

Cenário 2: Acessando o site do Robot
  Abrir site google
