<div class="card">
    <p><strong>Nama Pelapor:</strong> {{ $laporan['nama'] }}</p>
    <p><strong>Lokasi Kejadian:</strong> {{ $laporan['lokasi'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi'] }} cm</p>
    <p>
        <strong>Status Genangan:</strong> 
        @if($laporan['tinggi'] < 30)
            <span style="color: green; font-weight: bold;">Waspada</span>
        @elseif($laporan['tinggi'] >= 30 && $laporan['tinggi'] <= 70)
            <span style="color: orange; font-weight: bold;">Siaga</span>
        @else
            <span style="color: red; font-weight: bold;">Awas</span>
        @endif
    </p>
</div>