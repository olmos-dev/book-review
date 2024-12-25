
@if (session('success'))
<div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert" id="alert">
    <strong class="font-bold">Message!</strong><br>
    <span class="block sm:inline">{{ session('success') }}</span>
    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" id="cerrar-boton">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <title>Close</title>
            <path d="M14.348 14.849a1 1 0 001.415-1.415l-4.243-4.243 4.243-4.243a1 1 0 10-1.415-1.415L10 7.757 5.757 3.514A1 1 0 104.343 4.929l4.243 4.243-4.243 4.243a1 1 0 101.415 1.415L10 10.929l4.243 4.243z"/>
        </svg>
    </span>
</div>
@endif

@section('js')
<script>
    /*Method to delete alert message from DOM */
    document.addEventListener("DOMContentLoaded", (event) => {
        var cerrarBoton = document.getElementById('cerrar-boton')
        cerrarBoton.addEventListener("click", function() {
            document.getElementById('alert').remove()
        })
    });
</script>
@endsection
