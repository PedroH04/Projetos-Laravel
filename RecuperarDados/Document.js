$("document").ready(function(){
    $("#button").click(function(){
        var email = $("#nome").val();
        var password = $("#password").val();

        var dados = new FormData();

        dados.append('email', email);
        dados.append('password', password);

        $.ajax({
            type:"POST",
            async:false,
            data:{dados},
            url:"Arquivos.js",
            success: function(){
                $("#button").html("Aquivos enviados!");
            }
        })
    });
});