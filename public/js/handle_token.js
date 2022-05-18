let searchParams = new URLSearchParams(window.location.search)
if(searchParams.has('t')){
    $.ajax({
        url: '/token',
        method: 'post',
        data: {
            token: searchParams.get('t'),
            action: 'LINKOPEN',
        }
    });

    $('.button').on('click', function (){
        $.ajax({
            url: '/token',
            method: 'post',
            data: {
                token: searchParams.get('t'),
                action: 'CLICK',
            }
        });
    });
}
