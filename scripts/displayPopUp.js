// $(document).ready(function(){
//     console.log('ready')
//     $('#pop-up-img').on({
//         'click':function(){
//             console.log('clicked')
//             console.log()
//             $('.pop-up').css({'transform':' scale(1,1)'})
//             // $('body').css({'filter':'blur(20px)'})
//             }
//         }    
//     )

//     $('#close-pop-up-btn').on({
//         'click':function(){
//             $('.pop-up').css({'transform':' scale(0,0)'})
//             // $('body').css({'filter':'blur(20px)'})
//             }
//         }    
//     )

    
// })


// JS MERGE
var modal = document.getElementById("myModal");

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById("pop-up-img");
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
// }

var modal = $('#myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('#pop-up-img');
var modalImg = $('#img01');
var captionText = $('#caption');
img.on('click', function() {
  modal.css('display', 'block');
  modalImg.attr('src', $(this).attr('src'));
  captionText.html($(this).attr('alt'));
});

// Get the <span> element that closes the modal
var span = $('.close').eq(0);

// When the user clicks on <span> (x), close the modal
span.on('click', function() { 
  modal.css('display', 'none');
});
