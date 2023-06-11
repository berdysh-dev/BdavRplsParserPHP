<?php

    require_once "vendor/autoload.php" ;

    use berdysh_dev\BdavRplsParser ;

    class BdavRplsParserTest extends PHPUnit\Framework\TestCase{

        protected BdavRplsParser  $ctx ;

        protected function setUp() :void{
            $this->ctx = new BdavRplsParser() ;
        }

        public function testAll(){
            echo "\n" ;
            $this->assertTrue($this->ctx->SelfTest()) ;
        }
    }








