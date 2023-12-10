<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aturan Umum Asrama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="admin-asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin-asset/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    {{-- <link href="admin-asset/assets/vendor/simple-datatables/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">

    <!-- Template Main CSS File -->
    <link href="admin-asset/assets/css/style.css" rel="stylesheet">

</head>

<body>
    @csrf
    <!-- ======= Sidebar ======= -->

    <main>
        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Aturan Umum Asrama</h5>
                    <a class="btn btn-primary" href="beranda" role="button">Kembali</a>
                    {{-- <button class="btn btn-warning" type="button" onclick="createPDF()">Download</button> --}}
                    <br>
                    <br>
                    <!-- Table with stripped rows -->

                    <div id="tab">
                        <table class="table datatable" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Peraturan</th>
                                    <th scope="col">Tingkat Pelanggaran</th>
                                    <th scope="col">Poin</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Meninggalkan asrama tanpa seizin pembina asrama</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Terlambat bangun pagi</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Terlambat ibadah pagi</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Terlambat melaksanakan tugas piket kebersihan.</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Terlambat keluar asrama.</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tidak mandi pada saat berangkat makan ke kantin dan mengikuti kegiatan akademik
                                    </td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Menyimpan gantungan pakaian di lemari melebihi jumlah yang ditentukan</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Menyimpan peralatan kebersihan bermalam di kamar</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Tidak melaporkan/membiarkan kerusakan fasilitas asrama</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Meninggalkan peralatan menyetrika dengan tidak rapi</td>
                                    <td>Ringan</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Meninggalkan lampu kamar tidur atau lampu asrama dalam keadaan menyala</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Meninggalkan keran air dalam keadaan menyala.</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Meninggalkan kamar dalam keadaan tidak bersih/rapi.</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Meninggalkan lemari dan tempat tidur dalam keadaan tidak bersih/rapi dan berabu.
                                    </td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Menggunakan seprei atau sarung bantal tidak sesuai warna yang seharusnya</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Melalaikan kerapian serta kebersihan lingkungan asrama: selasar, area kamar
                                        mandi,
                                        area penyetrikaan, area pantri dan area lainnya di asrama</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Meninggalkan perlengkapan pribadi di sembarangan tempat: handuk, pakaian,
                                        peralatan
                                        mandi, ember, dan lainnya</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Tidak mengambil pakaian kering dari jemuran dalam batas lebih dari 2 x 24 jam
                                        (dikondisikan dengan cuaca)</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Tidak mencuci seprei selama lebih dari 2 minggu</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Mencuci, mandi di luar wakt yang telah ditentukan.</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Terlambat masuk asrama pada malam hari.</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Meninggalkan sepatu/sandal/payung bermalam di luar asrama atau pada jam akademik
                                    </td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Tidur di kamar mahasiswa lain</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Tidur berdua dalam satu tempat tidur</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Melanggar ketentuan waktu senyap (silent time), seperti: lampu kamar menyala,
                                        belajar, mengobrol, bertelepon, bermain games, menonton dengan menggunakan
                                        handphone, dsb</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Membawa pakaian atau perlengkapan melebihi batas ketentuan perlengkapan
                                        mahasiswa
                                    </td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Membawa perlengkapan yang tidak sesuai dengan kriteria perlengkapan mahasiswa
                                    </td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Membawa pakaian atau perlengkapan dengan jumlah melebihi batas barang-barang
                                        yang
                                        telah ditentukan</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Membawa boneka lebih besar dari 50 cm</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Membawa alat musik ke asrama tanpa seizin Pembina asrama untuk keperluan
                                        tertentu
                                    </td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Tidak mencantumkan nama (identitas pribadi) pada pakaian maupun
                                        peralatan/perlengkapan masing-masing</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Meletakan atau membuang sampah sembarangan di lingkungan asrama</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Keluar pintu asrama dengan menggunakan celana pendek atau baju tidur</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Menitip nasi tanpa seizin pembina asrama.</td>
                                    <td>Ringan</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Tidak mengikuti ibadah pagi tanpa seizin dari pembina asrama</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Tidak mengikuti senam mahasiswa tanpa seizin dari pembina asrama</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Tidak melaksanakan tugas piket kebersihan</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Tidak menggunakan seprei atau sarung bantal</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>39</td>
                                    <td>Merendam pakaian 1 x 24 jam</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>40</td>
                                    <td>Tidak mengikuti kegiatan evaluasi dan ibadah malam tanpa seizin pembina asrama
                                    </td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>41</td>
                                    <td>Membuat keributan di asrama</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>42</td>
                                    <td>Membawa dan menyimpan perlengkapan kosmetik yang tidak diperkenankan, seperti:
                                        pewarna bibir, pewarna alis, alas bedak, make up, dan lainnya yang tidak sesuai
                                        dengan ketentuan perlengkapan mahasiswa</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>43</td>
                                    <td>Membawa tas beroda/koper/tas bertulang yang tidak bisa dilipat atau dimasukan ke
                                        dalam lemari</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>44</td>
                                    <td>Membawa dan memakan nasi di dalam asrama bukan karena sakit</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>45</td>
                                    <td>Tidak melaporkan kehilangan barang pribadi yang dialami</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>46</td>
                                    <td>Tidak mengenakan pakaian atau hanya menggunakan pakaian dalam di asrama</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>47</td>
                                    <td>Keluar lingkungan asrama dengan menggunakan sandal jepit</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>48</td>
                                    <td>Membawa benda tajam dan alat pemantik api ke asrama.</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>49</td>
                                    <td>Masuk/berada di asrama tanpa seizin pembina asrama pada jam akademik atau jam
                                        kolaboratif</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>50</td>
                                    <td>Tidak melaporkan keadaan diri sedang sakit kepada Pembina Asrama</td>
                                    <td>Ringan</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>51</td>
                                    <td>Membawa barang-barang elektronik yang tidak diperkenankan, seperti: radio,
                                        kamera,
                                        lampu belajar, catok rambut, hair dryer, alat pemasak air, Ipad lebih besar dari
                                        6
                                        inci, speaker, kipas elektronik baik kecil atau besar dan sebagainya</td>
                                    <td>Ringan</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>52</td>
                                    <td>Membawa atau memakan makanan seperti: mie instant dan durian di asrama</td>
                                    <td>Ringan</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>53</td>
                                    <td>Menggunakan pembalut sekali pakai (putri)</td>
                                    <td>Ringan</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>54</td>
                                    <td>Menyimpan sampah pribadi dan berbau (seperti: cutton bud, kulit buah, bekas
                                        pembalut) di dalam lemari/tas atau barang pribadi lainnya</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>55</td>
                                    <td>Mencoret, menempel dan memaku benda di dinding asrama</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>56</td>
                                    <td>Membawa laptop ke kamar/asrama tanpa seizin pembina asrama</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>57</td>
                                    <td>Terlambat masuk ke asrama dalam jangka waktu yang lama tanpa pemberitahuan</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>58</td>
                                    <td>Membawa pisau, mancis ke asrama</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>59</td>
                                    <td>Membuat keonaran dan atau kegaduhan di asrama.</td>
                                    <td>Ringan</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>60</td>
                                    <td>Membawa alat masak dan memasak di asrama</td>
                                    <td>Sedang</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>61</td>
                                    <td>Memanjat pagar, tembok dan atau memanjat jendela asrama untuk masuk ke dalam
                                        asrama
                                    </td>
                                    <td>Sedang</td>
                                    <td>15</td>
                                </tr>
                                <tr>
                                    <td>62</td>
                                    <td>Merusak perlengkapan yang ada di asrama dengan sengaja dan tidak
                                        bertanggungjawab
                                    </td>
                                    <td>Sedang</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>63</td>
                                    <td>Tidur di luar asrama tanpa sepengetahuan/izin dari Pembina Asrama atau IBL
                                        secara
                                        gelap</td>
                                    <td>Sedang</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>64</td>
                                    <td>Memalsukan tandatangan pembina asrama</td>
                                    <td>Sedang</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>65</td>
                                    <td>Kabur dari asrama</td>
                                    <td>Berat</td>
                                    <td>40</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </section>

    </main><!-- End #main -->




    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="">
            &copy; Copyright <strong><span>PA-II Kelompok 7</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    {{-- <script src="{{ $totalAspaAspi->cdn() }}"></script>
  {{ $totalAspaAspi->script() }} --}}
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"
        integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script src="admin-asset/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin-asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin-asset/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="admin-asset/assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin-asset/assets/vendor/quill/quill.min.js"></script>
    {{-- <script src="admin-asset/assets/vendor/simple-datatables/simple-datatables.js"></script> --}}
    <script src="admin-asset/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin-asset/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <!-- Template Main JS File -->
    {{-- <script src="admin-asset/assets/js/main.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                    "extend": 'pdfHtml5',
                    "text": 'Download',
                    "className": 'btn-warning text-white'
                }],

            })
        });
    </script>

</body>

</html>
