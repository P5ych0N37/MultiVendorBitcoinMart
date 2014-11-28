<div class="callout panel">This order is not yet confirmed. <br/>
    In order to confirm it, enter your shipping info and your wallet PIN and click 'Confirm'. <br/>
    The vendor will then receive the order.
</div>

<form action="?c=orders&a=confirm" method="post">
    <input type="hidden" name="h" value="<?= $this->h($order->id) ?>"/>
    <div class="row order">
        <div class="small-2 columns">
            <label class="right">Shipping info</label>
        </div>
        <div class="small-6 columns end">
            <textarea name="shipping_info"
                      rows="3"
                      placeholder="Address"
                      required="true"
                      title="Please put your shipping info (ie address) here."><?= isset($this->post['shipping_info']) ? $this->e($this->post['shipping_info']) : '' ?></textarea>
        </div>
    </div>

    <div class="row order">
        <div class="small-2 columns">
            <label class="right">Bitcoin public key (compressed)</label>
        </div>
        <div class="small-8 columns end">
            <input name="public_key"
                   type="text"
                   placeholder="bitcoin public key, compressed (66 hex chars)"
                   required="true"
                   title="Please put your compressed bitcoin public key here."
                   value="<?= isset($this->post['public_key']) ? $this->e($this->post['public_key']) : '' ?>">
        </div>
    </div>


    <div class="row order">
        <div class="small-2 columns">
            <label class="right">Profile pin</label>
        </div>
        <div class="small-6 columns end">
            <input type="password"
                   name="profile_pin"
                   placeholder="Enter your profile pin"
                   required="true"
                   autocomplete="off">
        </div>
    </div>

    <div class="row">
        <div class="small-6 small-offset-2 columns">
            <input type="submit" value="Confirm" class="button small success" />
        </div>
    </div>
</form>