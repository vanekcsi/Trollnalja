$(document).ready(function () {

    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);

    $('a[href="'+filename+'"]').parent().addClass('active');

  if(isHugarian()){
      var css1 = $('<style>#zaszloSk {opacity: 0.4; cursor: pointer; cursor: hand;}</style>');
      $("#zaszloSk").hover(function () {
          $('head').append(css1);
      }, function () {
          $('head').find(css1).remove();
      })
  } else {
      var css2= $('<style>#zaszloHu {opacity: 0.4; cursor: pointer; cursor: hand;}</style>');
      $("#zaszloHu").hover(function () {
          $('head').append(css2);
      }, function () {
          $('head').find(css2).remove();
      })
  };

  /*check();
    function check(){
        var url = window.location.pathname;
        var filename = url.substring(url.lastIndexOf('/')+1);
        $("ul > li > a[href=" + filename + "]").parent().addClass('active');
    }

    /*var hreff = $(this).attr('href');
    alert(filename);
    alert(hreff);*/

        /*$("a[href=filename]").addClass('active');
        alert(filename);*/
    /*var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    $("li").find("a[href=filename]").addClass('active');*/
    /*var current_path_url=window.location.pathname;

    $('a[href="'+current_path_url+'"]').parent().addClass('active');

    /*setTimeout(function () {
        $(".fa").click(function () {
            var css3= $('<style>body {background-color: red;}</style>');
            $('head').append(css3);
        })
    }, 3000 )*/



});
