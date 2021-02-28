'use strict'
        let currSlide = 1;
        showSlide(currSlide);

        function button_click(num){
            showSlide((currSlide += num));
        }
        function showSlide(num)
        { 
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
        //여기까지 슬라이드 
        function changecon(n){
                $visible = ".container" + n;

                for( $i = 0; $i < $maxmenu; $i++){
                    $reset = ".container"+($i+1);
                    $($reset).css("display","none");
                }
                $($visible).css("display","block");
            }
        $(function(){
            $maxmenu = $(".menubtn").length;
        });
        
        //여기까지 화면전환       