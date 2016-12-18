/**
 * Created by xiaotingzhang on 2016/12/13.
 */
requirejs.config({
    paths:{
        jquery:'jquery-1.12.4'
    }
});
require(["jquery","carousel"],function($,Carousel){
    var img=["img/1.jpg","img/2.jpg","img/3.jpg","img/4.jpg"];
    var settings={
        imgsUrl:img,
        speed:'1000',
        buttonStyle:'square',
        arrowsStyle:'bottom',
        location:'#container1'
    };
    var carousel = new Carousel(settings);
    carousel.init();
    var settings1={
        imgsUrl:img,
        speed:'500',
        buttonStyle:'circle',
        arrowsStyle:'center',
        location:'#container2'
    };
    var carousel1 = new Carousel(settings1);
    carousel1.init();
});