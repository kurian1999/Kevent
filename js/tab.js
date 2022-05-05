
const tabBtn1=document.querySelector("#tabBtn1");
const tabBtn2=document.querySelector("#tabBtn2");
const tabBtn3=document.querySelector("#tabBtn3");

const tabCon1=document.querySelector("#tabCon1");
const tabCon2=document.querySelector("#tabCon2");
const tabCon3=document.querySelector("#tabCon3");

tabBtn1.addEventListener("click",()=>{
  tabBtn1.classList.add("tab-active");
  tabBtn2.classList.remove("tab-active");
  tabBtn3.classList.remove("tab-active");

  tabCon1.classList.add("tab-con-active");
  tabCon2.classList.remove("tab-con-active");
  tabCon3.classList.remove("tab-con-active");
});

tabBtn2.addEventListener("click",()=>{
  tabBtn2.classList.add("tab-active");
  tabBtn1.classList.remove("tab-active");
  tabBtn3.classList.remove("tab-active");

  tabCon2.classList.add("tab-con-active");
  tabCon1.classList.remove("tab-con-active");
  tabCon3.classList.remove("tab-con-active");
});

tabBtn3.addEventListener("click",()=>{
  tabBtn3.classList.add("tab-active");
  tabBtn1.classList.remove("tab-active");
  tabBtn2.classList.remove("tab-active");

  tabCon3.classList.add("tab-con-active");
  tabCon1.classList.remove("tab-con-active");
  tabCon2.classList.remove("tab-con-active");
});
