let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{

    navbar.classList.toggle('active');
    searchform.classList.remove('active');
}



window.onscroll = () =>{
    navbar.classList.remove('active');
    searchform.classList.remove('active');
}

$(document).ready(function(){
    // Aplicar a máscara de telefone
    $('#telefone').mask('(00) 00000-0000');

    // Interceptar o envio do formulário com AJAX
    $('#meuFormulario').submit(function(e){
        e.preventDefault(); // Prevenir o comportamento padrão de recarregar a página

        // Capturar os dados do formulário
        var formData = $(this).serialize();

        // Enviar os dados via AJAX para formulario.php
        $.ajax({
            type: 'POST',
            url: 'formulario.php', 
            data: formData,
            success: function(response) {
                // Exibir a mensagem de sucesso
                $('#mensagem').html('Mensagem enviada com sucesso!').css('color', 'green').fadeIn();

                // Limpar os campos do formulário
                $('#meuFormulario')[0].reset();

                // Ocultar a mensagem de sucesso após 5 segundos
                setTimeout(function(){
                    $('#mensagem').fadeOut();
                }, 5000);
            },
            error: function() {
                // Caso haja erro na requisição
                $('#mensagem').html('Ocorreu um erro. Tente novamente.').css('color', 'red').fadeIn();

                // Ocultar a mensagem de erro após 5 segundos
                setTimeout(function(){
                    $('#mensagem').fadeOut();
                }, 5000);
            }
        });
    });
});

const geolocation = navigator.geolocation

geolocation.getCurrentPosition((position) => {

    let lat = position.coords.latitude;
    let long = position.coords.longitude;

    console.log(lat, long)
});




