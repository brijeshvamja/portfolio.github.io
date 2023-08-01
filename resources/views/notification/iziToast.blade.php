<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        iziToast.settings({
            position: 'topRight',
            balloon: true,
            animateInside: true,
            transitionIn: 'fadeInLeft',
            transitionOut: 'fadeOutRight',
            close: true,
        });
    });
</script>
@if (session()->get('success'))
    <script>
        $(document).ready(function () {
            iziToast.success({
                title: 'Success !',
                message: '{{ session()->get('success') }}',
                timeout: 5000,
                iconColor: 'green'
            });
        });
    </script>
@endif

@if (session()->get('info'))
    <script>
        $(document).ready(function () {
            iziToast.info({
                title: 'Info !',
                message: '{{ session()->get('info') }}',
                timeout: 7000,
                iconColor: 'blue'
            });
        });
    </script>
@endif

@if (session()->get('error'))
    <script>
        $(document).ready(function () {
            iziToast.error({
                title: 'Error !',
                message: '{{ session()->get('error') }}',
                timeout: 5000,
                iconColor: 'red'
            });
        });
    </script>
@endif
