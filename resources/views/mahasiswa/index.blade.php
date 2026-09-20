<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <h2>🎓 Akademik</h2>

        <div>
            <a href="/mahasiswa">Mahasiswa</a>
            <a href="/nilai">Nilai</a>
        </div>
    </nav>

    <div class="container">

        <div class="header">
            <h1>Data Mahasiswa</h1>
            <p>Daftar mahasiswa dan nilai akademik</p>
        </div>

        <div class="card">

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($mahasiswa as $mhs)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <span class="badge">
                                {{ $mhs->nim }}
                            </span>
                        </td>

                        <td>
                            <strong>{{ $mhs->nama }}</strong>
                        </td>

                        <td>{{ $mhs->email }}</td>

                        <td>{{ $mhs->prodi }}</td>

                        <td>
                            Semester {{ $mhs->semester }}
                        </td>

                        <td>

                            @forelse ($mhs->nilai as $nilai)

                                <div class="nilai-item">
                                    {{ $nilai->mata_kuliah }}
                                    -
                                    {{ $nilai->nilai }}

                                    <span class="grade">
                                        {{ $nilai->grade }}
                                    </span>
                                </div>

                            @empty

                                <span class="empty">
                                    Belum ada nilai
                                </span>

                            @endforelse

                        </td>

                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

    </div>

    <div class="footer">
        Mini Aplikasi Manajemen Data Akademik
    </div>

</body>
</html>