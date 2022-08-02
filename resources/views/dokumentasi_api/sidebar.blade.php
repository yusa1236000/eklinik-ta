<div class="container d-md-flex align-items-stretch">
    <!-- Page Content  -->
    <div id="content" class="list-contetn p-4 p-md-5 pt-5">
        <h2 class="mb-4">Dokumentasi API Klinik Laa Tachzan</h2>
        <p>Dokumentasi ini menjelaskan cara mengakses layanan API Klimik Laa Tachzan</p>
        <p></p>
        @foreach ($documentations as $documentation)
            <hr>
            <h2 class="mb-2">{{ $documentation->title }}</h2>
            <p>{{ $documentation->description }}</p>

            <h2 class="mb-3">Request</h2>
            <div class="mb-3 card">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="url-tab" data-bs-toggle="tab" data-bs-target="#url"
                                type="button" role="tab" aria-controls="url" aria-selected="true">URL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="parameter-tab" data-bs-toggle="tab" data-bs-target="#parameter"
                                type="button" role="tab" aria-controls="parameter"
                                aria-selected="false">Parameter</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="url" role="tabpanel" aria-labelledby="url-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>URL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $documentation->method }}</td>
                                        <td>{{ $documentation->url }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="parameter" role="tabpanel" aria-labelledby="parameter-tab">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Wajib</th>
                                        <th>Type</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parameter as $item)
                                        <tr>
                                            <td>{{ $documentation->method ?? '' }}</td>
                                            <td>{{ $item->name ?? '' }}</td>
                                            <td>{{ $item->is_required ?? '' }}</td>
                                            <td>{{ $item->type ?? '' }}</td>
                                            <td>{{ $item->description ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="mb-3">Response</h2>
            <div class="mb-3 card">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="sukses-tab" data-bs-toggle="tab"
                                data-bs-target="#sukses" type="button" role="tab" aria-controls="sukses"
                                aria-selected="true">Response Sukses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="gagal-tab" data-bs-toggle="tab" data-bs-target="#gagal"
                                type="button" role="tab" aria-controls="gagal" aria-selected="false">Respon
                                Gagal</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi"
                                type="button" role="tab" aria-controls="deskripsi"
                                aria-selected="false">Keterangan</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="sukses" role="tabpanel"
                            aria-labelledby="sukses-tab">
                            <pre><code class="language-json">
                            {{ $documentation->response->success }}
                       </code></pre>
                        </div>
                        <div class="tab-pane fade" id="gagal" role="tabpanel" aria-labelledby="gagal-tab">
                            <pre><code class="language-json">
                            {{ $documentation->response->failed }}
                        </code></pre>
                        </div>
                        <div class="tab-pane fade" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                            <pre><code class="language-json">
                            {{ $documentation->response->description }}
                        </code></pre>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <br>
    </div>

    <nav id="sidebar">
        <div class="p-4 pt-5">
            <h5>Memulai</h5>
            <ul class="list-unstyled components mb-5">
                <li>
                    <a href="/dokumentasi_api" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Ringkasan</a>
                </li>
                <li>
                    <a href="/dokumentasi_api" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Request</a>
                </li>
                <li>
                    <a href="/dokumentasi_api" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Response</a>
                </li>
            </ul>
        </div>
</div>
</nav>
</div>
<div class="containernavbar navbar-expand-lg navbar-dark bg-success">

    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #02af67;">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center"></p>
                    <p class="big"><span>KLINIK LAA TACHZAN</span></p>
                    <p class="big"><span>© 2022 Copyright</span></p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->
            <div class="text-center p-2" style="background-color: rgb(247, 245, 245);">
            </div>
        </footer>
    </section>
</div>

<script>
    hljs.initHighlightingOnLoad();
</script>
