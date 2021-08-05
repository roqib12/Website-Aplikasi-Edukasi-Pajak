

    $(".btn-register").click( function() {

        var nama = $("#nama").val();
        var usia= $("#usia").val();
        var alamat = $("#alamat").val();
        var email = $("#email").val();          
        var password = $("#password").val();

        if (nama.length == "") {

        Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Nama Wajib Diisi !'
        });

        } else if(usia.length == "") {

        Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Usia Wajib Diisi !'
        });

        } else if(alamat.length == "") {

        Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Alamat Wajib Diisi !'
        });

        } else if(email.length == "") {

        Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Email Wajib Diisi !'
        });

        } else if(password.length == "") {

        Swal.fire({
            type: 'warning',
            title: 'Oops...',
            text: 'Password Wajib Diisi !'
        });

        } else {
            
        }
    });     