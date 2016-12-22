/**
 * Created by xiaotingzhang on 2016/12/2.
 */
$(function(){
    eventType = isMobile() ?'tap':'click';
    $('.yuan div').on(eventType,function(){

        var index = $(this).index();
        var imgNum=$('#pic div').size();
        var tabNum=$('.yuan div:visible').size();
        var num = Math.ceil(imgNum/tabNum);
        var dLeft = -num*390*index;
        if(index == tabNum-1){
            dLeft = $("#images").width()-$("#images #pic").width();
        }
        $("#images #pic").animate({
            left:dLeft
        });
        $(window).resize(function(){
            dLeft = $("#images").width()-$("#images #pic").width();
            $("#images #pic").css('left',dLeft);
        });
    });
    var list= $('#nav-list');
    $('#left img').on(eventType,function(){
        list.animate({
            width:270
        },1000);
        $('.hasChildren span').css({
            display:'block',
            height:'20px',
            width:'20px',
            float:'right',
            marginTop:'10px'
        })
    });
    $('.a').on(eventType,function(){
          $(this).children('ul').animate({
              height:'toggle'
          })
    });
    $('#content').on(eventType,function(){
        list.animate({
            width:0
        },1000);

    })
});