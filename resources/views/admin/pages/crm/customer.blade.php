@extends('admin.masterview')

@section('tittle')
    <title>Admin | CRM | Customer</title>
@endsection

@section('main-content')
    <!-- Content start -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class=" mb-4">
                    <h3>Customers</h3>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-6">
                    <div class="card card-border">
                        <div class="card-body">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <span class="avatar avatar-rounded !bg-indigo-600 text-2xl" data-avatar-size="55">
                                        <span class="avatar-icon">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div>
                                        <span>Total Customers</span>
                                        <h3>
                                            <span>2,420</span>
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="tag gap-1 font-bold border-0 text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-500/20">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                            aria-hidden="true" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span>17.2%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-border">
                        <div class="card-body">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <span class="avatar avatar-rounded !bg-blue-500 text-2xl" data-avatar-size="55">
                                        <span class="avatar-icon">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div>
                                        <span>Active Customers</span>
                                        <h3>
                                            <span>1,897</span>
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="tag gap-1 font-bold border-0 text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-500/20">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                            aria-hidden="true" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span>32.7%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-border" role="presentation">
                        <div class="card-body">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <span class="avatar avatar-rounded !bg-emerald-500 text-2xl" data-avatar-size="55">
                                        <span class="avatar-icon">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                                aria-hidden="true" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                                </path>
                                            </svg>
                                        </span>
                                    </span>
                                    <div>
                                        <span>New Customers</span>
                                        <h3>
                                            <span>241</span>
                                        </h3>
                                    </div>
                                </div>
                                <div
                                    class="tag gap-1 font-bold border-0 text-red-600 dark:text-red-500 bg-red-100 dark:bg-red-500/20">
                                    <span>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20"
                                            aria-hidden="true" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <span>-2.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card adaptable-card">
                    <div class="card-body">
                        <table id="customers-data-table" class="table-default table-hover data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Last Online</th>
                                    <th></th>
                                </tr>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center"><span class="avatar avatar-circle w-[28px]"
                                                data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg"
                                                    loading="lazy"></span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#?id=1">Carolyn
                                                Perkins</a>
                                        </div>
                                    </td>
                                    <td>carolyn_h@hotmail.com</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">06/12/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-2.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=2">Terrance Moreno</a>
                                        </div>
                                    </td>
                                    <td>terrance_moreno@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">09/23/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-3.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=3">
                                                Ron Vargas
                                            </a>
                                        </div>
                                    </td>
                                    <td>ronnie_vergas@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-red-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">09/23/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-4.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=4">Luke Cook</a>
                                        </div>
                                    </td>
                                    <td>cookie_lukie@hotmail.com</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">12/10/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-5.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=5">Joyce Freeman</a>
                                        </div>
                                    </td>
                                    <td>joyce991@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">09/24/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-6.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=6">Samantha Phillips</a>
                                        </div>
                                    </td>
                                    <td>samanthaphil@infotech.io</td>
                                    <td>
                                        <div class="flex items-center"><span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/02/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-7.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold" href="#?id=7">
                                                Tara Fletcher
                                            </a>
                                        </div>
                                    </td>
                                    <td>taratarara@imaze.edu.du</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">09/28/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=8">Frederick Adams</a>
                                        </div>
                                    </td>
                                    <td>iamfred@imaze.infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-red-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">12/11/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-9.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=9">Carolyn Hanson</a>
                                        </div>
                                    </td>
                                    <td>carolyn_h@gmail.com</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-red-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/18/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-10.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"
                                                href="#?id=10">Brittany Hale</a>
                                        </div>
                                    </td>
                                    <td>brittany1134@gmail.com</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/06/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-11.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#">Lloyd
                                                Obrien</a>
                                        </div>
                                    </td>
                                    <td>handsome-obrien@hotmail.com</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/19/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-12.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#">Gabriella
                                                May</a>
                                        </div>
                                    </td>
                                    <td>maymaymay12@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-red-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">blocked</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/14/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-13.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#">Lee
                                                Wheeler</a>
                                        </div>
                                    </td>
                                    <td>lee_wheeler@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">11/12/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-14.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#">Gail
                                                Barnes</a>
                                        </div>
                                    </td>
                                    <td>gailby0116@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">10/01/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-circle w-[28px]" data-avatar-size="28">
                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-15.jpg"
                                                    loading="lazy">
                                            </span>
                                            <a class="hover:text-primary-600 ml-2 rtl:mr-2 font-semibold"href="#">Ella
                                                Robinson</a>
                                        </div>
                                    </td>
                                    <td>ella_robinson@infotech.io</td>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="ml-2 rtl:mr-2 capitalize">active</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="flex items-center">11/07/2021</div>
                                    </td>
                                    <td>
                                        <div class="text-primary-600 cursor-pointer select-none font-semibold">Edit</div>
                                    </td>
                                </tr>
                            </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Content end -->
@endsection

@section('customJs')
    <!-- Other Vendors JS -->
    <script src="{{ asset('assets') }}/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/vendors/datatables/dataTables.custom-ui.min.js"></script>

    <!-- Page js -->
    <script src="{{ asset('assets') }}/js/pages/customers.js"></script>
@endsection
