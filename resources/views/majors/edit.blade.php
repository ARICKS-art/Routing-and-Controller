@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="mb-8 border-b border-[#E5E3DB] pb-5">
            <a href="#" class="text-xs uppercase tracking-[0.15em] text-slate-400 hover:text-[#A16207]">&larr; Buku
                Induk</a>
            <h1 class="font-display mt-2 text-3xl font-semibold text-[#16213A]">Ubah Data Jurusan</h1>
            <p class="mt-1 text-sm text-slate-500">Memperbarui catatan atas nama <span
                    class="font-medium text-[#16213A]">Akutansi dan Keuangan Lembaga</span>.</p>
        </div>

        <form action="" method="POST" class="space-y-6 border border-[#E5E3DB] bg-white p-8">
            <div>
                <label for="code"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Kode Jurusan</label>
                <input type="text" id="code" name="code" value="AKL"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
            </div>

            <div>
                <label for="name"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Nama Jurusan</label>
                <select id="major" name="major"
                    class="w-full border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207] focus:bg-white focus:outline-none">
                    <option value="" selected>Akutansi dan Keuangan Lembaga</option>
                    <option value="">Teknik Komputer dan Jaringan</option>
                    <option value="">Bisnis dan Marketing</option>
                </select>

            <div>
                <label for="description"
                    class="mb-1.5 block text-xs font-semibold uppercase tracking-[0.1em] text-[#16213A]">Deskripsi</label>
                <textarea id="description" name="description"
                  class="w-full h-32 border border-[#D9D6CD] bg-[#FCFBF8] px-3.5 py-2.5 text-sm focus:border-[#A16207]">Jurusan Akuntansi dan Keuangan Lembaga (AKL) adalah jurusan yang mempelajari tentang akuntansi, keuangan, dan manajemen bisnis. Siswa akan belajar tentang pencatatan transaksi keuangan, penyusunan laporan keuangan, analisis keuangan, serta keterampilan dalam mengelola bisnis dan organisasi.</textarea>   
            </div>
            

           <div class="flex justify-end gap-4 border-t border-[#EFEDE6] pt-6">
                <a href="" class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">Batal</a>
                <button type="submit"
                    class="bg-[#16213A] px-6 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">Perbarui
                    Catatan</button>
            </div>
        </form>
@endsection

