/**
 * Created by xiaotingzhang on 2016/12/8.
 */
requirejs.config({
   paths:{
       jquery: 'jquery-1.12.4'
   }
});
require(["jquery-1.12.4","dialog"],function($,Dialog){
    $('#open').on('click',function(){

        var settings={
            width:500,
            height:300,
            title:'我的弹出层',
            content:'input.html'
        };
        var dialog=new Dialog(settings);
        dialog.open();
    });
    $('.dialog-title-close').on('click',function(){


    })




});