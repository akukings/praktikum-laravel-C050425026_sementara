<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Nilai</title>

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
            <h1>Data Nilai Mahasiswa</h1>
            <p>Daftar nilai mata kuliah mahasiswa</p>
        </div>

        <div class="card">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($nilai as $item)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            <span class="badge">
                                {{ $item->mahasiswa->nim }}
                            </span>
                        </td>

                        <td>
                            <strong>
                                {{ $item->mahasiswa->nama }}
                            </strong>
                        </td>

                        <td>
                            {{ $item->mata_kuliah }}
                        </td>

                        <td>
                            {{ $item->nilai }}
                        </td>

                        <td>
                            <span class="grade">
                                {{ $item->grade }}
                            </span>
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