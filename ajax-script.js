
    $(document).on('submit','#collectionUserForm',function(e){
        e.preventDefault();
        $.ajax({
        method:"POST",
        url: "php-script.php",
        data:$(this).serialize(),
        success: function(data){
        $('#msg').html(data);
        $('#collectionUserForm').find('input').val('')
    }});
});