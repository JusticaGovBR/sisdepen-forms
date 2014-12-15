<?php
return array(
    'zf-versioning' => array(
        'default_version' => 1,
        'uri' => array(
            0 => 'dados-publicos.rest.unidades-prisionais',
        ),
    ),
    'router' => array(
        'routes' => array(
            'dados-publicos.rest.unidades-prisionais' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/unidades-prisionais[/:unidades_prisionais_id]',
                    'defaults' => array(
                        'controller' => 'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisResource' => 'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\Controller' => array(
            'listener' => 'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisResource',
            'route_name' => 'dados-publicos.rest.unidades-prisionais',
            'route_identifier_name' => 'unidades_prisionais_id',
            'collection_name' => 'unidades_prisionais',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisEntity',
            'collection_class' => 'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisCollection',
            'service_name' => 'unidadesPrisionais',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\Controller' => array(
                0 => 'application/vnd.dados-publicos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\Controller' => array(
                0 => 'application/vnd.dados-publicos.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'dados-publicos.rest.unidades-prisionais',
                'route_identifier_name' => 'unidades_prisionais_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'DadosPublicos\\V1\\Rest\\UnidadesPrisionais\\UnidadesPrisionaisCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'dados-publicos.rest.unidades-prisionais',
                'route_identifier_name' => 'unidades_prisionais_id',
                'is_collection' => true,
            ),
        ),
    ),
);
