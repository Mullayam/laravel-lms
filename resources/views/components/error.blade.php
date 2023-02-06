<script>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                Toastify({
                    text: "{!! $error !!}",
                    duration: 3000,
                    style: {
                        fontWeight: 400,
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();
            @endforeach
        @endif

    {{$slot}}
    </script>
