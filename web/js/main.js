$(document).ready(function(){
    $('#search').click(function(e){
        e.preventDefault();

        var level   = $('#level').val();
        var oop     = $('#oop').val();
        var form    = $('#form').val();
        var base    = $('#base').val();

        if(level && oop && form && base){

            var $fillForm = $('#searchForm'),
                url = $fillForm.attr("action");



            $.ajax({
                type:   "POST",
                url:    url,
                data:   $fillForm.serialize(),
                success: function(response){
                   $("#rating").empty().append(response);
                }
            });
        }else{
            alert('Не выбраны все поля');
        }
    });
});