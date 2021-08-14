$('.add_to_cart').on('click', (e) => {
    e.preventDefault()
    let id = e.target.closest('.add_to_cart').getAttribute('data-id')
    $.ajax({
        type: 'GET',
        url: '/en/cart/add',
        contentType: "application/json",
        data: {
            id: id,
            quantity: 1,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                $('.cart-alert').addClass('alert-success in')
                $('.cart-alert').html('Товар добавлен в корзину')
                setTimeout(() => {
                    $('.cart-alert').removeClass('alert-success in')
                    $('.cart-items-count').html(JSON.parse(res).quantity)
                },1500)
                $('.cart-items-count').text()
            } else if (JSON.parse(res).status === 'unauthorized') {
                $('.cart-alert').addClass('alert-dander in')
                $('.cart-alert').html('Вы не авторизованы!')
                setTimeout(() => {
                    $('.cart-alert').removeClass('alert-dander in')
                    $('.cart-alert').html('')
                },1500)
            }
        },
        error: (res) => {
            console.log('error', res)
        }
    })
})
$('.cart_delete_btn').on('click', (e) => {
    e.preventDefault()
    let id = $('.cart_delete_btn').data('id')
    $.ajax({
        type: 'GET',
        url: '/en/cart/delete',
        contentType: "application/json",
        data: {
            id: id,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                window.location.reload()
            }
            console.log(res)
        },
        error: (res) => {
            console.log(res)
        }
    })
})
$('.cart-minus-quantity').on('click', (e) => {
    e.preventDefault()
    let id = $('.cart-minus-quantity').data('id')
    $.ajax({
        type: 'GET',
        url: '/en/cart/minus-quantity',
        contentType: "application/json",
        data: {
            id: id,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                window.location.reload()
            }
            console.log(res)
        },
        error: (res) => {
            console.log(res)
        }
    })
})
$('.cart-plus-quantity').on('click', (e) => {
    e.preventDefault()
    let id = $('.cart-plus-quantity').data('id')
    $.ajax({
        type: 'GET',
        url: '/en/cart/plus-quantity',
        contentType: "application/json",
        data: {
            id: id,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                window.location.reload()
            }
            console.log(res)
        },
        error: (res) => {
            console.log(res)
        }
    })
})
$('.add_to_compare').on('click', (e) => {
    e.preventDefault();
    console.log(true)
})