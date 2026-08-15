<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
   {
      $title = "Sistem Sekolah - Data Siswa";
      $students = [
         [
            "id" => 1,
            "nis" => "1002",
            "name" => "ANDI",
            "class" => "XII TKJ 1",
            "major" => "TKJ"
         ],
         [
            "id" => 2,
            "nis" => "1002",
            "name" => "BUDI ARIYANTO",
            "class" => "XII AKL 1",
            "major" => "AKL"
         ],
         [
            "id" => 3,
            "nis" => "1002",
            "name" => "SANDIAGA UNO",
            "class" => "XII BID",
            "major" => "BID"
         ],
         
      ];
      return view('students.index', [
         "title" => $title,
         "students" => $students
      ]);
   }
   public function show(string $id)
   {
      $title = "Sistem Sekolah - Detail Siswa";
      return view('students.show', [
         "title" => $title
      ]);
   }
   public function create()
   {
      $title = "Sistem Sekolah - Tambah Siswa";
      return view('students.create', [
         "title" => $title
      ]);
   }

   public function edit()
   {
      $title = "Sistem Sekolah - Ubah Siswa";
      return view('students.edit', [
         "title" => $title
      ]);
   }

   public function store()
   {
      return "Melakukan penambahan data siswa";
   } 

   public function update()
   {
      return "Melakukan perubahan data siswa";
   }

   public function Destroy()
   {
      return "Menghapus data siswa";
   }
}

