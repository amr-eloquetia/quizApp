<script type="application/javascript">
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    @if(Session::has('alert'))
    // @todo daca are erori, fire la toate pe rand
    Toast.fire({
        icon: '{{ Session::get('alert')['status'] }}',
        title: '{{ Session::get('alert')['message'] }}'
    });
    @endif
</script>
