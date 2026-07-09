        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-money-bill me-2"></i>Bangsukri</div>
            <div class="list-group list-group-flush my-3">
                <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{route('barang_masuk.index')}}"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-dolly-flatbed me-2"></i>Barang Masuk</a>
                <a href="{{route('ruang.index')}}"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-door-open me-2"></i>Ruang</a>
                <a href="{{route('karyawan.index')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-users me-2"></i>Karyawan</a>
                <a href="{{route('pemasok.index')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-truck me-2"></i>Pemasok</a>
                <a href="{{route('barang.index')}}" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-box-open me-2"></i>Barang</a>
                <a href="{{ route('kategori.index') }}"
                class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-tags me-2"></i>Kategori
                </a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-0 w-100 text-start">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </button>
                </form>
            </div>
        </div>
