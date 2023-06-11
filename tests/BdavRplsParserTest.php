<?php

    require_once "vendor/autoload.php" ;

    use berdysh_dev\BdavRplsParser ;

    class BdavRplsParserTest extends PHPUnit\Framework\TestCase{

        BdavRplsParser  $ctx ;

        function setUp(){
            $this->ctx = new BdavRplsParser();
        }

        public function testAll(){
            $this->assertTrue($this->ctx->SelfTest()) ;
        }
    }








