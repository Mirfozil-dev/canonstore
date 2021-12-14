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
                $('.site-alert').addClass('alert-success in')
                $('.site-alert').html('Товар добавлен в корзину')
                $('.cart-items-count').html(JSON.parse(res).quantity)
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-success in')
                    $('.site-alert').html('')
                },1500)
            } else if (JSON.parse(res).status === 'unauthorized') {
                $('.site-alert').addClass('alert-dander in')
                $('.site-alert').html('Вы не авторизованы!')
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-dander in')
                    $('.site-alert').html('')
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
    let id = e.target.closest('.cart_delete_btn').getAttribute('data-id')
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
    let id = e.target.closest('.cart-minus-quantity').getAttribute('data-id')
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
    let id = e.target.closest('.cart-plus-quantity').getAttribute('data-id')
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
    let id = e.target.closest('.add_to_compare').getAttribute('data-id')
    $.ajax({
        type: 'GET',
        url: '/en/compare/add',
        contentType: "application/json",
        data: {
            id: id,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                $('.site-alert').addClass('alert-success in')
                $('.site-alert').html('Товар добавлен в сравнение')
                $('.compare_items_count').html(JSON.parse(res).quantity)
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-success in')
                    $('.site-alert').html('')
                },1500)
            } else if (JSON.parse(res).status === 'unauthorized') {
                $('.site-alert').addClass('alert-dander in')
                $('.site-alert').html('Вы не авторизованы!')
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-dander in')
                    $('.site-alert').html('')
                },1500)
            }
        },
        error: (res) => {
            console.log('error', res)
        }
    })
})

$('.compare_delete_btn').on('click', (e) => {
    e.preventDefault()
    let id = e.target.closest('.compare_delete_btn').getAttribute('data-id')
    console.log(id)
    $.ajax({
        type: 'GET',
        url: '/en/compare/delete',
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

$('.add_to_wishlist').on('click', (e) => {
    e.preventDefault();
    let id = e.target.closest('.add_to_wishlist').getAttribute('data-id')
    $.ajax({
        type: 'GET',
        url: '/en/wishlist/add',
        contentType: "application/json",
        data: {
            id: id,
        },
        success: (res) => {
            if (JSON.parse(res).status === 'success') {
                $('.site-alert').addClass('alert-success in')
                $('.site-alert').html('Товар добавлен в Избранное')
                $('.wishlist_items_count').html(JSON.parse(res).quantity)
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-success in')
                    $('.site-alert').html('')
                },1500)
            } else if (JSON.parse(res).status === 'unauthorized') {
                $('.site-alert').addClass('alert-dander in')
                $('.site-alert').html('Вы не авторизованы!')
                setTimeout(() => {
                    $('.site-alert').removeClass('alert-dander in')
                    $('.site-alert').html('')
                },1500)
            }
        },
        error: (res) => {
            console.log('error', res)
        }
    })
})

$('.wishlist_delete_btn').on('click', (e) => {
    e.preventDefault()
    let id = e.target.closest('.wishlist_delete_btn').getAttribute('data-id')
    $.ajax({
        type: 'GET',
        url: '/en/wishlist/delete',
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

const togglers = document.querySelectorAll("#toggle-btn").forEach(element=>{
            $(document).ready(function () {
                $(element).click(function () {
                    console.log($(this)[0].nextElementSibling)
                    $($(this)[0].nextElementSibling).collapse('toggle'); // toggle collapse
                });
            });
        })