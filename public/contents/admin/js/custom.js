$(document).ready(function(){
  $(".status").click(function(){
    var url=$(this).data('status');
    $('#status').attr('action',url);
  });
});

$(document).ready(function(){
  $(".approve").click(function(){
    var url=$(this).data('approve');
    $('#approve').attr('action',url);
  });
});

$(document).ready(function(){
  $(".routinedelete").click(function(){
    var url=$(this).data('url');
    $('#routinedelete').attr('action', url);
  });
});

$(document).ready(function(){
  $(".teacherdelete").click(function(){
    var url=$(this).data('url');
    $('#teacherdelete').attr('action', url);
  });
});
