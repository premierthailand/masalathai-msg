
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  })
});

$('.dropdown').each(function(index, dropdown) {

    //Find the input search box
    let search = $(dropdown).find('.search');
  
    //Find every item inside the dropdown
    let items = $(dropdown).find('.dropdown-item');
  
    //Capture the event when user types into the search box
    $(search).on('input', function() {
      filter($(search).val().trim().toLowerCase())
    });
  
    //For every word entered by the user, check if the symbol starts with that word
    //If it does show the symbol, else hide it
    function filter(word) {
      let length = items.length
      let collection = []
      let hidden = 0
      for (let i = 0; i < length; i++) {
        if (items[i].value.toLowerCase().includes(word)) {
          $(items[i]).show()
        } else {
          $(items[i]).hide()
          hidden++
        }
      }
  
      //If all items are hidden, show the empty view
      if (hidden === length) {
        $(dropdown).find('.dropdown_empty').show();
      } else {
        $(dropdown).find('.dropdown_empty').hide();
      }
    }
  
    //If the user clicks on any item, set the title of the button as the text of the item
    $(dropdown).find('.dropdown-menu').find('.menuItems').on('click', '.dropdown-item', function() {
      $(dropdown).find('.dropdown-toggle').text($(this)[0].value);
      $(dropdown).find('.dropdown-toggle').dropdown('toggle');
    })



    
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	

    $('.datetimepicker').datetimepicker({
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        },
        format:"DD-MM-YYYY"
    });
});