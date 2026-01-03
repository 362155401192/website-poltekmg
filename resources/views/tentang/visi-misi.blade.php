@extends('layouts.guest')

@section('content')
<section class="bg-gray-100 py-20">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-white rounded-2xl shadow-xl p-10">

            <h1 class="text-4xl font-bold text-center text-blue-700 mb-10">
                Visi & Misi
            </h1>

            <!-- VISI -->
            <div class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-3 flex items-center gap-2">
                    🎯 Visi
                </h2>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Menjadi perguruan tinggi vokasi unggul dan berdaya saing
                    dalam pengembangan sumber daya manusia yang profesional,
                    inovatif, dan berkarakter.
                </p>
            </div>

            <!-- MISI -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                    🚀 Misi
                </h2>
                <ul class="space-y-3 text-gray-600 text-lg list-disc pl-6">
                    <li>Menyelenggarakan pendidikan vokasi berbasis praktik dan industri</li>
                    <li>Menghasilkan lulusan yang kompeten dan berdaya saing</li>
                    <li>Mengembangkan kerja sama dengan dunia usaha dan industri</li>
                    <li>Melaksanakan penelitian dan pengabdian kepada masyarakat</li>
                </ul>
            </div>

        </div>
    </div>
</section>
@endsection
