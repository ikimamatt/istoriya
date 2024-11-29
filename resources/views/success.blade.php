@extends('layout.layout')
@section('home')
    <div style="background-color: white; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; width: 50%; margin: 0 auto; margin-bottom: 40px; margin-top: 150px; text-align: center;">

        <!-- Box Bulat dengan Icon Centang -->
        <div style="display: inline-block; background-color: #f0f0f0; padding: 15px; border-radius: 50%; margin-bottom: 20px;">
            <svg style="width: 50px; height: 50px; color: green;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
            </svg>
        </div>

        <!-- Teks Pesanan Berhasil Dikonfirmasi -->
        <h2 style="color: black; font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;">Pesanan Berhasil Dikonfirmasi!</h2>

        <!-- Teks ID Pesanan -->
        <p style="font-weight: bold; color: #333; text-align: center; margin-bottom: 10px;">ID Pesanan Anda</p>

        <!-- Box untuk Nomor ID -->
        <div style="background-color: #f0f0f0; padding: 15px; border-radius: 10px; text-align: center; margin-bottom: 20px;">
            <p style="font-size: 18px; font-weight: medium; color: #333;">{{ session('order_code') }}</p>
        </div>

        <!-- Pesan Terima Kasih -->
        <p style="color: #333; margin-bottom: 20px; text-align: justify;">
            Terima kasih telah melakukan pre-order di Istoriya Cafe. Pesanan dan pembayaran Anda telah berhasil diproses. Mohon menunggu informasi lebih lanjut yang akan dikirimkan melalui WhatsApp.
        </p>
    </div>
@endsection






