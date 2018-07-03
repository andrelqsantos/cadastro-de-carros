function inserirPessoa() {
    $.ajax({
        url: 'src/pessoas/inserir-pessoa.php',
        type: 'POST',
        beforeSend:function() {
            $('#modal').find('.modal-header').html('<h4>Formulário de cadastro</h4>');
            $('#modal').find('.modal-body').html('Carregando...');
            $('#modal').modal('show');
        },
        success:function(html) {

            $('#modal').find('.modal-body').html(html);
            $('#modal').find('.modal-body').find('form').on('submit', function(e){
                e.preventDefault();
                var nome = $(this).find('input[name=nome]').val();
                var email = $(this).find('input[name=email]').val();
                var telefone = $(this).find('input[name=telefone]').val();
                var data = $(this).find('input[name=data]').val();
                var sexo = $(this).find('select[name=sexo]').val();
                    $.ajax({
                      url: 'src/pessoas/enviar-pessoa-inserida.php',
                      type: 'POST',
                      data: {'nome': nome, 'email': email, 'telefone': telefone, 'data': data, 'sexo': sexo},
                      success:function(e) {
                      window.location.href = window.location.href
                    /*  swal({
                          type: 'success',
                          title: 'Concluido!',
                          text: 'Alterado com sucesso!'
                        });*/
                      }
                    });
            });

            $('#modal').modal('show');
        }
    });
}

function inserirCarro(id) {
    $.ajax({
        url: 'src/carros/inserir-carro.php',
        type: 'GET',
        beforeSend:function() {
            $('#modal-carro').find('.modal-header').html('<h4>Formulário de cadastro</h4>');
            $('#modal-carro').find('.modal-body').html('Carregando...');
            $('#modal-carro').modal('show');
        },
        success:function(html) {

            $('#modal-carro').find('.modal-body').html(html);
            $('#modal-carro').find('.modal-body').find('form').on('submit', function(e){
                e.preventDefault();
                var marca = $(this).find('select[name=marca]').val();
                var modelo = $(this).find('input[name=modelo]').val();
                var id_pessoa = id;
                    $.ajax({
                      url: 'src/carros/enviar-carro-inserido.php',
                      type: 'POST',
                      data: {'marca': marca, 'modelo': modelo, 'id_pessoa': id_pessoa},
                      success:function(e) {
                        //alert("sucesso");
                      window.location.href = window.location.href
                    /*  swal({
                          type: 'success',
                          title: 'Concluido!',
                          text: 'Alterado com sucesso!'
                        });*/
                      }
                    });
            });

            $('#modal-carro').modal('show');
        }
    });
}

function editarCarro(id) {
      $.ajax({
          url: 'src/carros/editar-carro.php',
          type: 'POST',
          data: {'id': id},
          beforeSend:function() {
              $('#modal-carro').find('.modal-header').html('<h4>Formulário de edição</h4>');
              $('#modal-carro').find('.modal-body').html('Carregando...');
              $('#modal-carro').modal('show');
          },
          success:function(html) {
              $('#modal-carro').find('.modal-body').html(html);
              $('#modal-carro').find('.modal-body').find('form').on('submit', function(e){
                  e.preventDefault();
                  var id_carro = $(this).find('input[name=id]').val();
                  var marca = $(this).find('select[name=marca]').val();
                  var modelo = $(this).find('input[name=modelo]').val();
                      $.ajax({
                        url: 'src/carros/salvar-carro-editado.php',
                        type: 'POST',
                        data: {'id_carro': id_carro, 'marca': marca, 'modelo': modelo},
                        success:function(e) {

                        window.location.href = window.location.href
                        /*swal({
                            type: 'success',
                            title: 'Concluido!',
                            text: 'Alterado com sucesso!'
                          });*/
                        }
                      });
              });

              $('#modal-carro').modal('show');
          }
      });
}

function editarPessoa(id){
    $.ajax({
        url: 'src/pessoas/editar-pessoa.php',
        type: 'POST',
        data: {'id': id},
        beforeSend:function() {
            $('#modal').find('.modal-header').html('<h4>Formulário de edição</h4>');
            $('#modal').find('.modal-body').html('Carregando...');
            $('#modal').modal('show');
        },
        success:function(html) {
            $('#modal').find('.modal-body').html(html);
            $('#modal').find('.modal-body').find('form').on('submit', function(e){
                e.preventDefault();
                var id = $(this).find('input[name=id]').val();
                var nome = $(this).find('input[name=nome]').val();
                var email = $(this).find('input[name=email]').val();
                var telefone = $(this).find('input[name=telefone]').val();
                    $.ajax({
                      url: 'src/pessoas/salvar-pessoa-editada.php',
                      type: 'POST',
                      data: {'id': id, 'nome': nome, 'email': email, 'telefone': telefone},
                      success:function(e) {
                      window.location.href = window.location.href
                      /*swal({
                          type: 'success',
                          title: 'Concluido!',
                          text: 'Alterado com sucesso!'
                        });*/
                      }
                    });
            });

            $('#modal').modal('show');
        }
    });
}

function excluirPessoa(id){
  swal({
    title: "Excluir registro",
    text: "Gostaria de excluir este registro?",
    icon: "warning",
    buttons: true,
    dangerMode: true  })
  .then((willDelete) => {
    if (willDelete) {
       $.ajax({
          method:"POST",
          url:"src/pessoas/excluir-pessoa.php",
          data: {'id': id},
          success:function(e){
            /*swal("Excluido com successo", {icon: "success" });

          }*/
          atualizaTela();
      }
    });
    } else {
      swal("Registro não deletado!");

    }
  });

}

function excluirCarro(id){
  swal({
    title: "Excluir registro",
    text: "Gostaria de excluir este registro?",
    icon: "warning",
    buttons: true,
    dangerMode: true  })
  .then((willDelete) => {
    if (willDelete) {
       $.ajax({
          method:"POST",
          url:"src/carros/excluir-carro.php",
          data: {'id': id},
          success:function(e){
            /*swal("Excluido com successo", {icon: "success" });

          }*/

          atualizaTela();
      }
    });
    } else {
      swal("Registro não deletado!");

    }
  });

}

function inserirRevisao(id) {
  $.ajax({
      url: 'src/revisoes/inserir-revisao.php',
      type: 'POST',
      beforeSend:function() {
          $('#modal-carro').find('.modal-header').html('<h4>Formulário de cadastro</h4>');
          $('#modal-carro').find('.modal-body').html('Carregando...');
          $('#modal-carro').modal('show');
      },
      success:function(html) {

          $('#modal-carro').find('.modal-body').html(html);
          $('#modal-carro').find('.modal-body').find('form').on('submit', function(e){
              e.preventDefault();
              var data = $(this).find('input[name=data]').val();
              var id_carro = id;
                  $.ajax({
                    url: 'src/revisoes/enviar-revisao-inserida.php',
                    type: 'POST',
                    data: {'data': data, 'id_carro': id_carro},
                    success:function(e) {
                    window.location.href = window.location.href
                    /*swal({
                        type: 'success',
                        title: 'Concluido!',
                        text: 'Alterado com sucesso!'
                      });*/
                    }
                  });
          });

          $('#modal').modal('show');
      }
  });
}

function addCarros(id) {
    window.location.href = 'carros.php?id='+id;
    /*$.ajax({
        method:"GET",
        url:"src/inserir-carro.php",
        data:{'id': id},
        success:function(e){
            alert("sucesso");
        }
    });*/
}
function atualizaTela() {
    window.location.href = window.location.href
}
