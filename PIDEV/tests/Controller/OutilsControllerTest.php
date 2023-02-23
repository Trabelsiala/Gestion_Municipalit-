<?php

namespace App\Test\Controller;

use App\Entity\Outils;
use App\Repository\OutilsRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OutilsControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private OutilsRepository $repository;
    private string $path = '/outils/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Outils::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Outil index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'outil[label_out]' => 'Testing',
            'outil[quantite]' => 'Testing',
            'outil[image]' => 'Testing',
            'outil[reservations]' => 'Testing',
        ]);

        self::assertResponseRedirects('/outils/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Outils();
        $fixture->setLabel_out('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setImage('My Title');
        $fixture->setReservations('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Outil');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Outils();
        $fixture->setLabel_out('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setImage('My Title');
        $fixture->setReservations('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'outil[label_out]' => 'Something New',
            'outil[quantite]' => 'Something New',
            'outil[image]' => 'Something New',
            'outil[reservations]' => 'Something New',
        ]);

        self::assertResponseRedirects('/outils/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getLabel_out());
        self::assertSame('Something New', $fixture[0]->getQuantite());
        self::assertSame('Something New', $fixture[0]->getImage());
        self::assertSame('Something New', $fixture[0]->getReservations());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Outils();
        $fixture->setLabel_out('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setImage('My Title');
        $fixture->setReservations('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/outils/');
    }
}
