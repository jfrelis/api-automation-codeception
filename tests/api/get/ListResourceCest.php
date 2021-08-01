<?php

class ListResourceCest
{
    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGet('/api/unknown');
        $I->seeResponseCodeIs(200); //status response = 200
        $I->seeResponseIsJson();
    }
}
