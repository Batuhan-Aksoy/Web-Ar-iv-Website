function get (){

    document.getElementById("get").style=("display:inline-block;");
}
function unget(){
   document.getElementById("get").style=("display:none;");
   
}
function kat(){
    var i;
    for(i=4;i<8;i++)
    {
        document.getElementsByClassName("kategori-item")[i].style=("display:none");
    }
}
function left(){
    var i,z=4;
   for(i=0;i<4;i++)
   {
       document.getElementsByClassName("kategori-item")[i].style=("display:inline-block;");
       document.getElementsByClassName("kategori-item")[z].style=("display:none;");
       z+=1;
   }     
}
function right(){
     
   var i,z=0;
   for(i=4;i<8;i++)
   {
       document.getElementsByClassName("kategori-item")[i].style=("display:inline-block;");
       document.getElementsByClassName("kategori-item")[z].style=("display:none;");
       z+=1;
   } 
}

function kayit() {
    document.getElementsByClassName("kgiris")[0].style=("display:none;");
    document.getElementsByClassName("kkayit")[0].style=("display:block;");
}
function oturum () {
    document.getElementsByClassName("oturum")[0].style=("display:block;");
}
function closeoturum(){
    document.getElementsByClassName("oturum")[0].style=("display:none;");
}
function arsivlerim(){
    document.getElementsByClassName("arsivlerim")[0].style=("display:inline-block;");
    document.getElementsByClassName("h2")[0].style=("display:none;");
    document.getElementsByClassName("arsivolustur")[0].style=("display:none;");
    document.getElementsByClassName("kisiselarsiv")[0].style=("display:none;");
}
function arsivolustur(){
    document.getElementsByClassName("arsivlerim")[0].style=("display:none;");
    document.getElementsByClassName("h2")[0].style=("display:none;");
    document.getElementsByClassName("arsivolustur")[0].style=("display:inline-block;");
    document.getElementsByClassName("kisiselarsiv")[0].style=("display:none;");
}
function kisiselarsiv(){
    document.getElementsByClassName("arsivlerim")[0].style=("display:none;");
    document.getElementsByClassName("h2")[0].style=("display:none;");
    document.getElementsByClassName("arsivolustur")[0].style=("display:none;");
    document.getElementsByClassName("kisiselarsiv")[0].style=("display:inline-block;");
}
function yorumac(){
   document.getElementsByClassName("yorumyap")[0].style=("display:block;");
}
function yorumkapat(){
   document.getElementsByClassName("yorumyap")[0].style=("display:none;");
    }

    function kontrol (){
      
        alert("Kullanıcı Girişi Olmadan İşlem yapılamaz..");

    }