@extends('layouts.admin')
@section('content')
    <!-- Dashboard content -->
    <div class="col-lg-9 pt-2 pt-xl-3">

        <!-- Header -->
        <div class="d-flex align-items-center justify-content-between gap-3 pb-3 mb-2 mb-md-3">
            <h1 class="h2 mb-0">Dashboard</h1>
        </div>

        <!-- Most recent sales -->
        <div class="border rounded-4 py-4 px-3 px-sm-4">
            <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3 mb-2 mb-sm-3 mb-md-4">
                <h2 class="h5 text-center text-sm-start mb-0">Most recent sales</h2>
                <div class="position-relative w-100" style="max-width: 250px">
                    <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input type="search" class="product-search form-control form-icon-start rounded-pill" placeholder="Search">
                </div>
            </div>
            <table class="table align-middle fs-sm mb-0">
                <thead>
                <tr>
                    <th class="ps-0" scope="col">
                        <span class="fw-normal text-body">Product</span>
                    </th>
                    <th class="d-none d-md-table-cell" scope="col">
                        <button type="button" class="btn fw-normal text-body product-sort p-0" data-sort="date">Date</button>
                    </th>
                    <th class="d-none d-md-table-cell" scope="col">
                        <span class="fw-normal text-body">Status</span>
                    </th>
                    <th class="text-end d-none d-sm-table-cell" scope="col">
                        <button type="button" class="btn fw-normal text-body product-sort p-0 me-n2" data-sort="tendered">Tendered</button>
                    </th>
                    <th class="text-end pe-0" scope="col">
                        <button type="button" class="btn fw-normal text-body product-sort p-0 me-n2" data-sort="earning">Earning</button>
                    </th>
                </tr>
                </thead>
                <tbody class="product-list">

                <!-- Item -->
                <tr>
                    <td class="py-3 ps-0">
                        <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative">
                            <div class="ratio bg-body-secondary rounded-2 overflow-hidden flex-shrink-0" style="--cz-aspect-ratio: calc(52 / 66 * 100%); width: 66px">
                                <img src="assets/img/account/products/03.jpg" class="hover-effect-target" alt="Image">
                            </div>
                            <div class="ps-2 ms-1">
                                <span class="badge fs-xs text-info bg-info-subtle rounded-pill d-md-none mb-1">Pending</span>
                                <h6 class="product mb-1 mb-md-0">
                                    <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="shop-product-marketplace.html">iPhone 15 pro mockups</a>
                                </h6>
                                <div class="fs-body-emphasis d-sm-none mb-1">$19.00</div>
                                <div class="fs-body-emphasis d-md-none">June 30, 2024</div>
                            </div>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell py-3">June 30, 2024<span class="date visually-hidden">1719745200</span></td>
                    <td class="d-none d-md-table-cell py-3">
                        <span class="badge fs-xs text-info bg-info-subtle rounded-pill">Pending</span>
                    </td>
                    <td class="tendered text-end d-none d-sm-table-cell py-3">$19.00</td>
                    <td class="earning text-end py-3 pe-0">$14.25</td>
                </tr>

                <!-- Item -->
                <tr>
                    <td class="py-3 ps-0">
                        <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative">
                            <div class="ratio bg-body-secondary rounded-2 overflow-hidden flex-shrink-0" style="--cz-aspect-ratio: calc(52 / 66 * 100%); width: 66px">
                                <img src="assets/img/account/products/04.jpg" class="hover-effect-target" alt="Image">
                            </div>
                            <div class="ps-2 ms-1">
                                <span class="badge fs-xs text-success bg-success-subtle rounded-pill d-md-none mb-1">Completed</span>
                                <h6 class="product mb-1 mb-md-0">
                                    <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="shop-product-marketplace.html">A collection of colorful items</a>
                                </h6>
                                <div class="fs-body-emphasis d-sm-none mb-1">$21.00</div>
                                <div class="fs-body-emphasis d-md-none">June 29, 2024</div>
                            </div>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell py-3">June 29, 2024<span class="date visually-hidden">1719658800</span></td>
                    <td class="d-none d-md-table-cell py-3">
                        <span class="badge fs-xs text-success bg-success-subtle rounded-pill">Completed</span>
                    </td>
                    <td class="tendered text-end d-none d-sm-table-cell py-3">$21.00</td>
                    <td class="earning text-end py-3 pe-0">$15.75</td>
                </tr>

                <!-- Item -->
                <tr>
                    <td class="py-3 ps-0">
                        <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative">
                            <div class="ratio bg-body-secondary rounded-2 overflow-hidden flex-shrink-0" style="--cz-aspect-ratio: calc(52 / 66 * 100%); width: 66px">
                                <img src="assets/img/account/products/05.jpg" class="hover-effect-target" alt="Image">
                            </div>
                            <div class="ps-2 ms-1">
                                <span class="badge fs-xs text-success bg-success-subtle rounded-pill d-md-none mb-1">Completed</span>
                                <h6 class="product mb-1 mb-md-0">
                                    <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="shop-product-marketplace.html">House plants website template</a>
                                </h6>
                                <div class="fs-body-emphasis d-sm-none mb-1">$35.00</div>
                                <div class="fs-body-emphasis d-md-none">June 28, 2024</div>
                            </div>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell py-3">June 28, 2024<span class="date visually-hidden">1719572400</span></td>
                    <td class="d-none d-md-table-cell py-3">
                        <span class="badge fs-xs text-success bg-success-subtle rounded-pill">Completed</span>
                    </td>
                    <td class="tendered text-end d-none d-sm-table-cell py-3">$35.00</td>
                    <td class="earning text-end py-3 pe-0">$26.25</td>
                </tr>

                <!-- Item -->
                <tr>
                    <td class="py-3 ps-0">
                        <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative">
                            <div class="ratio bg-body-secondary rounded-2 overflow-hidden flex-shrink-0" style="--cz-aspect-ratio: calc(52 / 66 * 100%); width: 66px">
                                <img src="assets/img/account/products/07.jpg" class="hover-effect-target" alt="Image">
                            </div>
                            <div class="ps-2 ms-1">
                                <span class="badge fs-xs text-success bg-success-subtle rounded-pill d-md-none mb-1">Completed</span>
                                <h6 class="product mb-1 mb-md-0">
                                    <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="shop-product-marketplace.html">A stunning set of tablet pro mockups</a>
                                </h6>
                                <div class="fs-body-emphasis d-sm-none mb-1">$18.00</div>
                                <div class="fs-body-emphasis d-md-none">June 27, 2024</div>
                            </div>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell py-3">June 27, 2024<span class="date visually-hidden">1719486000</span></td>
                    <td class="d-none d-md-table-cell py-3">
                        <span class="badge fs-xs text-success bg-success-subtle rounded-pill">Completed</span>
                    </td>
                    <td class="tendered text-end d-none d-sm-table-cell py-3">$18.00</td>
                    <td class="earning text-end py-3 pe-0">$13.50</td>
                </tr>

                <!-- Item -->
                <tr>
                    <td class="py-3 ps-0">
                        <div class="d-flex align-items-start align-items-md-center hover-effect-scale position-relative">
                            <div class="ratio bg-body-secondary rounded-2 overflow-hidden flex-shrink-0" style="--cz-aspect-ratio: calc(52 / 66 * 100%); width: 66px">
                                <img src="assets/img/account/products/08.jpg" class="hover-effect-target" alt="Image">
                            </div>
                            <div class="ps-2 ms-1">
                                <span class="badge fs-xs text-danger bg-danger-subtle rounded-pill d-md-none mb-1">Canceled</span>
                                <h6 class="product mb-1 mb-md-0">
                                    <a class="fs-sm fw-medium hover-effect-underline stretched-link" href="shop-product-marketplace.html">Multi device mockup PSD</a>
                                </h6>
                                <div class="fs-body-emphasis d-sm-none mb-1">$27.00</div>
                                <div class="fs-body-emphasis d-md-none">June 26, 2024</div>
                            </div>
                        </div>
                    </td>
                    <td class="d-none d-md-table-cell py-3">June 26, 2024<span class="date visually-hidden">1719399600</span></td>
                    <td class="d-none d-md-table-cell py-3">
                        <span class="badge fs-xs text-danger bg-danger-subtle rounded-pill">Canceled</span>
                    </td>
                    <td class="tendered text-end d-none d-sm-table-cell py-3">$27.00</td>
                    <td class="earning text-end py-3 pe-0">$0.00</td>
                </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex align-items-center justify-content-between pt-4 gap-3">
                <div class="fs-sm">Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">20</span><span class="d-none d-sm-inline"> results</span></div>
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li class="page-item active" aria-current="page">
                        <span class="page-link">
                          1
                          <span class="visually-hidden">(current)</span>
                        </span>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
