
$(document).ready(function () {
    $('.another-news>li').click(function () {
       // $a=$ (this).attr('background');
     //  $b=$ (this).next().html('15');
      //  $b=$ (this).next().html($a);
        //$b=$ (this).next();
        //console.log($b);
        $a=$(this).css('background-image');
        $('.class1').css('background-image',$a);
        console.log($a);
    })
   /* $('.sec').click(function () {
        $b=$ (this).offset();
    console.log($b);
    })
    $('.sdvig').click(function () {
        $(".sec").offset(function(i,val){
            return {top:val.top + 30, left:val.left+(15*3)};
        });
    })*/
   $('.sec').click(function () {
       $('.overlay').toggleClass('showmodal');
       $('.modal').toggleClass('showmodal').click(function (event) {
           event.stopPropagation();
       })
   })
  /*  var $modal = $('.modal');

//чтоб показать модальное окно
    $('.sec').on('click.showModal', function(){
        $modal.toggleClass('showmodal');
    });

//чтоб скрыть модальное окно
    $('.close').on('click.hideModal', function(){
        $modal.toggleClass('showmodal');
    });*/
});
