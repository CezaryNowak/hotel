@if(session()->has('message'))
        <script type="module">
            message("{{ __(session('message'))  }}");
        </script>
@endif