$(function(){
  
    //カーソル要素の指定
    var cursor=$("#cursor");
    //ちょっと遅れてついてくるストーカー要素の指定  
    var frame=$("#frame");
    
    //mousemoveイベントでカーソル要素を移動させる
    $(document).on("mousemove",function(e){
      //カーソルの座標位置を取得
      var x=e.clientX;
      var y=e.clientY;
      //カーソル要素のcssを書き換える用
      cursor.css({
        "opacity":"0.9",
        "top":y+"px",
        "left":x+"px"
      });
      //ストーカー要素のcssを書き換える用    
      setTimeout(function(){
        frame.css({
          "opacity":"0.4",
          "top":y+"px",
          "left":x+"px"
        });
      });//カーソルより遅れる時間を指定
    });
    //aタグホバー
    $("a").on({
      "mouseenter": function() {
        //activeクラス付与
        cursor.addClass("active");
        frame.addClass("active");
      },
      "mouseleave": function() {
        cursor.removeClass("active");
        frame.removeClass("active");
        
      }
    });
  });