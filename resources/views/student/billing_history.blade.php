@extends('layouts.student')
@section('student')
    <div class="container">

        <div class="bg-white p-6 rounded-md shadow overflow-auto">

            <span class="block font-medium md:text-lg mb-4"> Billing History </span>

            <table class="sm:table-fixed w-full divide-y font-medium">
                <thead>
                    <tr>
                        <th class="w-1/6 py-3 whitespace-nowrap"> Invo no </th>
                        <th class="w-1/6 py-3 whitespace-nowrap"> Date </th>
                        <th class="py-3 text-right w-1/6 whitespace-nowrap"> Payment Status</th>
                        <th class="py-3 text-right w-1/6 whitespace-nowrap"> Amount</th>
                        <th class="w-1/6 py-3 whitespace-nowrap"> </th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34
                                </span></span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-red-100 text-red-600 font-semibold px-3 py-1 rounded-full text-sm">Not Paid</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$24.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34
                                </span></span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-yellow-100 text-yellow-600 font-semibold px-3 py-1 rounded-full text-sm">Pending</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$26.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34 </span>
                            </span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$32.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34
                                </span></span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$29.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34 </span>
                            </span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$36.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34
                                </span></span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$29.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34 </span>
                            </span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$26.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap py-4"><span>621345</span></td>
                        <td class="whitespace-nowrap py-4"><span>2021-05-14 <span class="md:inline hidden"> 12:31:34
                                </span></span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="bg-green-100 text-green-600 font-semibold px-3 py-1 rounded-full text-sm">Success</span>
                        </td>
                        <td class="whitespace-nowrap py-4 text-right"><span>$29.00</span></td>
                        <td class="whitespace-nowrap py-4 text-right"><span
                                class="border font-semibold px-3.5 py-1.5 rounded-md text-sm">Download PDF</span></td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>
@endsection
