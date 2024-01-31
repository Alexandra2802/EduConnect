$(document).ready(function(){
  $.ajaxSetup({ cache: false });
  $('#search').keyup(function(){
     $('#result').html('');
     $('#state').val('');
     var searchField = $('#search').val();
     var expression = new RegExp(searchField, "i");
     
     $.getJSON('teachers.json', function(data) {
     $.each(data, function(key, value){
         if (value.subject.search(expression) != -1){
             $('#result').append('<li class="list-group-item link-class" style="color: black; background-color:white;width: 50%">'+value.subject+'</li>');
         }
     });   
     });
  });
  
  $('#result').on('click', 'li', function() {
   var click_text = $(this).text().split('|');
   $('#search').val($.trim(click_text[0]));
   $("#result").html('');
  });
 });