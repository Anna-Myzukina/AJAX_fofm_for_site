$(document).ready(function() {
    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            alert("Спасибо за заявку!Мы свяжемся с Вами!");
        });
        return false;
    });
});