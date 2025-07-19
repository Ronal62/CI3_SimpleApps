<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-5">Data Mata Kuliah</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
					// Data matakuliah
					$matakuliah = [
						['kode' => 'INF101', 'nama' => 'Pemrograman Game', 'sks' => 3],
						['kode' => 'INF102', 'nama' => 'Pemrograman Web', 'sks' => 3],
						['kode' => 'INF103', 'nama' => 'Pemrograman VR', 'sks' => 3],
						['kode' => 'INF104', 'nama' => 'Basis Data', 'sks' => 3],
						['kode' => 'INF105', 'nama' => 'Struktur Data', 'sks' => 4],
						['kode' => 'INF106', 'nama' => 'Jaringan Komputer', 'sks' => 3],
						['kode' => 'INF107', 'nama' => 'Sistem Operasi', 'sks' => 3],
						['kode' => 'INF108', 'nama' => 'Algoritma dan Pemrograman', 'sks' => 4],
						['kode' => 'INF109', 'nama' => 'Matematika Diskrit', 'sks' => 3],
						['kode' => 'INF110', 'nama' => 'Pemrograman Mobile', 'sks' => 3],
						['kode' => 'INF111', 'nama' => 'Kecerdasan Buatan', 'sks' => 3],
						['kode' => 'INF112', 'nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
						['kode' => 'INF113', 'nama' => 'Analisis dan Perancangan Sistem', 'sks' => 3],
						['kode' => 'INF114', 'nama' => 'Manajemen Proyek TI', 'sks' => 2],
						['kode' => 'INF115', 'nama' => 'Keamanan Komputer', 'sks' => 2],
						['kode' => 'INF116', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3],
						['kode' => 'INF117', 'nama' => 'Interaksi Manusia dan Komputer', 'sks' => 2],
						['kode' => 'INF118', 'nama' => 'Sistem Informasi', 'sks' => 3],
						['kode' => 'INF119', 'nama' => 'Pemrograman Visual', 'sks' => 3],
						['kode' => 'INF120', 'nama' => 'Statistika', 'sks' => 2],
						['kode' => 'INF121', 'nama' => 'Etika Profesi TI', 'sks' => 2],
						['kode' => 'INF122', 'nama' => 'Metode Numerik', 'sks' => 2],
					];

					// Pagination setup
					$perPage = 5;
					$totalData = count($matakuliah);
					$totalPage = ceil($totalData / $perPage);
					$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
					if ($page < 1) $page = 1;
					if ($page > $totalPage) $page = $totalPage;

					$start = ($page - 1) * $perPage;
					$matakuliahPage = array_slice($matakuliah, $start, $perPage);
					?>

                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$no = $start + 1;
							foreach ($matakuliahPage as $mk): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($mk['kode']); ?></td>
                                <td><?= htmlspecialchars($mk['nama']); ?></td>
                                <td><?= $mk['sks']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <nav>
                        <ul class="pagination">
                            <li class="page-item<?= ($page <= 1) ? ' disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page - 1 ?>">Previous</a>
                            </li>
                            <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                            <li class="page-item<?= ($i == $page) ? ' active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                            <?php endfor; ?>
                            <li class="page-item<?= ($page >= $totalPage) ? ' disabled' : '' ?>">
                                <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>