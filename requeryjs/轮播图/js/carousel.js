/**
 * Created by xiaotingzhang on 2016/12/13.
 */
define(['jquery'],function($){
    function Carousel(settings){
        this.defaultSettings={
            imgsUrl:[],
            speed:'1000',
            buttonStyle:'square',
            arrowsStyle:'bottom',
            location:'body'
        };
        $.extend(this.defaultSettings,settings);
        this.$container=$('<div class="carousel-container"></div>');
        this.$imgs=$('<div class="carousel-imgs"></div>');
        this.$tabs=$('<div class="carousel-tabs"></div>').css('list-style','none');
        this.$arrows=$('<div class="carousel-arrows"></div>').addClass(this.defaultSettings.arrowsStyle);
        this.$pres=$('<span class="carousel-arrows-pres">&lt;</span>').addClass(this.defaultSettings.arrowsStyle);
        this.$next=$('<span class="carousel-arrows-next">&gt;</span>').addClass(this.defaultSettings.arrowsStyle)
    }
    Carousel.prototype.init=function(){
        var iNow = 0;
        var _this=this;
        for(var i=0;i<this.defaultSettings.imgsUrl.length;i++){
            this.$imgs.append($("<img src='"+ this.defaultSettings.imgsUrl[i] +"'>"));
            this.$tabs.append($("<li>"+(this.defaultSettings.buttonStyle=='circle'?'':(i+1))+"</li>"));
        }
        $('li:first-child',this.$tabs).addClass('selected');
        $('img:first-child',this.$imgs).addClass('selected');
        this.$container.append(this.$imgs).append(this.$arrows).append(this.$tabs);
        this.$arrows.append(this.$pres).append(this.$next);
        $(this.defaultSettings.location).append(this.$container);
        $("li", this.$tab).addClass(this.defaultSettings.buttonStyle);
        $('li',this.$tabs).on('mouseover',function(){
            iNow=$(this).index();
            changeImg();
        });
        this.$next.on('click',function(){
            iNow++;
            if(iNow==_this.defaultSettings.imgsUrl.length){
                iNow=0;
            }
            changeImg()
        });
        this.$pres.on('click',function(){
            iNow--;
            if(iNow==-1){
                iNow==_this.defaultSettings.imgsUrl.length-1;
            }
            changeImg()
        });
        run();
        this.$container.hover(function () {
            clearInterval(_this.timer);
        },function(){
          run();
        });
        function run(){
           _this.timer = setInterval(function(){
               _this.$next.trigger('click')
           },_this.defaultSettings.speed)
        }
        function changeImg(){
            $('li',_this.$tabs).eq(iNow).addClass('selected').siblings().removeClass('selected');
            $('img',_this.$imgs).eq(iNow).addClass('selected').siblings().removeClass('selected');
        }

    };
    return Carousel;
});