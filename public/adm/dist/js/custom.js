

$( document ).ready(function() {
    
      $(".category-color span:nth-child(1)").addClass( "bg-primary");
      $(".category-color span:nth-child(2)").addClass( "bg-danger");
      $(".category-color span:nth-child(3)").addClass( "bg-warning");


      var switchStatus = false;
      $(".status-switch").on('change', function() {
          if ($(this).is(':checked')) {
              switchStatus = $(this).is(':checked');
              $(this).val(1);
          }
          else {
             switchStatus = $(this).is(':checked');
             $(this).val(0);
          }

      
});

//remove white space and replace -

$('input[name="slug"]').keyup(function () { 
    console.log('old- '+$(this).val());

    var str = $(this).val();
    str = str.replace(/\s+/g, '-');

    if((str.slice(-2)) == '--'){
        $(this).val(str.slice(0,-1));
    }else{
        $(this).val(str);
    }

});


$(".checkAll").click(function (e) { 
    // $(".checkList").attr('checked', true);
    $('.checkList').each(function () { this.checked = !this.checked; });
});


});

function goBack() {
    window.history.back();
  }
