<?php

it('has table index page', function () {
    $this->get('/tables')->assertStatus(200);
});
