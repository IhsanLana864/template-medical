<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Survei Kepuasan Masyarakat (SKM)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }
        h4, h5 {
            margin-top: 20px;
            margin-bottom: 15px;
            color: #343a40;
        }
        .form-check-label, .form-label {
            font-weight: normal; /* Override Bootstrap's bold for labels */
        }
        .question-group {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            background-color: #fcfcfc;
        }
        .form-control-sm {
            height: calc(1.5em + .5rem + 2px); /* Adjust height for small inputs */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="text-center mb-4">
        <h5>KUESIONER SURVEI KEPUASAN MASYARAKAT (SKM)</h5>
        <p>PADA UNIT LAYANAN UPT PUSKESMAS CIKALONG KABUPATEN TASIKMALAYA</p>
    </div>

    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-auto">
                    <label for="tanggalSurvei" class="col-form-label">Tanggal Survei:</label>
                </div>
                <div class="col">
                    <input type="date" class="form-control form-control-sm" id="tanggalSurvei">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Jam Survei:</label>
                </div>
                <div class="col d-flex flex-wrap">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" value="" id="jamSurvei1">
                        <label class="form-check-label" for="jamSurvei1">08.00 – 12.00*</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="jamSurvei2">
                        <label class="form-check-label" for="jamSurvei2">13.00 – 17.00*</label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <h4 class="text-center">PROFIL</h4>

    <div class="row mb-3">
        <label class="col-md-2 col-form-label">Jenis kelamin:</label>
        <div class="col-md-10 d-flex align-items-center">
            <div class="form-check me-4">
                <input class="form-check-input" type="checkbox" value="L" id="kelaminL">
                <label class="form-check-label" for="kelaminL">L</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="P" id="kelaminP">
                <label class="form-check-label" for="kelaminP">P</label>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-md-2 col-form-label">Pendidikan:</label>
        <div class="col-md-10 d-flex align-items-center flex-wrap">
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="SD" id="pendidikanSD">
                <label class="form-check-label" for="pendidikanSD">SD</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="SMP" id="pendidikanSMP">
                <label class="form-check-label" for="pendidikanSMP">SMP</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="SMA" id="pendidikanSMA">
                <label class="form-check-label" for="pendidikanSMA">SMA</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="S1" id="pendidikanS1">
                <label class="form-check-label" for="pendidikanS1">S1</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="S2" id="pendidikanS2">
                <label class="form-check-label" for="pendidikanS2">S2</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="S3" id="pendidikanS3">
                <label class="form-check-label" for="pendidikanS3">S3</label>
            </div>
        </div>
    </div>

    <div class="row mb-3 align-items-center">
        <label class="col-md-2 col-form-label">Pekerjaan:</label>
        <div class="col-md-10 d-flex align-items-center flex-wrap">
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="PNS" id="pekerjaanPNS">
                <label class="form-check-label" for="pekerjaanPNS">PNS</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="TNI" id="pekerjaanTNI">
                <label class="form-check-label" for="pekerjaanTNI">TNI</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="POLRI" id="pekerjaanPOLRI">
                <label class="form-check-label" for="pekerjaanPOLRI">POLRI</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="SWASTA" id="pekerjaanSwasta">
                <label class="form-check-label" for="pekerjaanSwasta">SWASTA</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" value="WIRAUSAHA" id="pekerjaanWirausaha">
                <label class="form-check-label" for="pekerjaanWirausaha">WIRAUSAHA</label>
            </div>
            <div class="form-check me-2">
                <input class="form-check-input" type="checkbox" value="LAINNYA" id="pekerjaanLainnya">
                <label class="form-check-label" for="pekerjaanLainnya">LAINNYA.......</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control form-control-sm" placeholder="(sebutkan)" id="pekerjaanLainnyaText">
            </div>
        </div>
    </div>

    <div class="row mb-4 align-items-center">
        <label for="jenisDokumen" class="col-md-4 col-form-label">Jenis Dokumen yang diterima:</label>
        <div class="col-md-8">
            <input type="text" class="form-control form-control-sm" id="jenisDokumen" placeholder="(misal: KTP, Akta, Sertifikat, Poli Umum, dll)">
        </div>
    </div>

    <hr>

    <h4 class="text-center">II. PENDAPAT RESPONDEN TENTANG PELAYANAN</h4>
    <p class="text-center">(Lingkari kode huruf sesuai jawaban masyarakat/responden)</p>

    <div class="row">
        <div class="col-md-6">
            <div class="question-group mb-3">
                <label class="form-label d-block">1. Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p1" id="p1a" value="1">
                    <label class="form-check-label" for="p1a">a. Tidak sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p1" id="p1b" value="2">
                    <label class="form-check-label" for="p1b">b. Kurang sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p1" id="p1c" value="3">
                    <label class="form-check-label" for="p1c">c. Sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p1" id="p1d" value="4">
                    <label class="form-check-label" for="p1d">d. Sangat sesuai.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">2. Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p2" id="p2a" value="1">
                    <label class="form-check-label" for="p2a">a. Tidak mudah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p2" id="p2b" value="2">
                    <label class="form-check-label" for="p2b">b. Kurang mudah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p2" id="p2c" value="3">
                    <label class="form-check-label" for="p2c">c. Mudah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p2" id="p2d" value="4">
                    <label class="form-check-label" for="p2d">d. Sangat mudah.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">3. Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p3" id="p3a" value="1">
                    <label class="form-check-label" for="p3a">a. Tidak cepat.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p3" id="p3b" value="2">
                    <label class="form-check-label" for="p3b">b. Kurang cepat.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p3" id="p3c" value="3">
                    <label class="form-check-label" for="p3c">c. Cepat.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p3" id="p3d" value="4">
                    <label class="form-check-label" for="p3d">d. Sangat cepat.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">4. Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p4" id="p4a" value="1">
                    <label class="form-check-label" for="p4a">a. Sangat mahal.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p4" id="p4b" value="2">
                    <label class="form-check-label" for="p4b">b. Cukup mahal.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p4" id="p4c" value="3">
                    <label class="form-check-label" for="p4c">c. Murah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p4" id="p4d" value="4">
                    <label class="form-check-label" for="p4d">d. Gratis.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">5. Bagaimana pendapat saudara tentang kesesuaian produk pelayanan anatar yang tercantum dalam standar pelayanan dengan hasil yang diberikan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p5" id="p5a" value="1">
                    <label class="form-check-label" for="p5a">a. Tidak sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p5" id="p5b" value="2">
                    <label class="form-check-label" for="p5b">b. Kurang sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p5" id="p5c" value="3">
                    <label class="form-check-label" for="p5c">c. Sesuai.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p5" id="p5d" value="4">
                    <label class="form-check-label" for="p5d">d. Sangat sesuai.</label>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="question-group mb-3">
                <label class="form-label d-block">6. Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p6" id="p6a" value="1">
                    <label class="form-check-label" for="p6a">a. Tidak kompeten.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p6" id="p6b" value="2">
                    <label class="form-check-label" for="p6b">b. Kurang kompeten.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p6" id="p6c" value="3">
                    <label class="form-check-label" for="p6c">c. Kompeten.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p6" id="p6d" value="4">
                    <label class="form-check-label" for="p6d">d. Sangat kompeten.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">7. Bagaimana pendapat saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p7" id="p7a" value="1">
                    <label class="form-check-label" for="p7a">a. Tidak sopan dan ramah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p7" id="p7b" value="2">
                    <label class="form-check-label" for="p7b">b. Kurang sopan dan ramah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p7" id="p7c" value="3">
                    <label class="form-check-label" for="p7c">c. Sopan dan ramah.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p7" id="p7d" value="4">
                    <label class="form-check-label" for="p7d">d. Sangat sopan dan ramah.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">8. Bagaimana pendapat saudara tentang kualitas sarana dan prasarana.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p8" id="p8a" value="1">
                    <label class="form-check-label" for="p8a">a. Buruk.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p8" id="p8b" value="2">
                    <label class="form-check-label" for="p8b">b. Cukup.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p8" id="p8c" value="3">
                    <label class="form-check-label" for="p8c">c. Baik.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p8" id="p8d" value="4">
                    <label class="form-check-label" for="p8d">d. Sangat baik.</label>
                </div>
            </div>

            <div class="question-group mb-3">
                <label class="form-label d-block">9. Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan.</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p9" id="p9a" value="1">
                    <label class="form-check-label" for="p9a">a. Tidak ada.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p9" id="p9b" value="2">
                    <label class="form-check-label" for="p9b">b. Ada tetapi tidak berfungsi.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p9" id="p9c" value="3">
                    <label class="form-check-label" for="p9c">c. Berfungsi kurang maksimal.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="p9" id="p9d" value="4">
                    <label class="form-check-label" for="p9d">d. Dikelola dengan baik.</label>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary">Kirim Survei</button>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9Gkcqhlz8Rd9q2c2A1K5L" crossorigin="anonymous"></script>
</body>
</html>