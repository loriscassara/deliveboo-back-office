@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <table class="table rounded-2 table-striped table-hover w-100 m-auto">
            <thead >
                <tr>
                    <th class="fs-4 text-white" scope="col">Nome cliente</th>
                    <th class="fs-4 text-white" scope="col">Email</th>
                    <th class="fs-4 text-white" scope="col">Indirizzo</th>
                    <th class="fs-4 text-white" scope="col">Note del cliente</th>
                    <th class="fs-4 text-white" scope="col">Stato pagamento</th>
                    <th class="fs-4 text-white" scope="col">Totale</th>
                    <th class="fs-4 text-white" scope="col">Data e ora</th>
                    <th class="fs-4 text-white" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="card-body fs-5">{{ $order->name }} {{ $order->surname }}</td>
                        <td class="card-body fs-5">{{ $order->email }}</td>
                        <td class="card-body fs-5">{{ $order->address }}</td>
                        <td class="card-body fs-5">{{ $order->notes }}</td>
                        <td class="card-body fs-5">{{ $order->paid == 1 ? 'Pagato' : 'Non pagato' }}</td>
                        <td class="card-body fs-5">{{ $order->total }} €</td>
                        <td class="card-body fs-5">{{ $order->created_at }}</td>
                        <td class="card-body fs-5"><a style="color: black" href="{{route('admin.orders.show',$order->id)}}"><i class="fas fa-eye"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @if ($orders->count() == 0)
        <h4>Attualmente non ci sono ordini</h4>
    @endif
@endsection
