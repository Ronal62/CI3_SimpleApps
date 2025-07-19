<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-5">Data Mahasiswa</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
					// Data mahasiswa
					$mahasiswa = [
						['nim' => '23091397142', 'name' => 'Ronald Budi Abdul Wahid', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400128', 'name' => 'Darussalam', 'major' => 'Teknik Informatika'],
						['nim' => '2321400122', 'name' => 'Chandra Wijaya', 'major' => 'Sistem Informasi'],
						['nim' => '2321400123', 'name' => 'Rizky Pratama', 'major' => 'Teknik Informatika'],
						['nim' => '2321400124', 'name' => 'Putri Amelia', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400125', 'name' => 'Ahmad Fauzi', 'major' => 'Sistem Informasi'],
						['nim' => '2321400126', 'name' => 'Siti Nurhaliza', 'major' => 'Teknik Informatika'],
						['nim' => '2321400127', 'name' => 'Budi Santoso', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400129', 'name' => 'Linda Permata', 'major' => 'Sistem Informasi'],
						['nim' => '2321400130', 'name' => 'Agus Salim', 'major' => 'Teknik Informatika'],
						['nim' => '2321400131', 'name' => 'Maria Ulfa', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400132', 'name' => 'Yusuf Maulana', 'major' => 'Sistem Informasi'],
						['nim' => '2321400133', 'name' => 'Desi Anggraini', 'major' => 'Teknik Informatika'],
						['nim' => '2321400134', 'name' => 'Rina Oktaviani', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400135', 'name' => 'Fajar Nugroho', 'major' => 'Sistem Informasi'],
						['nim' => '2321400136', 'name' => 'Wulan Sari', 'major' => 'Teknik Informatika'],
						['nim' => '2321400137', 'name' => 'Hendra Saputra', 'major' => 'Manajemen Informatika'],
						['nim' => '2321400138', 'name' => 'Nurul Hidayah', 'major' => 'Sistem Informasi'],
						['nim' => '2321400139', 'name' => 'Galih Prakoso', 'major' => 'Teknik Informatika'],
						['nim' => '2321400140', 'name' => 'Melati Ayu', 'major' => 'Manajemen Informatika'],
					];

					// Pagination setup
					$perPage = 10;
					$totalData = count($mahasiswa);
					$totalPage = ceil($totalData / $perPage);
					$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
					if ($page < 1) $page = 1;
					if ($page > $totalPage) $page = $totalPage;

					$start = ($page - 1) * $perPage;
					$mahasiswaPage = array_slice($mahasiswa, $start, $perPage);
					?>

                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$no = $start + 1;
							foreach ($mahasiswaPage as $student): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($student['nim']); ?></td>
                                <td><?= htmlspecialchars($student['name']); ?></td>
                                <td><?= htmlspecialchars($student['major']); ?></td>
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