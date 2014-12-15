<?php
namespace DadosPublicos\V1\Rest\UnidadesPrisionais;

class UnidadesPrisionaisResourceFactory
{
    public function __invoke($services)
    {
        return new UnidadesPrisionaisResource();
    }
}
