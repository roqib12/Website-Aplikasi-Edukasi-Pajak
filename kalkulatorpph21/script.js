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

  valuePtkp = document.formMasa.ptkp.value;

  // valueNetoSetahun = document.formMasa.hasilNeto.value;  
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

// 
$(document).ready(function () {
  // 
  $("#btn").click(function () { 
    // 
    var hasilBruto=$("#hasilBruto").val();
    var biayaJabatan=$("#biayaJabatan").val();
    var brutoSetahun=$("#brutoSetahun").val();
    var jabatanSetahun=$("#jabatanSetahun").val();
    var iuranSetahun=$("#iuranSetahun").val();
    var pengurangSetahun=$("#pengurangSetahun").val();
    var hasilNeto=$("#hasilNeto").val();
    var netoSetahun=$("#netoSetahun").val();
    var ptkp=$("#ptkp").val();
    var pkp=$("#pkp").val();
    var pkp21=$("#pkp21").val();        

    // 
    $.post("./submitPajak.php",{
        hasilBruto:hasilBruto,
        biayaJabatan:biayaJabatan,
        brutoSetahun:brutoSetahun,
        jabatanSetahun:jabatanSetahun,
        iuranSetahun:iuranSetahun,
        pengurangSetahun:pengurangSetahun,
        hasilNeto:hasilNeto,
        netoSetahun:netoSetahun,
        ptkp:ptkp,
        pkp:pkp,
        pkp21:pkp21
    },
      function(data,status) {
        // 
        if (data=="success") {                      
          alert('Data Berhasil Tersimpan');          
          location.reload();
        } else {
          alert('Data Gagal Tersimpan');
          location.reload();
        }
      });
      
  });
});



// function convertToRupiah(number) {

//   if (number) {

//     var rupiah = "";

//     var numberrev = number

//       .toString()

//       .split("")

//       .reverse()

//       .join("");

//     for (var i = 0; i < numberrev.length; i++)

//       if (i % 3 == 0) rupiah += numberrev.substr(i, 3) + ".";

//     return (

//       rupiah

//         .split("", rupiah.length - 1)

//         .reverse()

//         .join("")

//     );

//   } else {

//     return number;

//   }

// }

// // Jquery Dependency

// $("input[data-type='currency']").mask('000.000.000.000.000', {reverse: true});

// $("input[data-type='currency']").Number( true, 2 );

// $("input[data-type='currency']").on({
//   keyup: function() {
//     formatCurrency($(this));
//   },
//   blur: function() { 
//     formatCurrency($(this), "blur");
//   }
// });


// function formatNumber(n) {
// // format number 1000000 to 1,234,567
// return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
// }


// function formatCurrency(input, blur) {
// // appends $ to value, validates decimal side
// // and puts cursor back in right position.

// // get input value
// var input_val = input.val();

// // don't validate empty input
// if (input_val === "") { return; }

// // original length
// var original_len = input_val.length;

// // initial caret position 
// var caret_pos = input.prop("selectionStart");
  
// // check for decimal
// if (input_val.indexOf(".") >= 0) {

//   // get position of first decimal
//   // this prevents multiple decimals from
//   // being entered
//   var decimal_pos = input_val.indexOf(".");

//   // split number by decimal point
//   var left_side = input_val.substring(0, decimal_pos);
//   var right_side = input_val.substring(decimal_pos);

//   // add commas to left side of number
//   left_side = formatNumber(left_side);

//   // validate right side
//   right_side = formatNumber(right_side);
  
//   // On blur make sure 2 numbers after decimal
//   if (blur === "blur") {
//     right_side += "00";
//   }
  
//   // Limit decimal to only 2 digits
//   right_side = right_side.substring(0, 2);

//   // join number by .
//   input_val = left_side + "." + right_side;

// } else {
//   // no decimal entered
//   // add commas to number
//   // remove all non-digits
//   input_val = formatNumber(input_val);
//   input_val =  input_val;
  
//   // final formatting
//   // if (blur === "blur") {
//   //   input_val += ".00";
//   // }
// }

// // send updated string to input
// input.val(input_val);

// // put caret back in the right position
// var updated_len = input_val.length;
// caret_pos = updated_len - original_len + caret_pos;
// input[0].setSelectionRange(caret_pos, caret_pos);
// }
