<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResourceTest extends TestCase {

    use DatabaseTransactions;

    protected $title = 'Curso de Patrones de Diseño con PHP';
    protected $link = 'https://styde.net/curso-de-patrones-de-diseno-con-php/';

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_create_resource()
	{
	    // Having
	    $user = seed('User');

	    // When
	    $this->actingAs($user)
            ->visit(route('tickets.create'))
            ->type($this->title, 'title')
            ->type($this->link, 'link')
            ->press('Enviar solicitud');

	    // Then
        $this->seeInDatabase('tickets', [
            'title' => $this->title,
            'link' => $this->link,
            'status' => 'closed'
        ]);

        $this->see($this->title)
            ->seeLink('Ver recurso', $this->link);
    }

}
