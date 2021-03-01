var Btn10 = document.querySelector('#toggleBtn10');
var Btn7 = document.querySelector('#toggleBtn7');
var Btn6 = document.querySelector('#toggleBtn6');
var Btn5 = document.querySelector('#toggleBtn5');
var Btn4 = document.querySelector('#toggleBtn4');
var Btn3 = document.querySelector('#toggleBtn3');
var Btn2 = document.querySelector('#toggleBtn2');
var Btn1 = document.querySelector('#toggleBtn1');
var card7 = document.querySelector('#card7');
var card6 = document.querySelector('#card6');
var card5 = document.querySelector('#card5');
var card4 = document.querySelector('#card4');
var root7 = document.querySelector('.root7')
var root6 = document.querySelector('.root6')
// var closer = document.querySelector('#toggleBtn8');
// var All = document.querySelectorAll('.card');

            // function opkey7() {
//     card7.style.transform ='scale(3)';
//     card7.style.transition = '1s';
// }
// function opkey72() {
//     card7.style.transform = 'scale(0)';
// }
function exit() {
card6.style.transform = 'translatex(-220%)';
    card7.style.transform = 'translatex(350%)';
}
function clk7() {
    card7.style.transform = 'translatex(350%)';
}
function clk6() {
    card6.style.transform = 'translatex(-220%))';
}
function clk5() {
    card5.style.transform = 'scale(0)';
}
function clk4() {
    card4.style.transform = 'scale(0)';
}
// function dbclk3() {
//     card5.style.transform = 'scale(0)';
//     card7.style.transform = 'scale(0)';
// }
// function dbclk2() {
//     card4.style.transform = 'scale(0)';
//     card6.style.transform = 'scale(0)';
// }
function clk3() {
    // card5.style.transition = '1s';
    // card5.style.transform ='scale(3)rotate(-90deg)';
    card7.style.transition = '1s';
    card7.style.transform ='scale(3)translatex(40%)translateY(-50%)';
    root7.style.zIndex = '99999';
}
function clk2() {
    // card4.style.transition = '1s';
    // card4.style.transform ='scale(3)rotate(-90deg)';
    card6.style.transition = '1s';
    card6.style.transform ='scale(3)translatex(10%)translateY(-50%)';
    root6.style.zIndex = '99999';
}
// Btn7.addEventListener('click' , opkey7)
// card7.addEventListener('dblclick' , opkey72)
Btn10.addEventListener('click' , exit);
card7.addEventListener('click' , clk7);
card6.addEventListener('click' , clk6);
card5.addEventListener('click' , clk5);
card4.addEventListener('click' , clk4);
// // Btn3.addEventListener('dblclick' , dbclk3)
// // Btn2.addEventListener('dblclick' , dbclk2)
Btn3.addEventListener('click' , clk3);
Btn2.addEventListener('click' , clk2);
let currSlide = 1;
showSlide(currSlide);

    function button_click(num){
        showSlide((currSlide += num));
    }

    function showSlide(num){ 
        const slides = document.querySelectorAll(".slide");
        if(num>slides.length)
        {
            currSlide =1;                   
        }
        
        if(num<1)
        {
            currSlide = slides.length;
        }
                                                    
        for(let i=0; i<slides.length; i++)
        {
            slides[i].style.display="none";}
            slides[currSlide -1].style.display="block";
    } 
function changecon(n){
        $visible = ".container" + n;

        for( $i = 0; $i < $maxmenu; $i++){
            $reset = ".container"+($i);
            $($reset).css("display","none");
        }
        $($visible).css("display","block");
    }
$(function(){
    $maxmenu = $(".menubtn").length;
});       