@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold mb-4">Rekap Pemasukan</h4>

                    <form action="{{ route('admin.incomeReport') }}" method="GET" class="mb-4">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="month" class="form-label">Bulan</label>
                                <select name="month" id="month" class="form-select">
                                    @foreach (range(1, 12) as $m)
                                        <option value="{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}"
                                            {{ $m == $month ? 'selected' : '' }}>
                                            {{ DateTime::createFromFormat('!m', $m)->format('F') }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="year" class="form-label">Tahun</label>
                                <select name="year" id="year" class="form-select">
                                    @for ($y = now()->year; $y >= 2000; $y--)
                                        <option value="{{ $y }}" {{ $y == $year ? 'selected' : '' }}>
                                            {{ $y }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label d-block">&nbsp;</label>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </div>
                        </div>
                    </form>

                    <h5>Total Pemasukan: <strong>Rp{{ number_format($totalIncome, 0, ',', '.') }}</strong></h5>

                    <h5 class="mt-4">Produk Terjual</h5>
                    <ul class="list-group">
                        @foreach ($products as $productName => $quantity)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $productName }}
                                <span class="badge bg-primary rounded-pill">{{ $quantity }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
