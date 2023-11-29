function ChangeToSlug() {
    var title, slug;

    //Lấy text từ thẻ input title 
    title = document.getElementById("title").value;

    //Đổi chữ hoa thành chữ thường
    slug = title.toLowerCase();

    //Đổi ký tự có dấu thành không dấu
    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
    slug = slug.replace(/đ/gi, 'd');
    //Xóa các ký tự đặt biệt
    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
    //Đổi khoảng trắng thành ký tự gạch ngang
    slug = slug.replace(/ /gi, "-");
    //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
    //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
    slug = slug.replace(/\-\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-\-/gi, '-');
    slug = slug.replace(/\-\-\-/gi, '-');
    slug = slug.replace(/\-\-/gi, '-');
    //Xóa các ký tự gạch ngang ở đầu và cuối
    slug = '@' + slug + '@';
    slug = slug.replace(/\@\-|\-\@|\@/gi, '');
    //In slug ra textbox có id “slug”
    document.getElementById('slug').value = slug;
}

$('.show-alert-delete-box').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn chắc chứ ?',
        text: 'Mục này sẽ bị chuyển vào trong thùng rác !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng Ý !',
        cancelButtonText: 'Quay Lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});

$('.show-alert-delete-box-product').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn chắc chứ ?',
        text: 'Loại sản phẩm này và các sản phẩm của sản phẩm này sẽ bị chuyển vào trong thùng rác !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Đồng Ý !',
        cancelButtonText: 'Quay Lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});

$('.show-alert-force-delete-product').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn có chắc chắn không ?',
        text: 'Loại sản phẩm và các sản phẩm liên quan sẽ bị xóa vĩnh viễn, không thể khôi phục !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Vâng , xóa bỏ!',
        cancelButtonText: 'Quay lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});




$('.show-alert-force-delete').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn có chắc chắn không ?',
        text: 'Mục bạn chọn sẽ bị xóa vĩnh viễn, không thể khôi phục !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Vâng , xóa bỏ!',
        cancelButtonText: 'Quay lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});

$('.show-alert-restore').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn có chắc chắn không ?',
        text: 'Mục bạn chọn và các mục liên quan sẽ được khôi phục !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Vâng , xóa bỏ!',
        cancelButtonText: 'Quay lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});

$('.show-alert-delete-box-brand').click(function (event) {
    event.preventDefault();
    var form = $(this).closest("form")
    Swal.fire({
        title: 'Bạn có chắc chắn không ?',
        text: 'Hành động này sẽ xóa vĩnh viễn tất cả các sản phẩm liên quan đến nhãn hàng !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Vâng , xóa bỏ!',
        cancelButtonText: 'Quay lại'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })
});


$('#gat1').on('click', function () {
    let box1 = document.getElementById('box1');

    console.log(document.getElementById('gat1').classList.toggle('on'));
})



$('body').on('click', "#close-img-btn", function (e) {
    $(this).parent().parent().remove();
});

