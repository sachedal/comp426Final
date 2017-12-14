function myAjax() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 }