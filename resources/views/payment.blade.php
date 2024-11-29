@extends('layout.layout')
@section('home')
    <div  style="background-color: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 15px; margin: 0 auto; margin-bottom: 40px; margin-top: 120px; padding: 20px; width: 50%;">
        <h2 style="font-size: 24px; font-weight: bold; text-align: center; color: #333; margin-bottom: 20px;">Selesaikan Pembayaran Anda</h2>
        <hr style="border-color: #666; margin-bottom: 20px;">
        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #666; font-weight: bold; margin-bottom: 10px;">TOTAL</label>
            <div style="background-color: #f0f0f0; padding: 15px; border-radius: 10px; font-size: 20px; font-weight: medium; color: #333;">
                Rp{{ number_format($total, 0, ',', '.') }}
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <label style="display: block; color: #666; font-weight: bold; margin-bottom: 10px;">Metode Pembayaran</label>

            <div style="text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px; background-color: white; margin-bottom: 20px;">
                <p style="font-weight: bold; font-size: 18px; color: #333; margin-bottom: 10px;">Bank Transfer</p>
                <img src="assets/images/payment/mandiri.png" alt="Mandiri Logo" style="height: 100px; margin-bottom: 10px;">
                <span style="font-weight: bold; font-size: 18px; color: #555; display: block; margin-top: 10px;">137 00 143 8742 3</span>
            </div>

            <div style="text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px; background-color: white; margin-bottom: 20px;">
                <p style="font-weight: bold; font-size: 18px; color: #333; margin-bottom: 10px;">Bank Transfer</p>
                <img src="assets/images/payment/bsi.png" alt="BSI Logo" style="height: 100px; margin-bottom: 10px;">
                <span style="font-weight: bold; font-size: 18px; color: #555; display: block; margin-top: 10px;">726 108 5555</span>
            </div>

            <div style="text-align: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 10px; background-color: white; margin-bottom: 20px;">
                <p style="font-weight: bold; font-size: 18px; color: #333; margin-bottom: 10px;">Bank Transfer</p>
                <img src="assets/images/payment/bca.png" alt="BCA Logo" style="height: 100px; margin-bottom: 10px;">
                <span style="font-weight: bold; font-size: 18px; color: #555; display: block; margin-top: 10px;">1913072506</span>
            </div>

        </div>
        <form action="{{ route('order.processPayment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #666; font-weight: bold; margin-bottom: 10px;">Unggah Bukti Pembayaran</label>
                <input required type="file" name="payment_proof" style="width: 100%; color: #333; background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 5px; padding: 10px; box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);">
                <button type="submit" style="width: 100%; background-color: #333; color: white; padding: 15px; border-radius: 10px; margin-top: 20px; cursor: pointer;">Kirim</button>
            </div>
        </form>
    </div>
@endsection


