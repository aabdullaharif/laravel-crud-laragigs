@if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(()=> show = false, 3000)" x-show="show" class="fixed top-0 transfrom -translate-x-1/2 bg-laravel text-white px-40 py-3 left-1/2">
        <p>
            {{ session('success')}}
        </p>
    </div>
@endif