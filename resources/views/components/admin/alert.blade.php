@if(session('success'))

    <div
        id="admin-alert"
        class="fixed top-8 left-1/2 -translate-x-1/2 z-[9999] flex items-center gap-3 bg-[#0f4c3a] text-white px-6 py-4 rounded-2xl shadow-2xl transition-all duration-500 animate-[fadeIn_.3s_ease]">

        <div class="w-10 h-10 rounded-xl bg-white/15 flex items-center justify-center">

            <i data-lucide="check"></i>

        </div>

        <div>

            <p class="font-bold sharif-bold">
                موفق
            </p>

            <p class="text-sm opacity-90">
                {{ session('success') }}
            </p>

        </div>

    </div>

    <script>

    document.addEventListener('DOMContentLoaded', function () {

        const alert = document.getElementById('admin-alert');

        setTimeout(() => {

            alert.classList.add(
                'opacity-0',
                '-translate-y-5'
            );

            setTimeout(() => {

                alert.remove();

            },500);

        },3000);

    });

    </script>

@endif