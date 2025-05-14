<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="payment_method">Način plaćanja</label>
        <select name="payment_method" id="payment_method" class="form-control">
            <option value="card">Kartica</option>
            <option value="cash_on_delivery">Pouzećem</option>
        </select>
    </div>

    <div class="form-group">
        <label for="total_price">Ukupna cena</label>
        <input type="number" name="total_price" id="total_price" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Poruči</button>
</form>
