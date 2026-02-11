@extends('layouts.app')

@section('title', 'Meu Carrinho - Musclr')

@section('content')
<div class="form-container" style="max-width: 900px;">
    <h1>Meu Carrinho</h1>

    @if($cartItems->isEmpty())
        <p style="text-align: center;">Seu carrinho está vazio. <a href="{{ route('home') }}">Bora treinar!</a></p>
    @else
        <div class="cart-grid" style="display: flex; flex-direction: column; gap: 20px;">
            @foreach($cartItems as $item)
                <div class="cart-item" data-price="{{ $item->product->price }}" data-quantity="{{ $item->quantity }}" style="display: flex; align-items: center; padding: 15px; border: 1px solid #ddd; border-radius: 10px; gap: 20px;">
                    <input type="checkbox" class="product-select" style="width: 20px; height: 20px; cursor: pointer;">
                    
                    <img src="{{ asset('storage/' . $item->product->urlImage) }}" style="width: 80px; height: 80px; object-fit: contain;">
                    
                    <div style="flex-grow: 1;">
                        <h3 style="margin: 0;">{{ $item->product->name }}</h3>
                        <p style="color: #666; margin: 5px 0;">Qtd: {{ $item->quantity }}</p>
                    </div>

                    <div style="text-align: right;">
                        <span style="font-weight: bold; font-size: 1.1rem;">R$ {{ number_format($item->product->price * $item->quantity, 2, ',', '.') }}</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="cart-summary" style="margin-top: 30px; padding: 20px; background: #f9f9f9; border-radius: 10px; text-align: right;">
            <p>Subtotal (selecionados): <span id="subtotal" style="font-weight: bold;">R$ 0,00</span></p>
            <h2 style="margin: 10px 0;">Total: <span id="total" style="color: #02ff02; text-shadow: 1px 1px 2px #000;">R$ 0,00</span></h2>
            <button class="btn-submit" style="max-width: 300px; margin-left: auto;">Finalizar Compra</button>
        </div>
    @endif
</div>

<script>
    document.querySelectorAll('.product-select').forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            let subtotal = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const isSelected = item.querySelector('.product-select').checked;
                if (isSelected) {
                    const price = parseFloat(item.getAttribute('data-price'));
                    const quantity = parseInt(item.getAttribute('data-quantity'));
                    subtotal += price * quantity;
                }
            });

            const formatted = subtotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            document.getElementById('subtotal').innerText = formatted;
            document.getElementById('total').innerText = formatted;
        });
    });
</script>
@endsection