<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>
<div class="container">
  <!-- Content here -->
  <h1>Thông Tin Liên Hệ</h1>
  <form id="FormContact">
        <div class="form-group">
            <label for="name">Họ và Tên</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nhập họ tên">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Nhập số điện thoại">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Nội dung</label>
            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="2"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
        <!-- <button type="button" class="btn btn-primary"  onclick="submitForm()">Submit</button> -->
        <button type="button" class="btn btn-primary"  onclick="cleanForm()">Clear</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" type="text/javascript"></script>

<script>
    //validate
    $("#FormContact").validate({
        onfocusout: false,
		onkeyup: false,
		onclick: false,
        rules: {
            "name": {
				required: true,
			},
            "email": {
				required: true,
			},
            "phone": {
				required: true,
			},
        },
        messages: {
            "name":{
                required: 'không được để trống'
            },
            "email":{
                required: 'không được để trống'
            },
            "phone":{
                required: 'không được để trống'
            },
        },
        submitHandler: function(form) {
            submitForm();
        }
    });
    // call ajax
    function submitForm() {
        let data = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                note: $('textarea[name="note"]').val(),
            };

        $.ajax({
            type: "POST",
            url: 'php/contact.php',
            dataType: 'json',
            data: data,
            success: function (response) {
                if(response.success){
                    notify('success','Đã gửi thành công');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            }
        });
    }
    // notify
    function notify(status, message){
        Swal.fire({
            position: 'top-end',
            icon: status,
            title: message,
            showConfirmButton: false,
            timer: 1500
        })
    }
    // clear form
    function cleanForm() {
            $('#FormContact')[0].reset();
        }


</script>
</body>
</html>