$(function() {
    //home-hide
    $('.icone-mais').on('click', function(e) {

        e.preventDefault();

        let item = $(this).attr('item-id');

        $(`.home-hide[item-id=${item}]`).slideToggle();

        /*if ($(`.home-hide[item-id=${item}].ativo`).length) {
            $(`.home-hide[item-id=${item}]`).removeClass('ativo').hide();
        } else {
            $(`.home-hide[item-id=${item}]`).addClass('ativo').show();
        }*/

    })
})

// colocando posição absoluta no footer

$(function() {
    let body = $('body').height()

    if (body < 800) {
        $('.footer').css({
            'position': 'absolute',
            'bottom': 0,
            'width': '100%'
        })
    }
})


//pegando hora e data atual para exibir na home

$(function() {
    let date = new Date()



    let diaSemana = date.getDay()
    let semanas = new Array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sabado')

    let meses = new Array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro')
    let mes = date.getMonth()

    let dia = String(date.getDate()).padStart(2, '0');
    let data = $('#data').append(`${semanas[diaSemana]}, dia ${dia} de ${meses[mes]}`)


})

function atualizar() {
    let date = new Date()

    let hora = date.getHours()
        //hora = 18
    let minutos = date.getMinutes()
        //let minutos = 59
    let segundos = date.getSeconds()


    let horas = $('.hora').html(`<strong>${hora}:${minutos}:${segundos}</strong>`)

    if (hora < 12) {
        $('.cumprimentar').html('Bom dia')
    } else if (hora < 18) {
        $('.cumprimentar').html('Boa tarde')

        $('body').css('background', '#e1a919')

        $('.header-home').css({
            "background-image": "url('/img/fundo-tarde-mobile.png')",
            "background-attachment": "fixed"
        })


    } else {
        $('.cumprimentar').html('Boa noite')
        $('body').css('background', 'black')

        $('.header-home').css({
            "background-image": "url('/img/fundo-escuro-mobile.png')",
            "background-attachment": "fixed"
        })
    }

}


setInterval("atualizar()", 1000)

function atualizarHora() {
    atualizar()
}