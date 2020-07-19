/* function scrollWin() {
  window.scrollTo(0, 900);
  duration=400
}
setTimeout(scrollWin,3000); */

document.addEventListener('scroll', ()=>{
  let navbar =document.querySelector('#navbar')

  if(window.scrollY>670){
      navbar.classList.add('bg-navbar')
  }else{
      navbar.classList.remove('bg-navbar')
  }
})


$(document).ready(function() {
  var activeSystemClass = $('.list-group-item.active');

  //something is entered in search form
  $('#system-search').keyup( function() {
     var that = this;
      // affect all table rows on in systems table
      var tableBody = $('.table-list-search tbody');
      var tableRowsClass = $('.table-list-search tbody tr');
      $('.search-sf').remove();
      tableRowsClass.each( function(i, val) {
      
          //Lower text for case insensitive
          var rowText = $(val).text().toLowerCase();
          var inputText = $(that).val().toLowerCase();
          if(inputText != '')
          {
              $('.search-query-sf').remove();
              tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                  + $(that).val()
                  + '"</strong></td></tr>');
          }
          else
          {
              $('.search-query-sf').remove();
          }

          if( rowText.indexOf( inputText ) == -1 )
          {
              //hide rows
              tableRowsClass.eq(i).hide();
              
          }
          else
          {
              $('.search-sf').remove();
              tableRowsClass.eq(i).show();
          }
      });
      //all tr elements are hidden
      if(tableRowsClass.children(':visible').length == 0)
      {
          tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
      }
  });
});



function initImageUpload(box) {
    let uploadField = box.querySelector('.image-upload');
  
    uploadField.addEventListener('change', getFile);
  
    function getFile(e){
      let file = e.currentTarget.files[0];
      checkType(file);
    }
    
    function previewImage(file){
      let thumb = box.querySelector('.js--image-preview'),
          reader = new FileReader();
  
      reader.onload = function() {
        thumb.style.backgroundImage = 'url(' + reader.result + ')';
      }
      reader.readAsDataURL(file);
      thumb.className += ' js--no-default';
    }
  
    function checkType(file){
      let imageType = /image.*/;
      if (!file.type.match(imageType)) {
        throw 'Datei ist kein Bild';
      } else if (!file){
        throw 'Kein Bild gewählt';
      } else {
        previewImage(file);
      }
    }
    
  }
  
  // initialize box-scope
  var boxes = document.querySelectorAll('.box');
  
  for(let i = 0; i < boxes.length; i++) {if (window.CP.shouldStopExecution(1)){break;}
    let box = boxes[i];
    initDropEffect(box);
    initImageUpload(box);
  }
  window.CP.exitedLoop(1);
  
  
  
  
  /// drop-effect
  function initDropEffect(box){
    let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
    
    // get clickable area for drop effect
    area = box.querySelector('.js--image-preview');
    area.addEventListener('click', fireRipple);
    
    function fireRipple(e){
      area = e.currentTarget
      // create drop
      if(!drop){
        drop = document.createElement('span');
        drop.className = 'drop';
        this.appendChild(drop);
      }
      // reset animate class
      drop.className = 'drop';
      
      // calculate dimensions of area (longest side)
      areaWidth = getComputedStyle(this, null).getPropertyValue("width");
      areaHeight = getComputedStyle(this, null).getPropertyValue("height");
      maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));
  
      // set drop dimensions to fill area
      drop.style.width = maxDistance + 'px';
      drop.style.height = maxDistance + 'px';
      
      // calculate dimensions of drop
      dropWidth = getComputedStyle(this, null).getPropertyValue("width");
      dropHeight = getComputedStyle(this, null).getPropertyValue("height");
      
      // calculate relative coordinates of click
      // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
      x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
      y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
      
      // position drop and animate
      drop.style.top = y + 'px';
      drop.style.left = x + 'px';
      drop.className += ' animate';
      e.stopPropagation();
      
    }
  }




  