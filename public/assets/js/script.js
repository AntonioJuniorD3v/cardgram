//Add Link
$('form[name="addFormLink"]').submit(function(event){
    event.preventDefault();
    var formData = new FormData(this);

    $("#overlay").fadeIn(300);
    $.ajax({
        url: "http://127.0.0.1:8000/link",
        type: 'POST',
        data: formData,
        success: function () {
            window.location.href = "http://127.0.0.1:8000/admin";
            //$('#exampleTabsOne').load(document.URL + ' #exampleTabsOne');
            //updatePreview();
        },
        error:function(){
            alert('Ocorreu um erro ao adicionar o link, verifique se os campos estão preenchidos corretamente e tente novamente.');
            $("#overlay").fadeOut(300);
        },
        cache: false,
        contentType: false,
        processData: false
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
        },100);
    });
});

//Update checked link
$(".isChecked").change(function() {

    var id = $(this).val();

    if(this.checked) {
        var isChecked = 1;
    }else{
        var isChecked = 0;
    }

    $("#overlay").fadeIn(300);
    $.ajax({
        url:'http://127.0.0.1:8000/link/'+id+'/'+isChecked,
        type:'GET',
        success: function(response){
            updatePreview();
            $("#overlay").fadeOut(300);
        }
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
            updatePreview();
        },100);
    });
});

//Update Link
$(document).ready(function(){
    $('form[name="updateFormLink"]').submit(function(event){
        event.preventDefault();
        var formData = new FormData(this);
        var id = $(this).find('input#id').val();

        $("#overlay").fadeIn(300);

        $.ajax({
            type:'POST',
            url:"http://127.0.0.1:8000/link/"+id,
            data: formData,
            success:function(data){
                $("#overlay").fadeOut(300);
                updatePreview();
            },
            error:function(){
                $("#overlay").fadeOut(300);
                updatePreview();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
            updatePreview();
        },100);
    });
});

//Delete Link
    $('#deleteFormLink').submit(function(event){
        event.preventDefault();
        var id = $(this).find('input[name="linkDelete"]').val();

        $("#overlay").fadeIn(300);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'delete',
            url:"http://127.0.0.1:8000/link/"+id,
            data: $(this).serialize(),
            dataType: 'JSON',
            success:function(data){
                $('#modal_delete_link').modal('hide');
                $('li#'+id).remove();
                updatePreview();
            },
            error:function(){

            },
        }).done(function() {
            setTimeout(function(){
                $("#overlay").fadeOut(300);
            },100);
        });
});

//Update checked config user
$(".checkboxConfigs").change(function() {

    var id = $(this).val();
    var type = $(this).attr('data-type');
    //atualiza_preview();

    if(this.checked) {
        var isChecked = 1;
    }else{
        var isChecked = 0;
    }

    $("#overlay").fadeIn(300);
    $.ajax({
        url:'http://127.0.0.1:8000/admin/'+id+'/'+isChecked+'/'+type,
        type:'GET',
        success: function(response){
            $("#"+type).toggle();
            updatePreview();
        }
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
        },100);
    });
});



//Form Logo
$("#formImgLogo").submit(function(event) {
    event.preventDefault();
    var formData = new FormData(this);


	$("#overlay").fadeIn(300);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type:'POST',
        url:"http://127.0.0.1:8000/admin/updateLogo",
        data: formData,
        success:function(data){
            updatePreview();
        },
        error:function(msg){
            var data = JSON.parse(msg.responseText);
            if(data.errors.img_logo != undefined){
                alert(data.errors.img_logo);
            }
            setTimeout(function(){
                $("#overlay").fadeOut(300);
            },500);
        },
        cache: false,
        contentType: false,
        processData: false
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
        },500);
    });
});

//Form custom card
$('#cardCustomization').submit(function (event) {
    event.preventDefault();
    var formData = new FormData(this);

	$("#overlay").fadeIn(300);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type:'POST',
        url:"http://127.0.0.1:8000/admin/cardCustomization",
        data: formData,
        success:function(data){
           // alert(data);
           updatePreview();
        },
        error:function(){
            //alert('Erro');
        },
        cache: false,
        contentType: false,
        processData: false
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
        },500);
    });
});

//Form Analytics
$('#analytics').submit( function (e) {
    e.preventDefault();
    var google = $('#googleAnalytics').val();
    var facebook = $('#facebookPixel').val();

    $("#overlay").fadeIn(300);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type:'POST',
        url:"http://127.0.0.1:8000/admin/setAnalytics",
        data: {"google_analytics" : google, "facebook_pixel" : facebook},
        dataType: 'JSON',

        success:function(data){
           // alert(data);
        },
        error:function(){
            //alert('Erro');
        }
    }).done(function() {
        setTimeout(function(){
            $("#overlay").fadeOut(300);
        },500);
    });
});


//Copiar url
$( '#btnCopey' ).click( function()
{
    var clipboardText = "";
    clipboardText = document.getElementById("urlLink").innerText;
    copyToClipboard( clipboardText );
});

function ccopyToClipboard(text) {
    toastr.success('Have fun storming the castle!', 'Miracle Max Says');

    var textArea = document.createElement( "textarea" );
    textArea.value = text;
    document.body.appendChild( textArea );
    textArea.select();
    try {
       var successful = document.execCommand( 'copy' );
       var msg = successful ? 'successful' : 'unsuccessful';
        //console.log('Copying text command was ' + msg);
    } catch (err) {
       //console.log('Oops, unable to copy');
    }
    document.body.removeChild( textArea );
}

//Script da Modal excluir link
$('#modal_delete_link').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) //Botão que acionou o modal
    var id = button.data('id')// Extrai informação dos atributos data-*
    // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
    // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
    var modal = $(this);
    modal.find('#id_delete_link').val(id);
});

//Click Link
$('.clickLink' ).click( function(){
    var id = $(this).attr("data-id");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'POST',
        url:"http://127.0.0.1:8000/link/addviews",
        data: {"id" : id},
        dataType: 'JSON',
        success:function(data){
        },
        error:function(){
        }
    });
});

// Select panel create link
$('form[name="addFormLink"]').find('input').prop('disabled', true);
$('form[name="addFormLink"]').find('#link input').prop('disabled', false);
$('input[name="_token"]').prop('disabled', false);
$('form[name="addFormLink"]').find('#input-file-now-custom-1').prop('disabled', false);

$('.content').eq(0).show();
$('#select-page').bind('change', function () {

    if(this.value === '#youtube-video'){
        $('#size').css('display', 'none');
        $('#image').css('display', 'none');
    } else{
        $('#size').css('display', 'block');
        //$('#image').css('display', 'block');
    }

    $('.content').slideUp();
    $(this.value).slideDown();
    $('form[name="addFormLink"]').find('div input').prop('disabled', true);
    $(this.value).find('div input').prop('disabled', false);
    $('form[name="addFormLink"]').find('#input-file-now-custom-1').prop('disabled', false);
});

// Select panel background
//$('.content2').eq(1).show();
$('#select-page2').bind('change', function () {
    $('.content2').slideUp();
    $(this.value).slideDown();
});

//Click Edit Button
$('.clickEditButton').click( function(e){
    console.log('click');
    //$('.collapse').removeClass("show");
});

//Update Preview
function updatePreview(){
    $("#previewPhone").fadeIn(300);
    $('#divPhone').load(document.URL + ' #divPhone', function(){
        $("#previewPhone").fadeOut(300);
    });
}
