@extends('livewire.admin.master')

@section('content')
    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- Summary Cards -->
        <div class="row g-4 mb-5">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded-3">
                    <i class="fas fa-book card-icon mb-3 text-primary"></i>
                    <h5 class="card-title text-deep-teal fw-semibold">Total Books Sold</h5>
                    <h3 class="fw-bold text-primary">245</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded-3">
                    <i class="fas fa-book-open card-icon mb-3 text-primary"></i>
                    <h5 class="card-title text-deep-teal fw-semibold">Books Available</h5>
                    <h3 class="fw-bold text-accent">512</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded-3">
                    <i class="fas fa-users card-icon mb-3 text-primary"></i>
                    <h5 class="card-title text-deep-teal fw-semibold">Total Users</h5>
                    <h3 class="fw-bold text-success">128</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="dashboard-card p-4 text-center bg-white shadow-sm rounded-3">
                    <i class="fas fa-dollar-sign card-icon mb-3 text-primary"></i>
                    <h5 class="card-title text-deep-teal fw-semibold">Total Revenue</h5>
                    <h3 class="fw-bold text-warning">$3,450</h3>
                </div>
            </div>
        </div>

        <!-- Charts Section -->
        <div class="row g-4 mb-5">
            <div class="col-12 col-lg-6">
                <div class="chart-container bg-white p-4 shadow-sm rounded-3">
                    <h5 class="card-title mb-3 text-deep-teal fw-semibold">Monthly Sales</h5>
                    <div id="salesChart" class="chart"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="chart-container bg-white p-4 shadow-sm rounded-3">
                    <h5 class="card-title mb-3 text-deep-teal fw-semibold">Available Books</h5>
                    <div id="availableBooksChart" class="chart"></div>
                </div>
            </div>
        </div>

        <!-- User Management Table -->
        <div class="table-container bg-white p-4 shadow-sm rounded-3 mb-5">
            <h5 class="card-title mb-3 text-deep-teal fw-semibold">Manage Users</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col" class="sortable" data-sort="id">ID <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="name">Name <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="email">Email <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="role">Role <i class="fas fa-sort"></i></th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>john.doe@example.com</td>
                            <td>Seller</td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit user"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete user"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@example.com</td>
                            <td>Buyer</td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit user"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete user"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alice Johnson</td>
                            <td>alice.johnson@example.com</td>
                            <td>Seller</td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit user"><i class="fas fa-edit"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete user"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="User table pagination">
                    <ul class="pagination justify-content-end mt-3">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Manage Books Table -->
        <div class="table-container bg-white p-4 shadow-sm rounded-3">
            <h5 class="card-title mb-3 text-deep-teal fw-semibold">Manage Books</h5>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col" class="sortable" data-sort="title">Title <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="author">Author <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="price">Price <i class="fas fa-sort"></i></th>
                            <th scope="col" class="sortable" data-sort="status">Status <i class="fas fa-sort"></i></th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=1200"
                                    class="book-img rounded" alt="The Great Gatsby Cover" data-bs-toggle="modal"
                                    data-bs-target="#imageModal" height="40"
                                    data-img-src="https://static.scientificamerican.com/sciam/cache/file/1DDFE633-2B85-468D-B28D05ADAE7D1AD8_source.jpg?w=1200"
                                    style="cursor: pointer;">
                            </td>
                            <td>The Great Gatsby</td>
                            <td>F. Scott Fitzgerald</td>
                            <td>$8.00</td>
                            <td><span class="badge bg-success">Available</span></td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit book"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Sold" aria-label="Mark book as sold"><i class="fas fa-check-circle fs-5"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete book"><i class="fas fa-trash-alt fs-5"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://www.publishcentral.com.au/wp-content/uploads/2023/05/book-pile-of-must-read-books-scaled1.jpeg"
                                    class="book-img rounded" alt="1984 Cover" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    height="40"
                                    data-img-src="https://www.publishcentral.com.au/wp-content/uploads/2023/05/book-pile-of-must-read-books-scaled1.jpeg"
                                    style="cursor: pointer;">
                            </td>
                            <td>1984</td>
                            <td>George Orwell</td>
                            <td>$10.00</td>
                            <td><span class="badge bg-danger">Sold</span></td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit book"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Available" aria-label="Mark book as available"><i class="fas fa-undo fs-5"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete book"><i class="fas fa-trash-alt fs-5"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://thumbs.dreamstime.com/b/old-book-flying-letters-magic-light-background-bookshelf-library-ancient-books-as-symbol-knowledge-history-218640948.jpg"
                                    class="book-img rounded" alt="To Kill a Mockingbird Cover" data-bs-toggle="modal"
                                    data-bs-target="#imageModal" height="40"
                                    data-img-src="https://thumbs.dreamstime.com/b/old-book-flying-letters-magic-light-background-bookshelf-library-ancient-books-as-symbol-knowledge-history-218640948.jpg"
                                    style="cursor: pointer;">
                            </td>
                            <td>To Kill a Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>$7.50</td>
                            <td><span class="badge bg-success">Available</span></td>
                            <td>
                                <button class="btn-icon btn-edit" title="Edit" aria-label="Edit book"><i class="fas fa-edit fs-5"></i></button>
                                <button class="btn-icon btn-status mx-1" title="Mark as Sold" aria-label="Mark book as sold"><i class="fas fa-check-circle fs-5"></i></button>
                                <button class="btn-icon btn-delete" title="Delete" aria-label="Delete book"><i class="fas fa-trash-alt fs-5"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Book table pagination">
                    <ul class="pagination justify-content-end mt-3">
                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Book Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-white rounded-3 shadow">
                <div class="modal-header bg-primary text-white border-0">
                    <h5 class="modal-title fw-semibold" id="imageModalLabel">Book Cover</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <img src="" class="modal-img img-fluid rounded" id="modalImage" alt="Book Cover">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- ApexCharts JS -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.41.0/dist/apexcharts.min.js"></script>
    <script>
        // Monthly Sales Chart
        var salesOptions = {
            series: [{
                name: 'Books Sold',
                data: [30, 40, 35, 50, 49, 60, 70]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true
                    }
                }
            },
            colors: ['var(--primary)'],
            plotOptions: {
                bar: {
                    borderRadius: 6,
                    horizontal: false,
                    columnWidth: '50%'
                }
            },
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                labels: {
                    style: {
                        colors: 'var(--text-muted)',
                        fontSize: '12px',
                        fontFamily: 'var(--font-family)'
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Books Sold',
                    style: {
                        color: 'var(--text-muted)',
                        fontWeight: 600,
                        fontFamily: 'var(--font-family)'
                    }
                },
                labels: {
                    style: {
                        colors: 'var(--text-muted)',
                        fontSize: '12px',
                        fontFamily: 'var(--font-family)'
                    }
                }
            },
            grid: {
                borderColor: 'var(--border)',
                strokeDashArray: 4
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " books";
                    }
                }
            }
        };
        var salesChart = new ApexCharts(document.querySelector("#salesChart"), salesOptions);
        salesChart.render();

        // Available Books Chart
        var availableBooksOptions = {
            series: [{
                name: 'Books Available',
                data: [120, 130, 110, 140, 135, 150, 145]
            }],
            chart: {
                type: 'line',
                height: 350,
                toolbar: {
                    show: true,
                    tools: {
                        download: true,
                        selection: true,
                        zoom: true,
                        zoomin: true,
                        zoomout: true,
                        pan: true
                    }
                }
            },
            colors: ['var(--accent)'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 3
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                labels: {
                    style: {
                        colors: 'var(--text-muted)',
                        fontSize: '12px',
                        fontFamily: 'var(--font-family)'
                    }
                }
            },
            yaxis: {
                title: {
                    text: 'Books Available',
                    style: {
                        color: 'var(--text-muted)',
                        fontWeight: 600,
                        fontFamily: 'var(--font-family)'
                    }
                },
                labels: {
                    style: {
                        colors: 'var(--text-muted)',
                        fontSize: '12px',
                        fontFamily: 'var(--font-family)'
                    }
                }
            },
            grid: {
                borderColor: 'var(--border)',
                strokeDashArray: 4
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " books";
                    }
                }
            }
        };
        var availableBooksChart = new ApexCharts(document.querySelector("#availableBooksChart"), availableBooksOptions);
        availableBooksChart.render();

        // Update modal image source
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('imageModal');
            modal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const imgSrc = button.getAttribute('data-img-src');
                const modalImg = modal.querySelector('#modalImage');
                modalImg.src = imgSrc;
            });
        });
    </script>
@endpush