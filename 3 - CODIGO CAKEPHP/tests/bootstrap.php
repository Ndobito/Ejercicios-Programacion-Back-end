<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Marco de Desarrollo Rápido (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licencia bajo The MIT License
 * Para información completa de copyright y licencia, por favor vea LICENSE.txt
 * Las redistribuciones de archivos deben mantener el aviso de copyright anterior.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Migrations\TestSuite\Migrator;

/**
 * Ejecución de pruebas de arranque.
 *
 * Añada configuración adicional a su aplicación cuando ejecute pruebas unitarias en este archivo.
 * pruebas unitarias en este archivo.
 */
require dirname(__DIR__) . '/vendor/autoload.php';

require dirname(__DIR__) . '/config/bootstrap.php';

if (empty($_SERVER['HTTP_HOST']) && !Configure::read('App.fullBaseUrl')) {
    Configure::write('App.fullBaseUrl', 'http://localhost');
}

// DebugKit omite la configuración de estas conexiones si PHP SAPI es CLI / PHPDBG.
// Pero como PagesControllerTest se ejecuta con debug activado y DebugKit se carga
// en la aplicación, sin establecer estas configuraciones DebugKit falla.
ConnectionManager::setConfig('test_debug_kit', [
    'className' => 'Cake\Database\Connection',
    'driver' => 'Cake\Database\Driver\Sqlite',
    'database' => TMP . 'debug_kit.sqlite',
    'encoding' => 'utf8',
    'cacheMetadata' => true,
    'quoteIdentifiers' => false,
]);

ConnectionManager::alias('test_debug_kit', 'debug_kit');

// Fijar el sessionid desde el principio, ya que php7.2+
// no permite que el identificador de sesión sea fijado después de que stdout
// haya sido escrito.
session_id('cli');

// Usar migraciones para construir el esquema de la base de datos de prueba.
//
// Reconstruirá la base de datos si el estado de la migración difiere
// del histórico de migraciones en ficheros.
//
// Si no estas usando las migraciones de CakePHP puedes
// enganchar su herramienta de migracion de eleccion aqui o
// cargar el esquema desde un archivo de volcado SQL con
// use Cake\TestSuite\Fixture\SchemaLoader;
// (new SchemaLoader())->loadSqlFiles('./tests/schema.sql', 'test');

(new Migrator())->run();
