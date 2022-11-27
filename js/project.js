// editor add
        var quillIntro = new Quill('#bubble-container-intro', {
          placeholder: 'Write Project Intro Here.....',
          theme: 'bubble'
        });
        
        var quillStep = new Quill('#step1', {
          placeholder: 'Write Step Content Here...',
          theme: 'snow'
        });

// add step /remove step script
    var i = 1;
    var options = {
      placeholder: 'Write Step Content Here...',
      theme: 'snow'
    };
    $('#add_step').click(function(){
      i++;
      $('#dynamic_field').append('<div class="row" id="row'+i+'"><div class="col-xl-12"><div class="step-container"><div class="form-group"><label for="step'+i+'Title"><b>Step '+i+'</b></label><input type="text" class="form-control" id="step'+i+'Title" placeholder="Step '+i+' : Title"></div><div class="img-container" id="img'+i+'"><a href="#" data-toggle="modal" data-target="#step'+i+'imgModal"><div class=step-img-text>Click here to Select Step '+i+' images </div></a></div><div class="step-inner-container"><div class="standalone-container"><div class="step" id="step'+i+'"></div></div><button class="close btn_remove btn_step'+i+'" type="button" name="remove" id="'+i+'"><span aria-hidden="true">×</span></button></div></div></div></div>');
      $('#imgModalAdd').append('<div class="modal fade" id="step'+i+'imgModal" tabindex="-1" role="dialog" aria-labelledby="step'+i+'imgModalLabel" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="step'+i+'imgModalLabel">Select Step '+i+' Image</h5><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body" id="uploadImg"></div><div class="modal-footer"><button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button><button type="submit" name="submit_logout" class="btn btn-primary">Save</button></div></div></div></div>');
      var stepEditor = new Quill('#step'+i+'', options);
      var x = i- 1;
      $(".btn_step"+x+"").hide();
      });

    $(document).on('click','.btn_remove', function() {
      var button_id = $(this).attr("id");
      $("#row"+button_id+"").remove();
      i--;
      
      $(".btn_step"+i+"").show();
    });
    $('#save').click(function(){
      
      var intro = $('#bubble-container-intro').text();
      if (intro !== '') {
          $.ajax({
            url:"include/project.data.save.inc.php",
            method:"POST",
            data:{intro:intro},
            success:function(data){
              alert(data);
              $.ajax({
                url:"include/data.echo.php",
                method:"POST",
                success:function(data){
                  $('#bubble-container-intro').html(data);
                  }
                });
            }
          });
      }else{
        alert("Please fill out Project Intro")
      }
    });

//upload img drag/drop script

 $('.file_drag_area').on('dragover', function(){
    $(this).addClass('file_drag_over');
    return false;
  });
  $('.file_drag_area').on('dragleave', function(){
    $(this).removeClass('file_drag_over');
  });

  $('.file_drag_area').on('drop', function(e){
    e.preventDefault();
    $(this).removeClass('file_drag_over');
    
    
    var formData = new FormData();
    var file_list  = e.originalEvent.dataTransfer.files;
    //consol.log(file_list);
    for (var i = 0; i < file_list.length; i++) {
      formData.append('file[]', file_list[i]);
    }
    //consol.log(formdata);

    $.ajax({
      url:"include/img.upload.inc.php",
      method:"POST",
      data:formData,
      contentType:false,
      cache: false,
      processData: false,
      beforeSend:function(){

      },
      success:function(data) {

          function showUplodedImg(){
                $.ajax({
                  url:"include/img.upload.show.php",
                  method:"POST",
                  success:function(data) {
                    $('#upload_file').html(data);
                    $('#uploadImg').html(data);
                  }
                });
              }
              showUplodedImg();
          }
    });
  });

    function showUplodedImg(){
      $.ajax({
        url:"include/img.upload.show.php",
        method:"POST",
        success:function(data) {
          //$('#upload_file').html(data);
          $('#uploadImg').html(data);
        }
      });
    }
    showUplodedImg();