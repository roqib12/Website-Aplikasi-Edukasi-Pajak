const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;  
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1 ].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1 ].classList.add("active");
  progressCheck[current - 1].classList.add("active");  
  current += 1;
});
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");  
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");  
  current -= 1;
});

// 

var coll = document.getElementsByClassName("collapsible");
var c;

for (c = 0; c < coll.length; c++) {
  coll[c].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

// 

function startCalc(){
  interval = setInterval("calc()",1);
}

function calc(){
  valueGajiPensiun = formMasa.gajiPensiun.value; 
  valueTunjPph = formMasa.tunjPph.value;
  valueTunjLain = formMasa.tunjLain.value;
  valueTunjHonor = formMasa.tunjHonor.value;
  valueTunjAsuransi = formMasa.tunjAsuransi.value;
  valueNatura = formMasa.natura.value;
  valueBonusJasa = formMasa.bonusJasa.value;
  valueHasilBruto = ((valueGajiPensiun * 1) + (valueTunjPph * 1) + (valueTunjLain * 1) + (valueTunjHonor * 1) + (valueTunjAsuransi * 1) + (valueNatura * 1) + (valueBonusJasa * 1));  
  
  document.formMasa.hasilBruto.value = (valueHasilBruto);
  hitungBiayaJabatan = (valueHasilBruto * 1) * (5 / 100) ;  

  if (hitungBiayaJabatan == 500000) {
    document.formMasa.biayaJabatan.value = 500000;
  } else if (hitungBiayaJabatan > 500000) {
    document.formMasa.biayaJabatan.value = 500000;
  } else {
    document.formMasa.biayaJabatan.value = hitungBiayaJabatan;
  }

  document.formMasa.brutoSetahun.value = (valueHasilBruto * 12) ;  

  valueBiayaJabatan = document.formMasa.biayaJabatan.value;
  document.formMasa.jabatanSetahun.value = (valueBiayaJabatan * 12) ; 

  valueJabatanSetahun = document.formMasa.jabatanSetahun.value;
  valueIuranPensiun = document.formMasa.iuranPensiun.value;
  document.formMasa.iuranSetahun.value = (valueIuranPensiun * 12) ; 
  
  valueIuranSetahun = document.formMasa.iuranSetahun.value;
  document.formMasa.pengurangSetahun.value = (valueJabatanSetahun * 1) + (valueIuranSetahun * 1) ; 

  valueBrutoSetahun = document.formMasa.brutoSetahun.value;
  valuePengurangSetahun = document.formMasa.pengurangSetahun.value;
  document.formMasa.hasilNeto.value = (valueBrutoSetahun * 1) - (valuePengurangSetahun * 1) ; 

  valueHasilNeto = document.formMasa.hasilNeto.value;
  document.formMasa.netoSetahun.value = (valueHasilNeto) ; 

  valueTanggungan = document.formMasa.tanggungan.value;
  valueStatusKawin = document.formMasa.statusKawin.value;

  valuePtkp =  (valueStatusKawin * 1) + (valueTanggungan * 1) ;
  document.formMasa.ptkp.value = (valuePtkp) ; 

  valueNetoSetahun = document.formMasa.hasilNeto.value;  
  document.formMasa.pkp.value = (valueHasilNeto * 1) - (valuePtkp); 
  valuePkpSetahun = document.formMasa.pkp.value;
  document.formMasa.pkp21.value = (valuePkpSetahun * 1) * (5 / 100) ;

  valuePkp21 = document.formMasa.pkp21.value;
  document.formMasa.pph21Terutang.value = (valuePkp21) ; 

  document.formMasa.pph21Teratur.value = (valuePkp21) ;

  valuePph21Teratur = document.formMasa.pph21Teratur.value;
  document.formMasa.pph21TakTeratur.value = (valuePkp21) - (valuePph21Teratur) ;

  valuePph21TakTeratur = document.formMasa.pph21TakTeratur.value;
  document.formMasa.pph21TerutangSebulan.value = (valuePkp21) - (valuePph21TakTeratur) ;

}
function stopCalc(){
  clearInterval(interval);
}