$(function(){
    var pageIndex = 0;
    // 현재페이지를 표시할 변수 0부터시작하며 왼쪽페이지기준
    var maxpage = $(".page").length-2;
    // 마지막페이지를 체크할 변수 마지막인덱스는-1이지만 pageIndex가왼쪽페이지를 기준으로하므로 추가로-1
    var pageDelay = 0;
    $("#bookLeft").on("click",function(){
        if(pageDelay == 0){
            pageDelay++;
            if(pageIndex == 0){
                // 맨 앞페이지를 체크할 부분 맨앞이아니면 기능
                alert("맨앞입니다!!");
                pageDelay--;
            }
            else{
                // 페이지들을 선택해 변수를 저장
                var lfPage= $(".page").eq(pageIndex);
                // 왼쪽페이지
                var prevPage= $(".page").eq(pageIndex-1);
                // 동작후 보여질 왼쪽페이지
                var nextPage= $(".page").eq(pageIndex+1);
                // 동작후 없앨 오른쪽페이지
                lfPage.addClass(" paging pagingLeft");
                // 왼쪽페이지를 오른쪽으로 넘기는 기능
                prevPage.addClass("pageLeft");
                // 왼쪽페이지가 넘어가면서 미리 페이지를 보이게함
                setTimeout(function(){
                    // 애니메이션이 끝나고 동작
                    lfPage.removeClass(" pageLeft paging pagingLeft");
                    // 넘어간 페이지에서 쓸모없는 클래스제거
                    lfPage.addClass(" pageRight");
                    // 넘어갔으므로 오른쪽페이지
                    nextPage.removeClass(" pageRight");
                    // 오른쪽페이지가 덮혀있으므로 지워서 안보이게함
                    pageIndex--;
                    pageDelay--;
                },2000);
            }
        }
    });
    $("#bookRight").on("click",function(){
        // 왼쪽과 오른쪽만 바뀌고 기능은 동일
        if(pageDelay == 0){
            pageDelay++;
            if(pageIndex == maxpage){
                alert("맨마지막입니다!");
                pageDelay--;
            }
            else{
                var rtPage= $(".page").eq(pageIndex+1);
                var prevPage= $(".page").eq(pageIndex);
                var nextPage= $(".page").eq(pageIndex+2);
                rtPage.addClass(" paging pagingRight");
                nextPage.addClass("pageRight");
                setTimeout(function(){
                    rtPage.removeClass(" pageRight paging pagingRight");
                    rtPage.addClass(" pageLeft");
                    prevPage.removeClass(" pageLeft");
                    pageIndex++;
                    pageDelay--;
                },2000);
            }
        }
    });
    $(".book").click(function(){
        $(this).addClass(" openbook");
        $(this).removeClass(" book1 book2 book3");
        $(".openbook").html("<img src='image/book.gif' alt='사진'>");
        $(".openbook>.img").css("margin-top","0px");
        $(".book1").css("transform","translateX(-900px) translateY(-220px) translateZ(0px) rotateX(10deg)");
        $(".book2").css("transform","translateX(-900px) translateY(-220px) translateZ(0px) rotateX(10deg)");
        $(".book3").css("transform","translateX(-900px) translateY(-220px) translateZ(0px) rotateX(10deg)");
        $(".bookshelf").addClass("openshelf");
        $("#book").css("opacity","1").css("z-index","50").addClass("open");
        setTimeout(function(){
            $("#book").css("display","block");
        },1000)
        .delay(300,function(){
            $(".openbook").css("display","none");
        });
    });
});