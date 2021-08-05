$('.add_to_cart').on('click', (e) => {
    e.preventDefault()
    let id = $('.add_to_cart').data('id')
    $.ajax({
        type: 'GET',
        url: '/en/cart/add',
        contentType: "application/json",
        data: {
            id: id,
            quantity: 1,
        },
        success: (res) => {
            console.log(res)
        },
        error: (res) => {
            console.log('error', res)
        }
    })
})